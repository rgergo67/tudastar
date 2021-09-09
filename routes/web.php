<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\TinyMceUploadController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['page-cache']], function () {
    Route::view('/', 'welcome')->name('home');
    Route::view('/kata', 'welcome-kata')->name('welcome-kata');
    Route::view('/csaladi-koltsegvetes', 'welcome-family')->name('welcome-family');
    Route::view('/legyen-tobb-penzed-mint-a-szuleidnek', 'welcome-legyen-tobb-penzed-mint-a-szuleidnek')->name('welcome-legyen-tobb-penzed-mint-a-szuleidnek');

    Route::get('tudastar/{document}', KnowledgeController::class)->name('knowledge.show');
    Route::view('tudastar', 'knowledge')->name('knowledge.index');

    Route::get('cikkek', [ArticleController::class, 'index'])->name('cikkek.index');
    Route::get('cikkek/{slug}', [ArticleController::class, 'show'])->name('cikkek.show');

    Route::view('credit', 'credit')->name('credit');
    Route::view('aszf', 'terms')->name('aszf');
    Route::view('kapcsolat', 'contact')->name('contact');
    Route::view('offline', 'offline')->name('offline');
});

Route::domain(config('app.app_domain'))->group(function () {
    Route::get('demo')->name('demo.create');
    Route::get('ikonok')->name('icons');
});

Route::group(['middleware' => ['web', 'admin']], function () {
    Route::get('articles', [ArticleController::class, 'adminIndex'])->name('articles.index');
    Route::resource('articles', ArticleController::class)->except(['show', 'index']);
    Route::get('articles/{article}', [ArticleController::class, 'adminShow'])->name('articles.show');
    Route::post('tinymce_upload', [TinyMceUploadController::class, 'upload'])->name('tinymce_upload');
});

Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('auth.create');
Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('auth.store');

require __DIR__.'/auth.php';
