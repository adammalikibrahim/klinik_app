@extends('layouts.owner')

@section('content')
    <section class="py-5 mt-5">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="mb-0 text-dark">Employee</h4>
                <a href="{{ route('karyawan.create') }}" class="btn btn-primary" type="button">
                    Add Employee
                </a>
            </div>

            <div class="table-responsive ">
                <table class="table table-striped">
                    <thead>
                        <tr class="text-black">
                            <th>No</th>
                            <th>NIK</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employees as $key => $item)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $item->nik }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->agama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="{{ route('karyawan.show', $item->id) }}"
                                            class="btn btn-info rounded-2 px-2 py-1 text-decoration-none btn-sm">Detail</a>
                                        <a href="{{ route('karyawan.edit', $item->id) }}"
                                            class="btn btn-primary rounded-2 px-2 py-1 text-decoration-none btn-sm">Edit</a>
                                        <form action="{{ route('karyawan.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger rounded-2 px-1 py-1 btn-sm " type="submit"
                                                onclick="return confirm('Temenan?')">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
