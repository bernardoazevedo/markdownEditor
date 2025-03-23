<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ParsedownExtra;

class ContentController extends Controller
{
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
}
