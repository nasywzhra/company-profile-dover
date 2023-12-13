<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function indexGuest()
    {
        return view('pages.news.guest.index');
    }
}
