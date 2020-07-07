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

Route::get('job', function () {
    // return view('tj.check'); //仮LP
    return view('tj.gift'); //新：獲得LP
    // return view('tj.adult'); //旧：獲得LP
});

Route::get('dl', function () {
    return view('tj.dl'); //自動遷移LP。ココに案件タグを設置
});

// LP確認用
Route::get('cccheck', function () {
    // return view('tj.adult'); //旧：獲得LP
    return view('tj.gift'); //新：獲得LP
});