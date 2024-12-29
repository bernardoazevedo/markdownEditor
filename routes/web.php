<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;

Route::get('/', [ContentController::class, 'index'])->name('index');

Route::get('/markdownToHtml', [ContentController::class, 'markdownToHtmlAjax'])->name('markdownToHtml');

require __DIR__.'/auth.php';
