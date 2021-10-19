<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use TCPDF as GlobalTCPDF;

class DownloadController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function download()
    {
        $pdf = new GlobalTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetTitle('RSF-RAB');
        $pdf->SetMargins(10, 5, 10);
        $pdf->SetAutoPageBreak(true, 30);

        // PDF::setHeaderCallback(function($pdf){
        //     $pdf->SetFont('helvetica', 'B', 20);
        //     // Title
        //     $pdf->Cell(0, 15, '<< TCPDF Example 003 >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        // });

        $pdf->AddPage();

    }
}
