<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\PdfGenerator;
use Illuminate\Http\Request;
use Mpdf\Mpdf;

class PdfController extends Controller
{
    use PdfGenerator;

    public function admission_form()
    {

        $config = ['format' => 'A4-P', 'title' => 'admission_form', 'file_name' => 'admission_form','style' => 'css/admission_form.css', 'is_watermark'=> true, 'watermark_path' => 'images/Logo_Icon/preload2.png'];

        $content = view('pdf.admission_form');
        $this->pdfGenerate($content,$config);

    }
    public function student_id_card()
    {

        $config = ['format' => 'A4-l', 'title' => 'student_id_card', 'file_name' => 'student_id_card','style' => 'css/admission_form.css'];

    //    return view('pdf.student_id_card');
        $content = view('pdf.student_id_card');
        $this->pdfGenerate($content,$config);

    }
    public function student_id()
    {

        $config = ['format' => 'A4-l', 'title' => 'student_id', 'file_name' => 'student_id','style' => 'css/admission_form.css'];

        // return view('pdf.student_id');
        $content = view('pdf.student_id');
        $this->pdfGenerate($content,$config);

    }
}
