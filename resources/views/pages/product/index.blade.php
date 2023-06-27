@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-2">Semua Produk</h4>
    <a href="{{route('produk.create')}}" class="btn btn-primary px-4">Buat Product Baru</a>

    <div class="table-responsive mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>stock</th>
                    <th>Satuan</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            <img class="mx-4" src="{{url('storage/'. $product->image)}}" style="width: 50; height: 50px; object-fit: cover;" alt="">
                        </td>
                        <td>
                            {{$product->name}}
                        </td>
                        <td>
                            Rp. {{number_format($product->price)}}
                        </td>
                        <td>
                            {{$product->stock}}
                        </td>
                        <td>
                            {{$product->unit}}
                        </td>
                        <td>
                            {{$product->description}}
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <a href="{{route('produk.edit', $product->id)}}" class="btn btn-warning text-white">Edit</a>
                                <form action="{{route('produk.destroy', $product->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" onclick="confirm('Apakah kamu yakin ingin menghapusnya?')">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
