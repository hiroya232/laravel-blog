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

Route::prefix('mypage')->group(function () {
    Route::get('/', function () {
        return view('pages.mypage.index');
    })->middleware(['auth'])->name('mypage');
});

require __DIR__ . '/auth.php';
