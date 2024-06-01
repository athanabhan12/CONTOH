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
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_tour');
            $table->integer('id_tour_leader');
            $table->string('nama_peserta');
            $table->string('no_telepon');
            $table->string('no_peserta_tour');
            $table->string('kelas');
            $table->string('jurusan');
            $table->string('bidang')->nullable();
            $table->string('no_bus_kendaraan');
            $table->string('waktu_scan');
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
        Schema::dropIfExists('pesertas');
    }
};
