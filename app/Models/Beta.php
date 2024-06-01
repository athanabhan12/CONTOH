<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beta extends Model
{
    use HasFactory;

    protected $table = 'betas';

    // public function getByid_tour($id_tour)
    // {
    //     return Beta::where('id_tour', $id_tour)->get();
    // }

}
