<?php

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

Route::get('new-release', function () {
    return view('tj.check'); //仮LP
    // return view('tj.adult'); //獲得LP
});

// LP確認用
Route::get('cccheck', function () {
    return view('tj.adult'); //獲得LP
});