@extends('layouts.side')

@section('content')
    <section class="deatil py-5 ms-5 px-5">
        <div class="container">
            <div class="d-flex  justify-content-between mb-5">
                <h2 class="mb-0">Datail Employee {{ $item->name }}</h2>
                <a href="{{ route('karyawan.index') }}" class="btn btn-light">Go Back</a>
            </div>

            <table class="table  table-striped">
                <thead>
                    <tr>
                        <th class="col-md-2">NIK</th>
                        <td>: {{ $item->nik }}</td>
                    </tr>
                    <tr>
                        <th class="col-md-2">Nama Karyawan</th>
                        <td>: {{ $item->name }}</td>
                    </tr>
                    <tr>
                        <th class="col-md-2">Jenis Kelamin</th>
                        <td>: {{ $item->gender }}</td>
                    </tr>
                    <tr>
                        <th class="col-md-2">Tanggal Lahir</th>
                        <td>: {{ $item->tgl_lahir }}</td>
                    </tr>
                    <tr>
                        <th class="col-md-2">Tanggal Masuk</th>
                        <td>: {{ $item->tgl_daftar }}</td>
                    </tr>
                    <tr>
                        <th class="col-md-2">Agama</th>
                        <td>: {{ $item->agama }}</td>
                    </tr>
                    <tr>
                        <th class="col-md-2">No Telepon</th>
                        <td>: {{ $item->telp }}</td>
                    </tr>
                    <tr>
                        <th class="col-md-2">alamat</th>
                        <td>: {{ $item->alamat }}</td>
                    </tr>
                </thead>
            </table>
        @endsection
