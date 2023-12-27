<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('public.landing');
    }

    public function showArticle()
    {
        return view('public.landing');
    }

    public function test()
    {
        return view('app.home');
    }
}
