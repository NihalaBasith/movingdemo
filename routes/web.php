<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('services');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/web-admin', [AdminController::class,'login']);
Route::post('/login', [AdminController::class, 'loginAdmin'])->name('web-admin.post-login');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/web-admin', [AdminController::class, 'login'])->name('web-admin');

