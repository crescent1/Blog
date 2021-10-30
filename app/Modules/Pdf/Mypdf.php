<?php

namespace App\Modules\PDF;

use TCPDF;

class MYPDF extends TCPDF
{
    /**
     * custom header
     *
     * @return void
     */
    public function Header()
    {

    }

    /**
     * custom footer
     *
     * @return void
     */
    public function Footer()
    {

    }
}





// class MYPDF extends TCPDF
// {
//     /**
//      * Undocumented function
//      *
//      * @return void
//      */
//     public function Header() {

//         /**
//          * @var string $logo
//          */
//         $logo = \View::make('dashboard.download.d-logo')->render();
//         /**
//          * @var string $title
//          */
//         $title = '<h1 class="mb-n2 sz-fontTitle">RAGA SPORT FLOORING</h1>';
//         /**
//          * @var string $office
//          */
//         $office = '<small class="mt-n1"><strong>Office : </strong>Jl. Wisma Katang Blok B VII no. 18 Rt.02 Rw.06 Kecamatan Ngasem
//         Kabupaten Kediri. Jawa Timur Kode Pos 64181</small>';
//         /**
//          * @var string $email
//          */
//         $email = '<small class="p-0 m-0"><strong>Email : </strong>ragasportflooring@gmail.com</small>';
//         /**
//          * @var string $web
//          */
//         $web = '<small class="p-0 m-0"><strong>Web : </strong>www.indoflooring.com</small>';
//         /**
//          * @var string $wa
//          */
//         $wa = '<small class="p-0 m-0"><strong>HP/WA : </strong>0811.3737.575</small>';

//         $this->SetFont('times', '');
//         $this->writeHTMLCell(50, 0, 7, 5, $logo, 0, 0, false, true, 'C', false);
//         $this->writeHTMLCell(143, 0, 57, 5, $title, 0, 1);
//         $this->writeHTMLCell(143, 0, 57, 13, $office, 0, 1);
//         $this->writeHTMLCell(72, 0, 57, 22, $email, 0, 0);
//         $this->writeHTMLCell(71, 0, 129, 22, $web, 0, 1);
//         $this->writeHTMLCell(143, 13, 57, 27.5, $this->CustomHeaderText, 0, 1);
//         $this->Line(10, 35, 200, 35, array('color' => array(255, 124, 59)));


//     }

//     /**
//      * Undocumented function
//      *
//      * @return void
//      */
//     public function Footer() {

//         // Position at 15 mm from bottom
//         $this->SetY(-10);
//         // Set font
//         $this->SetFont('helvetica', 'I', 8);
//         // Page number
//         $this->Cell(0, 0, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, 0, 'R', false, '', 0, false, 'T', 'M');
//     }

// }
