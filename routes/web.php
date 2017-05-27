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
    return view('layout/home');
});
Route::get('/questions', function () {
    return view('layout/giftquestion');
});
Route::get('/package', function () {
    return view('layout/packagedetail');
});
Route::get('/payment', function() {
    return view('layout/payment');
});
Route::get('/result',function(){
	return view('layout/giftoption');
});
Route::get('/aboutus',function(){
	return view('layout/aboutus');
});
