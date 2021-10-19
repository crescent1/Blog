<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCPDF as GlobalTCPDF;
// use Elibyy\TCPDF\Facades\TCPDF as PDF;
use PDF;

class DownloadController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function download()
    {
        /**
         * @var string $logo
         */
        $logo = \View::make('dashboard.download.d-logo')->render();
        /**
         * @var string $title
         */
        $title = '<h1 class="mb-n2 sz-fontTitle">RAGA SPORT FLOORING</h1>';
        /**
         * @var string $office
         */
        $office = '<small class="mt-n1"><strong>Office : </strong>Jl. Wisma Katang Blok B VII no. 18 Rt.02 Rw.06 Kecamatan Ngasem
        Kabupaten Kediri. Jawa Timur Kode Pos 64181</small>';
        /**
         * @var string $email
         */
        $email = '<small class="p-0 m-0"><strong>Email : </strong>ragasportflooring@gmail.com</small>';
        /**
         * @var string $web
         */
        $web = '<small class="p-0 m-0"><strong>Web : </strong>www.indoflooring.com</small>';
        /**
         * @var string $wa
         */
        $wa = '<small class="p-0 m-0"><strong>HP/WA : </strong>0811.3737.575</small>';

        /**
         * @var string $textClosing
         */
        $textClosing = "Data\n\n\n\n\n\\n\n\n\n\n\n\\n\n\n\\n\n\n\n\n\\n\n\n\n\n\n\n\n\n\n\n\n\\n\n\n\n\n\n\\n\n\n\n\n\n\n\n\n\n\n\\n\n\n\n\n\\n\n\n\n\\n\n\n\n\n\\n\n\n\n\n\n\\n\n\n\n\n\n\\n\n\n\nDemikian Rencana Anggaran Biaya ini kami ajukan, semoga dapat memenuhi kebutuhan Bapak/ Ibu dalam merealisasikan pelaksanaan pekerjaan tersebut, atas perhatian yang diberikan kami ucapkan Terima kasih.";

        // $pdf = new GlobalTCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // $pdf->SetTitle('RSF-RAB');
        // $pdf->SetMargins(10, 5, 10);
        // $pdf->SetAutoPageBreak(true, 30);

        PDF::setHeaderCallback(function($pdf) use ($logo, $title, $office, $email, $web, $wa){

            $pdf->SetFont('times', '');
            $pdf->writeHTMLCell(50, 0, 7, 5, $logo, 0, 0, false, true, 'C', false);
            $pdf->writeHTMLCell(143, 0, 57, 5, $title, 0, 1);
            $pdf->writeHTMLCell(143, 0, 57, 13, $office, 0, 1);
            $pdf->writeHTMLCell(72, 0, 57, 22, $email, 0, 0);
            $pdf->writeHTMLCell(71, 0, 129, 22, $web, 0, 1);
            $pdf->writeHTMLCell(143, 13, 57, 27.5, $wa, 0, 1);
            $pdf->Line(10, 35, 200, 35, array('color' => array(255, 124, 59)));

        });

        // Custom Footer
        PDF::setFooterCallback(function($pdf) {

            // Position at 15 mm from bottom
            $pdf->SetY(-15);
            // Set font
            $pdf->SetFont('helvetica', 'I', 8);
            // Page number
            $pdf->Cell(0, 10, 'Page '.$pdf->getAliasNumPage().'/'.$pdf->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');

        });

        PDF::SetAuthor('System');
        PDF::SetTitle('My Report');
        PDF::SetSubject('Report of System');
        PDF::SetMargins(10, 35, 10);
        PDF::SetFontSubsetting(false);
        PDF::SetFontSize('10px');
        PDF::SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        PDF::AddPage('P', 'A4');
        // PDF::writeHTML($html, true, false, true, false, '');
        PDF::setCellPaddings(0, 0, 0, 0);
        PDF::setCellMargins(0, 0, 0, 0);
        PDF::MultiCell(190, 0, $textClosing, 0, 'L', false, 1, '', '', true);
        PDF::lastPage();
        PDF::Output('my_file.pdf');


    }
}
