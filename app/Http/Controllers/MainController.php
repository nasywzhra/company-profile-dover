<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
     return view('pages.main');   
    }

    public function indexGuest()
    {
        $news   = News::latest()->get();   

        return view('pages.news.guest.index', compact('news'));
    }
    
}
