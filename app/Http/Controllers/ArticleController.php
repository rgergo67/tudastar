<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;

class ArticleController extends Controller
{
    public function __invoke(string $document): View
    {
        return view()->exists('articles.' . $document)
            ? view('articles.' . $document)
            : view('articles.index');
    }
}
