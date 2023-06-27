<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('name');
            $table->enum('gender',['Laki Laki','Perempuan']);
            $table->date('tgl_lahir');
            $table->date('tgl_daftar');
            $table->enum('agama',['islam', 'kristen', 'Hindu', 'Buddha' ,'Konghucu']);
            $table->string('telp');
            $table->text('alamat');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
