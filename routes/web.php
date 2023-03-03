<?php

use App\Http\Controllers\BoxController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SupplierController;
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

Route::get('/login', [LoginController::class, "login"]);

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('layouts.master');
});

Route::get('/masterpegawai', [PegawaiController::class, "show"]);
Route::post('/doAddpegawai', [PegawaiController::class, "doAdd"]);

Route::get('/masterbox', [BoxController::class, "show"]);
Route::post('/doAddbox', [BoxController::class, "doAdd"]);

Route::get('/mastercustomer', [CustomerController::class, "show"]);
Route::post('/doAddcustomer', [CustomerController::class, "doAdd"]);

Route::get('/mastersupplier', [SupplierController::class, "show"]);
Route::post('/doAddsupplier', [SupplierController::class, "doAdd"]);

Route::get('/mastervendor', [SupplierController::class, "show"]);
Route::post('/doAddvendor', [SupplierController::class, "doAdd"]);

Route::get('/masterpenawaran', function () {
    return view('masterpenawaran');
});
Route::get('/mastersubcon', function () {
    return view('mastersubcon');
});
Route::get('/masterstok', function () {
    return view('masterstok');
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

Route::get('/stokbarang', function () {
    return view('stokbarang');
});
Route::get('/pembelianbarang', function () {
    return view('pembelianbarang');
});
Route::get('/arusbarang', function () {
    return view('arusbarang');
});
Route::get('/suratjalan', function () {
    return view('suratjalan');
});
Route::get('/penagihan', function () {
    return view('penagihan');
});
Route::get('/stokbarangjadi', function () {
    return view('stokbarangjadi');
});
Route::get('/formdp', function () {
    return view('formdp');
});
Route::get('/suratperintahkerja', function () {
    return view('suratperintahkerja');
});
