<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('biodata_id');
            $table->string('nip')->unique();
            $table->enum('status',['0','1','2','3']);
            $table->enum('status_mess',['0','1']);
            $table->dateTime('tanggal_masuk', 0);
            $table->dateTime('tanggal_keluar', 0)->nullable();
            $table->string('keterangan_masuk');
            $table->string('keterangan_keluar')->nullable();
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
        Schema::dropIfExists('karyawans');
    }
}
