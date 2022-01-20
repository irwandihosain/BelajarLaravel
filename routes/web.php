<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\ambilScan;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\GenerateQrDsn;
use App\Http\Controllers\GenerateQrMhs;
use App\Http\Controllers\registerdsn;
use App\Http\Controllers\RegisterMhs;
use App\Http\Controllers\RegisterMhsDsn;

Route::get('/', function () {
    return view('home', [
        'active' => 'home',
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Irwandi Hosain",
        'active' => 'about',
        "email" => "irwandihosain@gmail.com",
        "image" => "irwandi.jpg"
    ]);
});

Route::get('/dashboard/generateqr', function () {
    return view('dashboard/generateqr/index');
});

Route::get('/scan', function () {
    return view('scan', [
        'title' => 'scan',
        'active' => 'scan'
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware(('guest'));
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard/register', [RegisterMhsDsn::class, 'index']);
Route::get('/dashboard/register/mahasiswa', [RegisterMhs::class, 'index']);
Route::post('/createmhs', [RegisterMhs::class, 'store']);

Route::get('/dashboard/register/dosen', [registerdsn::class, 'index']);
Route::post('/createdsn', [registerdsn::class, 'store']);

Route::post('/generateqrmhs', [GenerateQrMhs::class, 'update']);
Route::get('/dashboard/generateqr/mahasiswa', [GenerateQrMhs::class, 'index']);
Route::post('/generateqrdsn', [GenerateQrDsn::class, 'update']);
Route::get('/dashboard/generateqr/dosen', [GenerateQrDsn::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard/index');
})->middleware('auth');

Route::post('/ambilscan', [ambilScan::class, 'create']);

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
