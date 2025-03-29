<?php

namespace App\Http\Controllers;

use App\Services\Color;
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

        $cssColors = [
            '--textColor' => $request->textColor,
            '--highlightColor' => $request->highlightColor,
            '--backgroundColor' => $request->backgroundColor,
        ];
        $cssColors = $colorService->generateDarkerColors($cssColors, 2);

        $htmlText = $this->markdownToHtml($rawText);

        $rawCss = Storage::disk('public')->get('app.css');

        $parsedCss = $this->parseCssVariables($rawCss, $cssColors);

        $css = '<style>'. $parsedCss .'</style>';

        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($css.$htmlText);
        $mpdf->Output();
    }

    private function parseCssVariables($cssCode, $cssColors){
        foreach($cssColors as $key => $value){
            $cssCode = str_replace("var($key)", $value, $cssCode);
        }
        return $cssCode;
    }
}
