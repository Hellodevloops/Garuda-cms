<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/webdev', function () {
    return view('webdev');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/iot', function () {
    return view('iot');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('/healthcare', function () {
    return view('healthcare');
});


Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');


