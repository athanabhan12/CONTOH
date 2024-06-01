<?php

namespace App\Http\Controllers;

use App\Models\DataTour;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_peserta()
    {
        $laporan_peserta = Peserta::all();
        return view('laporan_peserta', compact('laporan_peserta'));
    }

    public function index_data_tour()
    {
        $laporan_data_tour = DataTour::all();
        return view('laporan_data_tour', compact('laporan_data_tour'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $fpdf;
 
    public function __construct()
    {
        $this->fpdf = new Fpdf;
    }

    public function pdf_peserta() 
    {
        $peserta = Peserta::all();

        foreach ($peserta as $value) {
            $this->fpdf->AddPage("P", 'A4');
            $this->fpdf->SetFont('Arial', '', 15);
        
            // Add other cell content
            $this->fpdf->Cell(0, 10, $value['nama_peserta'], 1, 1, 'C');
            $this->fpdf->Cell(0, 10, $value['kelas'], 1, 1, 'C');
            $this->fpdf->Text(10, 10, "Hello World!");

        } 
        $this->fpdf->Output();


            exit;
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
