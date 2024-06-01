<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use App\Models\Peserta;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DaftarHadirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        // echo"<pre>";
        // print_r($data_tour_raw);die();
        if ($user->id_role == 1) {
            $pelanggans = DB::select("CALL sp_datatable_peserta_tour(0)");
        } else {
            $data_tour_raw = DB::select("CALL sp_data_tours($user->id)");
            $data_tour = $data_tour_raw[0];

            // var_dump($data_tour->id);die;
            $pelanggans = DB::select("CALL sp_datatable_peserta_tour($data_tour->id)");
        }

        $jumlah_hadir =0;
        $belum_hadir =0;

        $pelanggansArray = json_decode(json_encode($pelanggans), true);

        foreach ($pelanggansArray as $value) {
            if ($value['status_hadir'] == 1) {
                $jumlah_hadir += 1;
            } else {
                $belum_hadir += 1;
            }
        }

        $count_pelanggan = DB::select("CALL sp_count_daftar_hadir($data_tour->id)");
        // var_dump($jumlah_hadir);die();

        return view('daftar_hadir',compact('pelanggans','count_pelanggan', 'jumlah_hadir', 'belum_hadir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
