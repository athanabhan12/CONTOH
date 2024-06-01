<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataTour;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TourLeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        if ($user->id_role == 1) {
            $data_tours = DB::select("CALL sp_data_tour(0)");
        } else {

            $data_tours = DB::select("CALL sp_data_tour($user->id)");
        }

        return view('tour', compact('data_tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_tours = User::all();
        return view('tour_baru', compact('data_tours'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_tours                                  = new DataTour();
        $data_tours->id_tour_leader                  = $request->id_tour_leader;
        $data_tours->nama_tour                       = $request->nama_tour;
        $data_tours->tgl_berangkat_tour              = $request->tgl_berangkat_tour;
        $data_tours->tgl_selesai_tour                = $request->tgl_selesai_tour;
        $data_tours->destinasi_tour                  = $request->destinasi_tour;
        $data_tours->rombongan_tour                  = $request->rombongan_tour;
        $data_tours->jumlah_peserta_tour             = $request->jumlah_peserta_tour;
        $data_tours->save();
         
        return redirect('tour');
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
