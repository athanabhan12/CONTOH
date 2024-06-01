<?php

namespace App\Http\Controllers;

use App\Models\DataTour;
use App\Models\Kegiatan;
use App\Models\Masterkegiatan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('kegiatan', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kegiatan = Kegiatan::all();
        $master_kegiatan = Masterkegiatan::all();
        $data_tour = DataTour::all();
        return view('tambah_kegiatan', compact('data_tour','kegiatan','master_kegiatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_tour                     = $request->input('id_tour');
        $nama_kegiatan               = $request->input('nama_kegiatan');
        $lokasi_kegiatan             = $request->input('lokasi_kegiatan');
        $jam_mulai                   = $request->input('jam_mulai');
        $jam_selesai                 = $request->input('jam_selesai');
        $id_master_kegiatan          = $request->input('id_master_kegiatan');
        Alert::success('Berhasil!', 'Data Berhasil Ditambahkan');

        DB::select("CALL sp_import_kegiatan('$id_tour','$nama_kegiatan','$lokasi_kegiatan','$jam_mulai','$jam_selesai','$id_master_kegiatan')");
         
        return back();
    
    }

    public function create_master_kegiatan()
    {
        $user = auth()->user();
       
        // Filter DataTour berdasarkan id_tour dari session
    $data_tour = DataTour::where('id', $user->id_tour)->get();
    
    // Ambil id dari data_tour yang sudah difilter
    $data_tour = $data_tour->pluck('id');
    
    // Filter Masterkegiatan berdasarkan id dari data_tour
    $master_kegiatan = Masterkegiatan::whereIn('id', $data_tour)->get();

        $data_tour = DataTour::all();
        $master_kegiatan = Masterkegiatan::all();
        return view('tambah_master_kegiatan', compact('data_tour','master_kegiatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_master_kegiatan(Request $request)
    {
        $master_kegiatan                                  = new Masterkegiatan();
        $master_kegiatan->id_tour                         = $request->id_tour;
        $master_kegiatan->nama_kegiatan                   = $request->nama_kegiatan;
        $master_kegiatan->lokasi_kegiatan                 = $request->lokasi_kegiatan;
        $master_kegiatan->jam_mulai                       = $request->jam_mulai;
        $master_kegiatan->jam_selesai                     = $request->jam_selesai;
        Alert::success('Berhasil!', 'Data Berhasil Ditambahkan');
        $master_kegiatan->save();
        return back();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_tour)
    {
        $kegiatan = Masterkegiatan::where('id_tour', $id_tour)->get();
        // var_dump($kegiatan);die();
        return view('kegiatan', compact('kegiatan'));
    }

    public function detail($id)
    {

        $user = auth()->user();
        // echo"<pre>";
        // print_r($data_tour_raw);die();
        if ($user->id_role == 1) {
            $kegiatan = DB::select("CALL sp_datatable_kegiatan(0, $id)");
        } else {
            $data_tour_raw = DB::select("CALL sp_data_tours($user->id)");
            $data_tour = $data_tour_raw[0];

            // var_dump($data_tour->id);die;
            $kegiatan = DB::select("CALL sp_datatable_kegiatan($data_tour->id, $id)");
        }

        
        $pelanggansArray = json_decode(json_encode($kegiatan), true);
        
        $count_pelanggan = DB::select("CALL sp_count_daftar_hadir_kegiatan($data_tour->id, $id)");
        $status_hadir_pelanggan = (array) $count_pelanggan[0];
        // var_dump($status_hadir_pelanggan);die();
        $jumlah_hadir =$status_hadir_pelanggan['hadir'];
        $belum_hadir =$status_hadir_pelanggan['belum_hadir'];
        
        return view('detail_kegiatan', compact('count_pelanggan','jumlah_hadir','belum_hadir','kegiatan'));
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
