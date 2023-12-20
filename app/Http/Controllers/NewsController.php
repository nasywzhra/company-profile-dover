<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexGuest()
    {
        return view('pages.news.guest.index');
    }

    public function create()
    {
        return view('pages.news.admin.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
            'news'  => 'required',
        ]);

        $image = $request->file('image');
        $imagePath = "public/news/image";
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs($imagePath, $imageName);

        News::create([
            'title' => $request->title,
            'news' => $request->news,
            'image' => $imageName,
        ]);

        return redirect()->route('home')->with('create', "This news has been create successfully");
    }
}
