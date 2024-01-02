<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   

    public function create()
    {
        return view('pages.news.admin.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:10',
            'image' => 'required|mimes:png,jpg,jpeg,jfif',
            'news'  => 'required|min:30',
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

    public function edit($id)
    {
        $news = News::find($id);

        return view('pages.news.admin.edit' , compact('news'));
    }
    public function update(Request $request, $id)
    {
        $news = News::find($id);

        $this->validate($request, [
            'title' => 'required|min:10',
            'news' => 'required|min:30',
        ]);

        if ($request->hasFile('image')){
            $image = $request->file('image');
            $path = "public/news/image";
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($path, $imageName);

            Storage::delete('/public/news/image/' . $news->image);

            $news->update([
                'title' => $request->title,
                'image' => $imageName,
                'news' => $request->news,
            ]);
        } else {
            $news->update([
                'title'     => $request->title,
                'news'      =>  $request->news,
            ]);
        }
            return redirect()->route('home')->with('update', "The news has been update successfully");
    }

    public function show($id)
    {
        $news = News::find($id);
        return view('pages.news.admin.show', compact('news'));
    }

    public function destroy($id)
    {
        $news = News::find($id);

        Storage::delete('/public/news/image/' . $news->image);

        $news->delete();

        return redirect()->route('home')->with('delete', "News has been deleted successfully!");
    }
}
