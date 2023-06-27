@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="mb-2">Edit Data {{ $product->title }}</h4>

    <form action="{{route('produk.update', $product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="image">Gambar</label>
            <input type="file" accept="image/*" name="image" class="form-control" id="image">
            <span class="text-secondary">Jika tidak ingin mengganti gambar, jangan diisi!</span>
        </div>
        <div class="mb-3">
            <label for="name">Nama Produk</label>
            <input type="text" name="name" class="form-control" value="{{$product->name}}" id="name" required>
        </div>
        <div class="mb-3">
            <label for="price">Harga Produk</label>
            <input type="number" name="price" class="form-control" value="{{$product->price}}" id="price" required>
        </div>
        <div class="mb-3">
            <label for="stock">Stock Produk</label>
            <input type="number" name="stock" class="form-control" value="{{$product->stock}}" id="stock" required>
        </div>
        <div class="mb-3">
            <label for="description">Descripsi</label>
            <textarea name="description" class="form-control" cols="30" rows="3" id="description" required>{{$product->description}}</textarea>
        </div>
        <div class="d-flex align-items-center gap-2">
            <button type="submit" class="btn btn-primary px-3">Simpan Perubahan</button>
            <a href="{{route('produk.index')}}" class="btn btn-light px-3"></a>
        </div>
    </form>
</div>
@endsection
