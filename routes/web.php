<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about-page');

Route::get('/how-title-loan-works', function () {
    return view('how-title-loan-works');
})->name('how-title-loan-works');

Route::get('/how-personal-loan-works', function () {
    return view('how-personal-loan-works');
})->name('how-personal-loan-works');

Route::get('/title-loan', function () {
    return view('title-loan');
})->name('title-loan');

Route::get('/advantages', function () {
    return view('advantages');
})->name('advantages');

Route::get('/blogs', function () {
    return view('blogs.index');
})->name('blogs');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/apply-for-loan', function () {
    return view('apply-form');
})->name('apply-form');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['admin']], function () {
    Route::get('admin-view', function() {
        echo "admin";
    })->name('admin.view');
});