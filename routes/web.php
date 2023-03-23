<?php

use App\Http\Controllers\BoxController;
use App\Http\Controllers\controllerMasukKeluarStok;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PembelianBarangcontroller;
use App\Http\Controllers\stokbarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\VendorController;
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

Route::get('/mastervendor', [VendorController::class, "show"]);
Route::post('/doAddvendor', [VendorController::class, "doAdd"]);

Route::get('/masterpenawaran', function () {
    return view('masterpenawaran');
});
Route::get('/tambahpenawaran', [PenawaranController::class, "show"]);
Route::get('/doAddpenawaran', [PenawaranController::class, "doAddpenawaran"]);

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


Route::get('/tambahpembelian', [PembelianBarangcontroller::class, "show"]);
// Route::get('/tambahpembelian', function () {
//     return view('tambahpembelian');
// });
Route::post('/doPembelianbarang', [PembelianBarangcontroller::class, "doAdd"]);
Route::get('/pembelianbarang', [PembelianBarangcontroller::class, "showpembelian"]);
// Route::get('/pembelianbarang', function () {
//     return view('pembelianbarang');
// });
Route::get('/arusbarang', [PembelianBarangcontroller::class, "showarus"]);
// Route::get('/arusbarang', function () {
//     return view('arusbarang');
// });

Route::get('/barangmasuk', [controllerMasukKeluarStok::class, "showmasuk"]);
Route::post('/dobarangmasuk', [controllerMasukKeluarStok::class, "doaddmasuk"]);
Route::get('/barangkeluar', [controllerMasukKeluarStok::class, "showkeluar"]);
Route::post('/dobarangkeluar', [controllerMasukKeluarStok::class, "doaddkeluar"]);
// Route::get('/barangmasuk', function () {
//     return view('barangmasuk');
// });
// Route::get('/barangkeluar', function () {
//     return view('barangkeluar');
// });


Route::get('/stokbarang', [stokbarangController::class, "showstok"]);
// Route::get('/stokbarang', function () {
//     return view('stokbarang');
// });







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
Route::get('/laporanlogin', function () {
    return view('laporanlogin');
});
Route::get('/laporankeuangan', function () {
    return view('laporankeuangan');
});
Route::get('/laporantransaksi', function () {
    return view('laporantransaksi');
});
