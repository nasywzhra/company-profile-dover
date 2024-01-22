<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::paginate(10);
        return view('pages.news.admin.index', compact('news'))->with('no', (request('page', 1) - 1) * 10);
    }

    public function changePassword()
    {
        return view('pages.news.admin.change_password.change_password');
    }

    public function changePasswordProcess(Request $request, $id)
    {
        $this->validate($request, [
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::find($id);

        $user->update([
        'password' => Hash::make($request->password),
        ]);

        return back()->with('change-password', 'Your password has been changed!');
    }
}
