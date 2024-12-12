<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArticleController extends Controller
{

    public function show(string $slug): View|RedirectResponse
    {
        $article = Article::firstWhere('slug', $slug);

        if ($article === null) {
            return redirect()->route('articles.index');
        }

        return  view('articles.show', [
            'article' => $article,
            'recommendedArticles' => Article::related($article)->get(),
        ]);
    }

    public function index(): View
    {
        return view('articles.index', [
            'articles' => Article::orderBy('id', 'desc')->simplePaginate(9),
        ]);
    }
}
