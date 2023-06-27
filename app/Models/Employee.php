<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable =[
        'nik',
        'name',
        'slug',
        'gender',
        'tgl_lahir',
        'tgl_daftar',
        'agama',
        'telp',
        'alamat',
    ];
}
