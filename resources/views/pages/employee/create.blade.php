@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h4 class="mb-5">Create New Employee</h4>
        <form action="{{ route('karyawan.store') }}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="mb-3">
                <label for="nik">Nik</label>
                <input type="text" name="nik" class="form-control" id="nik" required>
            </div>
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control shadow-none" required>

                    <option value="Laki Laki">Laki Laki</option>
                    <option value="Perempuan">Perempuan </option>

                </select>
            </div>
            <div class="mb-3">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" required>
            </div>
            <div class="mb-3">
                <label for="tgl_daftar">Tanggal Daftar</label>
                <input type="date" name="tgl_daftar" class="form-control" id="tgl_daftar" required>
            </div>
            <div class="mb-3">
                <label for="agama">Agama</label>
                <select name="agama" id="agama" class="form-control shadow-none" required>
                    <option value="Islam">Islam</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="telp">Telp Number</label>
                <input type="text" name="telp" class="form-control" id="telp" required>
            </div>
            <div class="mb-3">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control" required></textarea>
            </div>
            <div class="d-flex align-items-center gap-3">
                <button class="btn-simpan rounded-2 p-2 px-3" type="submit">Save New Data</button>
                <a href="{{ route('karyawan.index') }}" class="btn btn-light px-3">Back</a>
            </div>

        </form>

    </div>
@endsection
