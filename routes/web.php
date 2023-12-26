<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [MainController::class, 'index'])->name('page.main');

Route::get('/guest-news', [NewsController::class, 'indexGuest'])->name('news.guest.index');

Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');

Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');

Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
