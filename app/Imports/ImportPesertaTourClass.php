<?php

namespace App\Imports;

use App\Models\Peserta;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportPesertaTourClass implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        return new Peserta([
            'id_tour' => $row[0],
            'nama_peserta' => $row[1],
<<<<<<< HEAD
            'no_telepon' => $row[2],
            'no_peserta_tour' => $row[3],
            'kelas' => $row[4],   
            'jurusan' => $row[5],   
            'bidang' => $row[6],   
            'no_bus_kendaraan' => $row[7],   
=======
            'kelas' => $row[2],
            'no_peserta_tour' => $row[3],
            'id_tour' => $row[4],
>>>>>>> 3f17a9c499e60892f5f0f88fbd2b172fafb6d9b3
        ]);    
    }
}
