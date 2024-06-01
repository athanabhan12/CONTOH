<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peserta;
use App\Models\PGII;

class DataTour extends Model
{
    use HasFactory;

    public function peserta() {
        return $this->hasMany(Peserta::class, 'id_tour');
    }

    public function peserta_pgii() {
        return $this->hasMany(Pgii::class);
    }
}
