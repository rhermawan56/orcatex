<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama_lengkap');
            $table->enum('jenis_kelamin', ['1','2']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat_domisili');
            $table->string('alamat_ktp');
            $table->enum('status_pernikahan',['Kawin', 'Tidak Kawin']);
            $table->enum('status_tempat_tinggal',['1', '2', '3']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodatas');
    }
}
