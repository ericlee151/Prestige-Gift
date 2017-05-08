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
Route::get('/', function () {
    return view('homeindex');
});
Route::get('giftoption1/', function () {
    return view('giftoption');
});
Route::get('/pagkage', function () {
    return view('/packagedetail');
});
Route::get('/payment', function() {
    return view('layout/payment');
});

Route::get('/hello',function(){
		return view('giftoption');
});
