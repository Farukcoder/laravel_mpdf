<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\PdfGenerator;
use Illuminate\Http\Request;
use Mpdf\Mpdf;

class PdfControllerV2 extends Controller
{
    use PdfGenerator;

    public function cashbook()
    {
        $config = ['format' => 'A4-P', 'title' => 'admission_form', 'file_name' => 'admission_form', 'style' => 'css/admission_form.css', 'is_watermark' => true, 'watermark_path' => 'images/Logo_Icon/preload2.png'];

        $content = view('pdf.cashbook');
        $this->pdfGenerate($content, $config);

    }

    public function bank_book()
    {
        $config = ['format' => 'A4-P', 'title' => 'bank_book', 'file_name' => 'admission_form', 'style' => 'css/admission_form.css', 'is_watermark' => true, 'watermark_path' => 'images/Logo_Icon/preload2.png'];

        $content = view('pdf.bank_book');
        $this->pdfGenerate($content, $config);

    }


    public function live_class_report()
    {
        $config = ['format' => 'A4-l', 'title' => 'live_class_report', 'file_name' => 'admission_form', 'style' => 'css/admission_form.css', 'is_watermark' => true, 'watermark_path' => 'images/Logo_Icon/preload2.png'];

        $content = view('pdf.live_class_report');
        $this->pdfGenerate($content, $config);

    }
    public function generate_salary_sheet()
    {
        $config = ['format' => 'A4-l', 'title' => 'generate_salary_sheet', 'file_name' => 'admission_form', 'style' => 'css/admission_form.css', 'is_watermark' => true, 'watermark_path' => 'images/Logo_Icon/preload2.png'];

        $content = view('pdf.generate_salary_sheet');
        $this->pdfGenerate($content, $config);

    }

    public function employe_view()
    {
        $config = ['format' => 'A4-P', 'title' => 'employe_view', 'file_name' => 'admission_form', 'style' => 'css/admission_form.css', 'is_watermark' => true, 'watermark_path' => 'images/Logo_Icon/preload2.png'];

        $content = view('pdf.employe_view');
        $this->pdfGenerate($content, $config);

    }
}
