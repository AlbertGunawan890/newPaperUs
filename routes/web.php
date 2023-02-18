<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/masterpegawai', function () {
    return view('masterpegawai');
});
Route::get('/mastercustomer', function () {
    return view('mastercustomer');
});
Route::get('/masterpenawaran', function () {
    return view('masterpenawaran');
});
Route::get('/mastersubcon', function () {
    return view('mastersubcon');
});
Route::get('/masterstok', function () {
    return view('masterstok');
});
Route::get('/mastersupplier', function () {
    return view('mastersupplier');
});
Route::get('/kartustok', function () {
    return view('kartustok');
});
Route::get('/formprocess', function () {
    return view('formprocess');
});
Route::get('/formpo', function () {
    return view('formpo');
});
Route::get('/formdesain', function () {
    return view('formdesain');
});

Route::get('/history', function () {
    return view('history');
});

