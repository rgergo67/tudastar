<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\OpenBusinessController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['page-cache']], function () {
    Route::view('/', 'welcome')->name('home');
    Route::view('/kata', 'welcome-kata')->name('welcome-kata');
    Route::view('/csaladi-koltsegvetes', 'welcome-family')->name('welcome-family');
    Route::view('/legyen-tobb-penzed-mint-a-szuleidnek', 'welcome-legyen-tobb-penzed-mint-a-szuleidnek')->name('welcome-legyen-tobb-penzed-mint-a-szuleidnek');

    Route::get('tudastar/{document}', KnowledgeController::class)->name('knowledge.show');
    Route::view('tudastar', 'knowledge')->name('knowledge.index');

    Route::get('cikkek/{document}', ArticleController::class)->name('articles.show');
    Route::view('cikkek', 'articles.index')->name('articles.index');

    Route::view('credit', 'credit')->name('credit');
    Route::view('aszf', 'terms')->name('aszf');
    Route::view('kapcsolat', 'contact')->name('contact');
    Route::view('offline', 'offline')->name('offline');
});

Route::domain(config('app.app_domain'))->group(function () {
    Route::get('demo')->name('demo.create');
    Route::get('ikonok')->name('icons');
});

require __DIR__.'/auth.php';
