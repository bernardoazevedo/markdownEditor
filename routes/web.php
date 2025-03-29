<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;

Route::get('/', [ContentController::class, 'index'])->name('index');

Route::post('/markdownToHtml', [ContentController::class, 'markdownToHtmlAjax'])->name('markdownToHtml');
Route::post('/generatePdf', [ContentController::class, 'generatePdf'])->name('generatePdf');

require __DIR__.'/auth.php';
