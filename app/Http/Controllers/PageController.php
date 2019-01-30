<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function patreon()
    {
        return view('pages.patreon');
    }

    public function projects()
    {
        return view('pages.projects');
    }

    public function resources()
    {
        return view('pages.resources');
    }
}
