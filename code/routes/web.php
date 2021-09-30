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
    return view('pages.top.index');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('mypage')->group(function () {

        Route::get('/', function () {
            return view('pages.mypage.index');
        })->name('mypage.index');

        Route::get('/post', function () {
            return view('pages.mypage.post');
        })->name('mypage.posts');
    });
});


require __DIR__ . '/auth.php';
