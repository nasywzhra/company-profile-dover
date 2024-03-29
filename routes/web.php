<?php

use App\Http\Controllers\HomeController;
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
Route::get('/change-password', [HomeController::class, 'changePassword'])->name('change.password');
Route::put('/change-password-process/{id}', [HomeController::class, 'changePasswordProcess'])->name('change.password.process');

Route::get('/', [MainController::class, 'index'])->name('page.main');

Route::get('/guest-news', [MainController::class, 'indexGuest'])->name('news.guest.index');
Route::get('/guest-news/read-more/{id}', [MainController::class, 'readMoreNews'])->name('news.guest.read.more');

Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');
Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
Route::put('/news/update/{id}', [NewsController::class, 'update'])->name('news.update');
Route::get('/news/show/{id}', [NewsController::class, 'show'])->name('news.show');
Route::delete('/news/delete/{id}', [NewsController::class, 'destroy'])->name('news.destroy');
