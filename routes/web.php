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
use App\Http\Controllers\SPKController;
use App\Http\Controllers\stokbarangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\PengirimanController;
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
Route::post('/masterpegawai/delete/{id}', [PegawaiController::class, "delete"]);

Route::get('/masterbox', [BoxController::class, "show"]);
Route::post('/doAddbox', [BoxController::class, "doAdd"]);
Route::post('/masterbox/delete/{id}', [BoxController::class, "delete"]);

Route::get('/mastercustomer', [CustomerController::class, "show"]);
Route::post('/doAddcustomer', [CustomerController::class, "doAdd"]);
Route::post('/mastercustomer/delete/{id}', [CustomerController::class, "delete"]);

Route::get('/mastersupplier', [SupplierController::class, "show"]);
Route::post('/doAddsupplier', [SupplierController::class, "doAdd"]);
Route::post('/mastersupplier/delete/{id}', [SupplierController::class, "delete"]);

Route::get('/mastervendor', [VendorController::class, "show"]);
Route::post('/doAddvendor', [VendorController::class, "doAdd"]);
Route::post('/mastervendor/delete/{id}', [VendorController::class, "delete"]);


Route::get('/masterpenawaran', [PenawaranController::class, "show"]);
Route::get('/tambahpenawaran', [PenawaranController::class, "showBrand"]);
Route::post('/doAddpenawaran', [PenawaranController::class, "doAddpenawaran"]);

Route::get('/formdp', [PembayaranController::class, "show"]);
Route::get('/tambahdp', [PembayaranController::class, "showBrand"]);
Route::post('/doAddpembayaran', [PembayaranController::class, "doAddpembayaran"]);

Route::get('/formdesain', [DesainController::class, "show"]);
Route::get('/tambahdesain', [DesainController::class, "showBrand"]);
Route::post('/doAddDesain', [DesainController::class, "doAddDesain"]);

Route::get('/suratperintahkerja', [SPKController::class, "showBrand"]);
Route::post('/doAddSPK', [SPKController::class, "doAddSPK"]);


Route::get('/suratjalan', [PengirimanController::class, "show"]);
Route::get('/tambahpengiriman', [PengirimanController::class, "showSPK"]);
Route::post('/tambahPengiriman', [PengirimanController::class, "doAddPengiriman"]);


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


Route::get('/penagihan', function () {
    return view('penagihan');
});
Route::get('/stokbarangjadi', function () {
    return view('stokbarangjadi');
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
Route::post('/pembelianbarang/delete/{id}', [PembelianBarangcontroller::class, "delete"]);
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
