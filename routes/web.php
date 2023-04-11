<?php

use App\Http\Controllers\BoxController;
use App\Http\Controllers\controllerMasukKeluarStok;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DesainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PembelianBarangcontroller;
use App\Http\Controllers\PenawaranController;
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


Route::get('/masterpenawaran', [PenawaranController::class, "show"]);
Route::get('/tambahpenawaran', [PenawaranController::class, "showBrand"]);
Route::post('/doAddpenawaran', [PenawaranController::class, "doAddpenawaran"]);

Route::get('/formdp', [PembayaranController::class, "show"]);
Route::get('/tambahdp', [PembayaranController::class, "showBrand"]);
Route::post('/doAddpembayaran', [PembayaranController::class, "doAddpembayaran"]);

Route::get('/formdesain', function () {
    return view('formdesain');
});
Route::get('/tambahdesain', [DesainController::class, "showBrand"]);

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
