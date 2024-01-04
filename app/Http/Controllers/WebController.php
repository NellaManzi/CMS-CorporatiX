<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Setting;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        $setting = Setting::find(1);
        return view('public.landing', compact('setting'));
    }

    /**
     * Tests views layout
    */
    public function showArticle()
    {
        return view('public.landing');
    }

    public function notFound()
    {
        return view('app.pages.404');
    }

    public function dashboard()
    {
        return view('app.pages.home');
    }

    public function settings()
    {
        return view('app.pages.settings');
    }

    public function settings1()
    {
        return '';
    }

    public function settings2()
    {
        return '';
    }

    public function settings3()
    {
        return '';
    }

    public function settings4()
    {
        return '';
    }
}
