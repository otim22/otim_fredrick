<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsLetterSubscriptionController extends Controller
{
    public function store()
    {
        return view('pages.contact');
    }

}
