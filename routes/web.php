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
    return view('login');
});
Route::get('/dashboard', function () {
    return view('layouts.master');
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
Route::get('/masterbox', function () {
    return view('masterbox');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/mastervendor', function () {
    return view('mastervendor');
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
Route::get('/home', function () {
    return view('home');
});
// Form Tambah Data
Route::get('/tambahpegawai', function () {
    return view('tambahpegawai');
});
Route::get('/tambahcustomer', function () {
    return view('tambahcustomer');
});
Route::get('/tambahsupplier', function () {
    return view('tambahsupplier');
});
Route::get('/tambahbox', function () {
    return view('tambahbox');
});
Route::get('/tambahvendor', function () {
    return view('tambahvendor');
});
Route::get('/tambahpembelian', function () {
    return view('tambahpembelian');
});
Route::get('/barangmasuk', function () {
    return view('barangmasuk');
});
Route::get('/barangkeluar', function () {
    return view('barangkeluar');
});
Route::get('/tambahpenawaran', function () {
    return view('tambahpenawaran');
});
Route::get('/tambahdp', function () {
    return view('tambahdp');
});
Route::get('/tambahdesain', function () {
    return view('tambahdesain');
});
Route::get('/tambahpengiriman', function () {
    return view('tambahpengiriman');
});
Route::get('/tambahpenagihan', function () {
    return view('tambahpenagihan');
});