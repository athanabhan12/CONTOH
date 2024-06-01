<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DataTour;

class PGII extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_peserta',
        'no_telepon',
        'kelas',
        'no_peserta_tour',
        'no_bus_kendaraan',
        // tambahkan kolom lain yang ingin diisi secara massal di sini
    ];

    public function data_tour() {
        return $this->belongsTo(DataTour::class, 'id_tour', 'id');
    }
}
