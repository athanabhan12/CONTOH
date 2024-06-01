<?php
namespace App\Http\Controllers;
use App\Models\Peserta;
use FPDF;

class PDFController extends Controller
{
    public function pdf()
    {
        $peserta = Peserta::all();
        
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        
        $pdf->Cell(40, 10, 'Hiyahiya');

        $pdf->Output('filename.pdf', 'D');
    }
}
