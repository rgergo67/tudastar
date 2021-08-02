<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class OpenBusinessController extends Controller
{
    public function index(): View
    {
        return view('open_business.index', [
            'income' => 0,
            'profit' => 0,
            'userCount' => 0,
        ]);
    }
}
