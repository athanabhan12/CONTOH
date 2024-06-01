<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DataTour;

class Peserta extends Model
{
    use HasFactory;


    protected $fillable = [
        'id_tour',
        'nama_peserta',
        'no_telepon',
        'kelas',
        'no_peserta_tour',
        'no_bus_kendaraan',
        'jurusan',
        'bidang',
        // tambahkan kolom lain yang ingin diisi secara massal di sini
    ];

    public function data_tour() {
        return $this->belongsTo(DataTour::class, 'id_tour', 'id');
    }
}
