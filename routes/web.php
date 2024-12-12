<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\KnowledgeController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['page-cache']], function () {
    Route::view('/', 'welcome')->name('home');
    Route::view('/kata', 'welcome-kata')->name('welcome-kata');
    Route::view('/csaladi-koltsegvetes', 'welcome-family')->name('welcome-family');
    Route::view('/legyen-tobb-penzed-mint-a-szuleidnek', 'welcome-legyen-tobb-penzed-mint-a-szuleidnek')->name('welcome-legyen-tobb-penzed-mint-a-szuleidnek');

    Route::get('tudastar/{document}', KnowledgeController::class)->name('knowledge.show');
    Route::view('tudastar', 'knowledge')->name('knowledge.index');

    Route::get('cikkek/{slug}', [ArticleController::class, 'show'])->name('articles.show');

    Route::view('credit', 'credit')->name('credit');
    Route::view('aszf', 'terms')->name('aszf');
    Route::view('kapcsolat', 'contact')->name('contact');
    Route::view('kerdoiv', 'kerdoiv')->name('kerdoiv');
    Route::get('eloadas', function () {
        return redirect('/cikkek/megoldas-a-penzugyi-problemadra');
    });
});

Route::get('cikkek', [ArticleController::class, 'index'])->name('articles.index');

Route::domain(config('app.app_domain'))->group(function () {
    Route::get('ikonok')->name('icons');
});

Route::get('mennyit-er-a-penzunk', [\App\Http\Controllers\InflationController::class, 'theWorthOfMoney'])->name('inflation.the_worth_of_money');

require __DIR__.'/auth.php';
