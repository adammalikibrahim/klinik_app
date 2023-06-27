@extends('layouts.admin')

@section('content')
<div class="container">
    <h4 class="mb-2">Transaksi</h4>
    <a href="{{route('transaksi.create')}}" class="btn btn-primary px-4">Buat Transaksi Baru</a>

    <div class="table-responsive mt-5">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Quantity</th>
                    <th>price</th>
                    <th>total</th>
                    <th>User</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $item)
                    <tr>
                        <td>
                            {{$item->products->name}}
                        </td>
                        <td>
                            {{number_format($item->quantity)}}
                        </td>
                        <td>
                            {{number_format($item->products->price)}}
                        </td>
                        <td>
                            {{number_format($item->quantity * $item->products->price)}}
                        </td>
                        <td>
                            {{$item->users->name}}
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <form action="{{route('transaksi.destroy', $item->id)}}" method="post">
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
