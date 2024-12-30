<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Parsedown;

class ContentController extends Controller
{
    /**
     * 
     */
    public function index(){
        return view('index');
    }

    /**
     * Parse a Markdown text to HTML
     * @param  String $markdownText the Markdown text to be parsed to HTML
     * @return String 
     */
    public function markdownToHtmlAjax(Request $request): String {
        return $this->markdownToHtml($request->markdownText);
    }

    /**
     * Parse a Markdown text to HTML
     * @param  String $markdownText the Markdown text to be parsed to HTML
     * @return String 
     */
    private function markdownToHtml(String $markdownText): String {
        $parsedown = new Parsedown();
        $htmlText  = $parsedown->text($markdownText);
        return $htmlText;
    }
}
