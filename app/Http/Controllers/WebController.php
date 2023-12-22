<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('public.home');
    }

    public function showArticle()
    {
        return view('public.home');
    }
}
