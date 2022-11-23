<?php

namespace App\Http\Controllers\Traits;


use Mpdf\Mpdf;

trait PdfGenerator
{


    public function pdfGenerate($contents, $config = ['format' => 'A4-P', 'title' => 'Default', 'Subject' => 'Default', 'is_watermark' => false, 'watermark_path' => 'images/test_purpose_only.png','file_name' => 'default','style' => 'css/khatian_modal.css'  ])
    {

        $defaultConfig = (new \Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new \Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $mpdf = new mPDF([
            'watermarkAngle' => '45',
            'fontDir' => array_merge($fontDirs, [
                public_path('fonts'),
            ]),
            'fontdata' => $fontData + [
                    'bangla' => [
                        'R' => 'Kalpurush-Regular.ttf',
                        'useOTL' => 0xFF,
                        'useKashida' => 75,
                    ],
                ],
            'default_font' => 'bangla',
            'setAutoTopMargin' => 'pad',
            'mode' => 'utf-8',
            'format' => $config['format'] ?? 'A4-P', // 'A4-P' = Portrait  , A4-L = landscape
            'default_font_size' => 11,
        ]);

        $mpdf->useSubstitutions;
        $mpdf->SetProtection(array('print'));
        $mpdf->SetDefaultBodyCSS('color', '#000');
        $mpdf->SetTitle($config['title'] ?? 'Deafult');
        $mpdf->SetSubject($config['Subject'] ?? 'Deafult');
        $mpdf->SetAuthor("StromeSoft Bangladesh Limited");
        $mpdf->autoScriptToLang = true;
        $mpdf->baseScript = 1;
        $mpdf->autoVietnamese = true;
        $mpdf->autoArabic = true;
        $mpdf->autoLangToFont = true;
        $mpdf->SetDisplayMode('fullwidth');
        $mpdf->setAutoTopMargin = 'stretch';
        $mpdf->setAutoBottomMargin = 'stretch';
        $mpdf->setAutoTopMargin = 'stretch';
        $mpdf->setAutoBottomMargin = 'stretch';

        $showWatermarkImage = $config['is_watermark'] ?? false;
        if ($showWatermarkImage) {
            $mpdf->SetWatermarkImage($config['watermark_path'] ?? 'images/test_purpose_only.png', '.3', '', [55, 90]);
            $mpdf->showWatermarkImage = true;
        }
       $stylesheet = file_get_contents(public_path($config['style'] ?? 'css/khatian_modal.css'));
       $mpdf->WriteHTML($stylesheet, 1);
        $mpdf->WriteHTML($contents, 2);
        $mpdf->defaultfooterfontsize = 10;
        $mpdf->defaultfooterfontstyle = 'B';
        $mpdf->defaultfooterline = 0;
        $mpdf->SetCompression(true);
        $fileName = ($config['file_name'] ?? 'default') . '.pdf';
        $mpdf->Output($fileName, 'I');

    }
}
