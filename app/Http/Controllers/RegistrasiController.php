<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Peserta;
use App\Models\Kehadiran;
<<<<<<< HEAD
use App\Models\Masterkegiatan;
=======
>>>>>>> 3f17a9c499e60892f5f0f88fbd2b172fafb6d9b3
use Illuminate\Support\Facades\DB;

class RegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registrasi');
    }
    public function index_kegiatan()
    {
        $kegiatan = Masterkegiatan::all();
        return view('registrasi_kegiatan',compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function scan($id)
    {
        $peserta = Peserta::findOrFail($id);
        return response()->json(['peserta' => $peserta]);
    }

    public function qrcode(Request $request)
    {
        dd($request->qr_code);
    }

    public function detailscan(Request $request)
    {
        $peserta = $request->input('nama_peserta');
        var_dump($peserta);die;
        return response()->json($peserta);
    }

    public function handleScan(Request $request)
{
    $decodedText = $request->input('decodedText');
    
    // Lakukan apa pun yang diperlukan dengan data yang didekode
    // Misalnya, simpan ke database, dll.
    
    // Berikan respons ke klien jika diperlukan
    return response()->json(['status' => 'success', 'message' => 'Data berhasil diproses']);
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kehadiran                                = new Kehadiran();
        $kehadiran->nama_peserta                  = $request->nama_peserta;
        $kehadiran->save();
         
        return redirect('registrasi');
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
        $pelanggans = DB::select("CALL sp_register($id)"); 
        return redirect('registrasi')->with('pelanggans', $pelanggans);
    }

    public function update_kegiatan(Request $request)
    {

        $id_peserta = $request->input('id_peserta');
        $id_master_kegiatan = $request->input('id_master_kegiatan');
        $kegiatan = DB::select("CALL sp_register_kegiatan('$id_peserta', '$id_master_kegiatan')"); 
        // var_dump($id_master_kegiatan,$id_peserta);
        // exit;

        return back()->with('kegitan', $kegiatan);


        // var_dump($request->input('id_peserta'));die;
        // $kegiatan = Masterkegiatan::find($request->input('id_master_kegiatan'));

        // if ($kegiatan) {
        //     $kegiatan->id_peserta = $request->input('id_peserta');
        //     $kegiatan->id_master_kegiatan = $request->input('id_master_kegiatan');
        //     // Update field lainnya
        //     $kegiatan->save();

        //     return response()->json(['success' => 'Data berhasil diperbarui']);
        // } else {
        //     return response()->json(['error' => 'Data tidak ditemukan'], 404);
        // }
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
