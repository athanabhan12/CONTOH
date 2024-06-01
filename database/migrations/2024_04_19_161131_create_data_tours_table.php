<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tours', function (Blueprint $table) {
            $table->id();
            $table->integer('id_panitia');
            $table->string('nama_tour');
            $table->string('destinasi_tour');
            $table->string('tgl_berangkat_tour');
            $table->string('tgl_selesai_tour');
            $table->string('rombongan_tour');
            $table->string('jumlah_peserta_tour');
            $table->string('jenis_kendaraan_tour');
            $table->string('jumlah_kendaraan');
            $table->string('pic_tour');
            $table->string('no_telepon_pic_tour');
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
        Schema::dropIfExists('data_tours');
    }
};
