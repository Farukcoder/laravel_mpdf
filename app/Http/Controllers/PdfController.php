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

        $content = view('pdf.student_id_card');
        $this->pdfGenerate($content,$config);

    }
    public function student_id()
    {

        $config = ['format' => 'A4-l', 'title' => 'student_id', 'file_name' => 'student_id','style' => 'css/admission_form.css'];

        $content = view('pdf.student_id');
        $this->pdfGenerate($content,$config);

    }
    public function testimonial()
    {

        $config = ['format' => 'A4-l', 'title' => 'testimonial', 'file_name' => 'testimonial','style' => 'css/admission_form.css'];

        $content = view('pdf.testimonial');
        $this->pdfGenerate($content,$config);

    }
    public function account_ledger()
    {

        $config = ['format' => 'A4-p', 'title' => 'account_ledger', 'file_name' => 'account_ledger','style' => 'css/admission_form.css'];

        $content = view('pdf.account_ledger');
        $this->pdfGenerate($content,$config);

    }
    public function balance_sheet()
    {

        $config = ['format' => 'A4-p', 'title' => 'balance_sheet', 'file_name' => 'balance_sheet','style' => 'css/admission_form.css'];

        $content = view('pdf.balance_sheet');
        $this->pdfGenerate($content,$config);

    }
    public function trial_balance()
    {

        $config = ['format' => 'A4-p', 'title' => 'trial_balance', 'file_name' => 'trial_balance','style' => 'css/admission_form.css'];

        $content = view('pdf.trial_balance');
        $this->pdfGenerate($content,$config);

    }
    public function student_migration()
    {

        $config = ['format' => 'A4-p', 'title' => 'student_migration', 'file_name' => 'student_migration','style' => 'css/admission_form.css'];

        $content = view('pdf.student_migration');
        $this->pdfGenerate($content,$config);

    }
    public function student_daily_attendence_summary()
    {

        $config = ['format' => 'A4-l', 'title' => 'student_daily_attendence_summary', 'file_name' => 'student_daily_attendence_summary','style' => 'css/admission_form.css'];

        $content = view('pdf.student_daily_attendence_summary');
        $this->pdfGenerate($content,$config);

    }
    public function student_attendence_detail()
    {

        $config = ['format' => 'A4-p', 'title' => 'student_attendence_detail', 'file_name' => 'student_attendence_detail','style' => 'css/admission_form.css'];

        $content = view('pdf.student_attendence_detail');
        $this->pdfGenerate($content,$config);

    }
    public function exam_admit_card()
    {

        $config = ['format' => 'A4-l', 'title' => 'exam_admit_card', 'file_name' => 'exam_admit_card','style' => 'css/admission_form.css'];

        $content = view('pdf.exam_admit_card');
        $this->pdfGenerate($content,$config);

    }
    public function student_ledger()
    {

        $config = ['format' => 'A4-l', 'title' => 'student_ledger', 'file_name' => 'student_ledger','style' => 'css/admission_form.css'];

        $content = view('pdf.student_ledger');
        $this->pdfGenerate($content,$config);

    }
    public function sms_details()
    {

        $config = ['format' => 'A4-l', 'title' => 'sms_details', 'file_name' => 'sms_details','style' => 'css/admission_form.css'];

        $content = view('pdf.sms_details');
        $this->pdfGenerate($content,$config);

    }
    public function quickCollectionDetails()
    {

        $config = ['format' => 'A4-p', 'title' => 'quickCollectionDetails', 'file_name' => 'quickCollectionDetails','style' => 'css/admission_form.css'];

        $content = view('pdf.quickCollectionDetails');
        $this->pdfGenerate($content,$config);

    }
    public function print_routine()
    {

        $config = ['format' => 'A4-l', 'title' => 'print_routine', 'file_name' => 'print_routine','style' => 'css/admission_form.css'];

        $content = view('pdf.print_routine');
        $this->pdfGenerate($content,$config);

    }
    public function print_invoice_file()
    {

        $config = ['format' => 'A4-p', 'title' => 'print_invoice_file', 'file_name' => 'print_invoice_file','style' => 'css/admission_form.css'];

        $content = view('pdf.print_invoice_file');
        $this->pdfGenerate($content,$config);

    }
    public function employe_attendence_details()
    {

        $config = ['format' => 'A4-p', 'title' => 'employe_attendence_details', 'file_name' => 'employe_attendence_details','style' => 'css/admission_form.css'];

        $content = view('pdf.employe_attendence_details');
        $this->pdfGenerate($content,$config);

    }
    public function employee_daily_attendence_summary()
    {

        $config = ['format' => 'A4-l', 'title' => 'employee_daily_attendence_summary', 'file_name' => 'employee_daily_attendence_summary','style' => 'css/admission_form.css'];

        $content = view('pdf.employee_daily_attendence_summary');
        $this->pdfGenerate($content,$config);

    }
    public function employee_id()
    {

        $config = ['format' => 'A4-l', 'title' => 'employee_id', 'file_name' => 'employee_id', 'style' => 'css/admission_form.css'];

        $content = view('pdf.employee_id');
        $this->pdfGenerate($content, $config);
    }
    public function student_wise_transcipt()
    {

        $config = ['format' => 'A4-p', 'title' => 'student_wise_transcipt', 'file_name' => 'student_wise_transcipt', 'style' => 'css/admission_form.css'];

        $content = view('pdf.student_wise_transcipt');
        $this->pdfGenerate($content, $config);
    }
}
