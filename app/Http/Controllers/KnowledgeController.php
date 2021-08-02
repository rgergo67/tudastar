<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;

class KnowledgeController extends Controller
{
    public function __invoke(string $document): View
    {
        return view()->exists('knowledge.' . $document)
            ? view('knowledge.show', [
                    'content' => view('knowledge.' . $document)
                ])
            : view('knowledge');
    }
}
