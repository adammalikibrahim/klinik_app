<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();

        return view('pages.employee.index', [
            'employees' => $employees,
            'title' => 'Semua Data Karyawan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();

        return view('pages.employee.create', [
            'employees' => $employees,
            'title' => 'Semua Data Karyawan'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name']);

        Employee::create($data);
        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item = Employee::findOrFail($id);

        return view('pages.employee.show', [
            'item' => $item,
            'title' => 'Detail Karyawan'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Employee::findOrFail($id);

        return view('pages.employee.edit', [
            'item' => $item,
            'title' => 'Edit Karyawan'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($data['name']);

        Employee::findOrFail($id)->update($data);
        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Employee::findOrFail($id)->delete();
        return redirect()->route('karyawan.index');
    }
}
