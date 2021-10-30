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
    public function adminShow(string $slug): View
    {
        $article = Article::firstWhere('slug', $slug);
        return is_null($article)
            ? view('articles.admin_index', [
                'articles' => Article::all(),
            ])
            : view('articles.admin_show', [
            'article' => Article::firstWhere('slug', $slug)
        ]);
    }

    public function show(string $slug): View
    {
        $article = Article::firstWhere('slug', $slug);
        return is_null($article)
            ? view('articles.index', [
                'articles' => Article::all(),
            ])
            : view('articles.show', [
                'article' => $article,
                'recommendedArticles' => Article::inRandomOrder()->where('type', $article->type)->where('id', '<>', $article->id)->limit(3)->get()
            ]);
    }

    public function adminIndex(): View
    {
        return view('articles.admin_index', [
            'articles' => Article::all(),
        ]);
    }

    public function index(): View
    {
        return view('articles.index', [
            'articles' => Article::orderBy('id', 'desc')->simplePaginate(9),
        ]);
    }

    public function create(): View
    {
        return view('articles.create', [
            'types' => Article::groupBy('type')->pluck('type', 'type'),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        if (! empty($request->file('header_image'))) {
            $fileName = $request->file('header_image')->store(
                'images/cikkek',
                'public'
            );
        }

        $article = Article::create([
            'title' => $request->title,
            'type' => $request->type,
            'description' => $request->description,
            'body' => $request->body,
            'slug' => $request->slug ?? Str::slug($request->title),
            'header_image' => $fileName ?? null,
        ]);

        Artisan::call("page-cache:clear /cikkek");
        Artisan::call("sitemap:generate");

        return redirect()->route("articles.show", $article->slug);
    }

    public function edit(Article $article): View
    {
        return view('articles.edit', [
            'article' => $article,
            'types' => Article::groupBy('type')->pluck('type', 'type'),
        ]);
    }

    public function update(Request $request, Article $article): RedirectResponse
    {
        $article->update($request->except('header_image'));

        if (! empty($request->file('header_image'))) {
            $fileName = $request->file('header_image')->store(
                'images/cikkek',
                'public'
            );

            $article->header_image = $fileName;
            $article->save();
        }

        Artisan::call("page-cache:clear /cikkek");
        Artisan::call("page-cache:clear /cikkek/$article->slug");

        return redirect()->route("articles.show", $article->slug);
    }

    public function destroy(Article $article): RedirectResponse
    {
        preg_match_all('/storage\/(wysiwyg-uploads\/[^"]*)/', $article->body, $matches);
        Storage::disk('public')->delete($matches[1]);

        $article->delete();

        Artisan::call("page-cache:clear /cikkek");
        Artisan::call("sitemap:generate");

        return redirect()->route("articles.index");
    }
}
