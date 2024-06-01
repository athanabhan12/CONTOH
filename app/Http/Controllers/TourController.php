<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use App\Models\DataTour;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
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
<<<<<<< HEAD
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
=======
>>>>>>> 3f17a9c499e60892f5f0f88fbd2b172fafb6d9b3

        return view('tour',compact('data_tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_tour');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user(); // Mengambil data user dari database berdasarkan id_user yang login
<<<<<<< HEAD
        
            $data_tours                                  = new DataTour();
            $data_tours->id_tour_leader                  = $user->id;
            $data_tours->nama_tour                       = $request->nama_tour;
            $data_tours->tgl_berangkat_tour              = $request->tgl_berangkat_tour;
            $data_tours->tgl_selesai_tour                = $request->tgl_selesai_tour;
            $data_tours->destinasi_tour                  = $request->destinasi_tour;
            $data_tours->rombongan_tour                  = $request->rombongan_tour;
            $data_tours->jumlah_peserta_tour             = $request->jumlah_peserta_tour;
            $data_tours->jenis_kendaraan_tour            = $request->jenis_kendaraan_tour;
            $data_tours->jumlah_kendaraan                = $request->jumlah_kendaraan;
            Alert::success('Berhasil!', 'Data Berhasil Ditambahkan');
            $data_tours->save();
            
            return redirect('tour');
=======

        $data_tours                                  = new DataTour();
        $data_tours->id_tour_leader                  = $user->id;
        $data_tours->nama_tour                       = $request->nama_tour;
        $data_tours->tgl_berangkat_tour              = $request->tgl_berangkat_tour;
        $data_tours->tgl_selesai_tour                = $request->tgl_selesai_tour;
        $data_tours->destinasi_tour                  = $request->destinasi_tour;
        $data_tours->rombongan_tour                  = $request->rombongan_tour;
        $data_tours->jumlah_peserta_tour             = $request->jumlah_peserta_tour;
        $data_tours->jenis_kendaraan_tour            = $request->jenis_kendaraan_tour;
        $data_tours->jumlah_kendaraan                = $request->jumlah_kendaraan;
        $data_tours->save();
         
        return redirect('tour');
>>>>>>> 3f17a9c499e60892f5f0f88fbd2b172fafb6d9b3
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_tour)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = DataTour::whereId($id)->first();
        return view('edit_tour')->with('tour', $tour);
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
        $tour                                  = DataTour::find($id);
        $tour->nama_tour                       = $request->nama_tour;
        $tour->tgl_berangkat_tour              = $request->tgl_berangkat_tour;
        $tour->tgl_selesai_tour                = $request->tgl_selesai_tour;
        $tour->destinasi_tour                  = $request->destinasi_tour;
        $tour->rombongan_tour                  = $request->rombongan_tour;
        $tour->jumlah_peserta_tour             = $request->jumlah_peserta_tour;
        $tour->jenis_kendaraan_tour            = $request->jenis_kendaraan_tour;
        $tour->jumlah_kendaraan                = $request->jumlah_kendaraan;
        $tour->save();
        
<<<<<<< HEAD
        return redirect('tour')->with('success', 'Ubah Data Berhasil');
=======
        return redirect('tour');
>>>>>>> 3f17a9c499e60892f5f0f88fbd2b172fafb6d9b3
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = DataTour::find($id);
        $tour->delete();
        return back();
    }
}
