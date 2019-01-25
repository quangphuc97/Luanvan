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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('fontend.index');
});
Route::get('/danhsachtinban', function () {
    return view('fontend.danhsachtinban');
});
Route::get('/tinban', function () {
    return view('fontend.tinban');
});
Route::get('/t','Test@index');