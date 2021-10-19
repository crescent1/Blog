<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Elibyy\TCPDF\Facades\TCPDF as PDF;
use TCPDF as GlobalTCPDF;
use Elibyy\TCPDF\Facades\TCPDF as PDF;

class DownloadController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function download()
    {
        // $pdf = new GlobalTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // $pdf->SetTitle('RSF-RAB');
        // $pdf->SetMargins(10, 5, 10);
        // $pdf->SetAutoPageBreak(true, 30);



        PDF::SetTitle('Hello World');
        PDF::setHeaderCallback(function($pdf){
            $pdf->SetFont('helvetica', 'B', 20);
            // Title
            $pdf->Cell(0, 30, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        });
        PDF::SetMargins(10, 5, 10);
        PDF::AddPage();
        PDF::Write(0, 'Hello World');

        PDF::Output('hello_world.pdf');

        // $pdf->AddPage();
        // $pdf->Output(uniqid().'testing.pdf');

    }
}
