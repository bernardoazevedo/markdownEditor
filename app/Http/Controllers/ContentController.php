<?php

namespace App\Http\Controllers;

use App\Services\Color;
use App\Services\CssVariablesParser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ParsedownExtra;

class ContentController extends Controller {
    public function index(){
        return view('index');
    }

    public function markdownToHtmlAjax(Request $request): String {
        return $this->markdownToHtml($request->markdownText);
    }

    private function markdownToHtml(String $markdownText): String {
        $parsedown = new ParsedownExtra();
        $htmlText  = $parsedown->text($markdownText);
        return $htmlText;
    }

    public function generatePdf(Request $request){
        $colorService = new Color();
        $rawText = $request->text;

        $filename = $request->filename ?? 'downloadedFile.pdf';
        $filename = trim($filename);
        $nameInfo = pathinfo($filename);
        $nameInfo['extension'] = $nameInfo['extension'] ?? 'pdf';
        if($nameInfo['extension'] != 'pdf'){
            $nameInfo['extension'] = 'pdf';
        }
        $filename = $nameInfo['filename'].'.'.$nameInfo['extension'];

        $cssVariables = [
            '--marginHeight' => $request->marginHeight.'px',
            '--titleMargin' => $request->titleMargin.'px',
        ];
        $cssColors = [
            '--textColor' => $request->textColor,
            '--highlightColor' => $request->highlightColor,
            '--backgroundColor' => $request->backgroundColor,
        ];
        $cssColors = $colorService->generateDarkerColors($cssColors, 2);
        $cssVariables = array_merge($cssVariables, $cssColors);

        $htmlText = $this->markdownToHtml($rawText);

        $rawCss = Storage::disk('public')->get('pdf.css');

        $parsedCss = CssVariablesParser::parseAllFromArray($rawCss, $cssVariables);

        $css = '<style>'. $parsedCss .'</style>';

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($css.$htmlText);
        $mpdf->Output($filename, \Mpdf\Output\Destination::DOWNLOAD);
    }
}
