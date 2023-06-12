<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\BoxController;
use App\Http\Controllers\controllerMasukKeluarStok;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DesainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PembelianBarangcontroller;
use App\Http\Controllers\PenagihanController;
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

Route::get('/', [LoginController::class, "toLoginPage"]);
Route::get('/login', [LoginController::class, "login"]);
Route::get('/logout', [LoginController::class, "logout"]);

// Route::get('/dashboard', function () {
//     return view('layouts.master');
// });
Route::middleware(['login', 'superadmin'])->group(function () {
    Route::get('/masterrole', [ActivityController::class, "formact"]);
});

Route::middleware(['login', 'masterpegawai'])->group(function () {
    Route::get('/masterpegawai', [PegawaiController::class, "show"]);
    Route::post('/doAddpegawai', [PegawaiController::class, "doAdd"]);
    Route::post('/doEditpegawai', [PegawaiController::class, "doEdit"]);
    Route::post('/masterpegawai/delete/{id}', [PegawaiController::class, "delete"]);
    Route::get('/tambahpegawai', function () {
        return view('tambahpegawai');
    });
});

Route::middleware(['login', 'masterbox'])->group(function () {
    Route::get('/masterbox', [BoxController::class, "show"]);
    Route::post('/doAddbox', [BoxController::class, "doAdd"]);
    Route::post('/doEditbox', [BoxController::class, "doEdit"]);
    Route::post('/masterbox/delete/{id}', [BoxController::class, "delete"]);
    Route::get('/tambahbox', function () {
        return view('tambahbox');
    });
});

Route::middleware(['login', 'mastercustomer'])->group(function () {
    Route::get('/mastercustomer', [CustomerController::class, "show"]);
    Route::post('/doAddcustomer', [CustomerController::class, "doAdd"]);
    Route::post('/doEditcustomer', [CustomerController::class, "doEdit"]);
    Route::post('/mastercustomer/delete/{id}', [CustomerController::class, "delete"]);
    Route::get('/tambahcustomer', function () {
        return view('tambahcustomer');
    });
});

Route::middleware(['login', 'mastersupplier'])->group(function () {
    Route::get('/mastersupplier', [SupplierController::class, "show"]);
    Route::post('/doEditsupplier', [SupplierController::class, "doEdit"]);
    Route::post('/doAddsupplier', [SupplierController::class, "doAdd"]);
    Route::post('/mastersupplier/delete/{id}', [SupplierController::class, "delete"]);
    Route::get('/tambahsupplier', function () {
        return view('tambahsupplier');
    });
});

Route::middleware(['login', 'mastervendor'])->group(function () {
    Route::get('/mastervendor', [VendorController::class, "show"]);
    Route::post('/doAddvendor', [VendorController::class, "doAdd"]);
    Route::post('/mastervendor/delete/{id}', [VendorController::class, "delete"]);
    Route::post('/doEditvendor', [VendorController::class, "doEdit"]);
    Route::get('/tambahvendor', function () {
        return view('tambahvendor');
    });
});

Route::middleware(['login', 'masterpenawaran'])->group(function () {
    Route::get('/masterpenawaran', [PenawaranController::class, "show"]);
    Route::get('/tambahpenawaran', [PenawaranController::class, "showBrand"]);
    Route::post('/masterpenawaran/delete/{id}', [PenawaranController::class, "delete"]);
    Route::post('/doAddpenawaran', [PenawaranController::class, "doAddpenawaran"]);
});

Route::middleware(['login', 'formdp'])->group(function () {
    Route::get('/formdp', [PembayaranController::class, "show"]);
    Route::get('/tambahdp', [PembayaranController::class, "showBrand"]);
    Route::post('/formdp/delete/{id}', [PembayaranController::class, "delete"]);
    Route::post('/doAddpembayaran', [PembayaranController::class, "doAddpembayaran"]);
});

Route::middleware(['login', 'formdesain'])->group(function () {
    Route::get('/formdesain', [DesainController::class, "show"]);
    Route::get('/tambahdesain', [DesainController::class, "showBrand"]);
    Route::post('/formdesain/delete/{id}', [DesainController::class, "delete"]);
    Route::post('/doAddDesain', [DesainController::class, "doAddDesain"]);
});


Route::middleware(['login', 'suratperintahkerja'])->group(function () {
    Route::get('/suratperintahkerja', [SPKController::class, "showBrand"]);
    Route::post('/doAddSPK', [SPKController::class, "doAddSPK"]);
});

Route::middleware(['login', 'suratjalan'])->group(function () {
    Route::get('/suratjalan', [PengirimanController::class, "show"]);
    Route::get('/tambahpengiriman', [PengirimanController::class, "showSPK"]);
    Route::post('/doAddpengiriman', [PengirimanController::class, "doAddPengiriman"]);
    Route::post('/doEditSuratJalan', [PengirimanController::class, "doEdit"]);
});

Route::middleware(['login', 'penagihan'])->group(function () {
    Route::get('/penagihan', [PenagihanController::class, "show"]);
    Route::get('/tambahpenagihan', [PenagihanController::class, "showBrand"]);
    Route::post('/doAddpenagihan', [PenagihanController::class, "doAddpenagihan"]);
    Route::post('/doEditPenagihan', [PenagihanController::class, "doEdit"]);
});

// Route::get('/mastersubcon', function () {
//     return view('mastersubcon');
// });
// Route::get('/masterstok', function () {
//     return view('masterstok');
// });
// Route::get('/kartustok', function () {
//     return view('kartustok');
// });
// Route::get('/formprocess', function () {
//     return view('formprocess');
// });
// Route::get('/formpo', function () {
//     return view('formpo');
// });


// Route::get('/history', function () {
//     return view('history');
// });


Route::middleware(['login', 'stokbarangjadi'])->group(function () {
    Route::get('/stokbarangjadi', function () {
        return view('stokbarangjadi');
    });
});


Route::get('/home', function () {
    return view('home');
});

// Form Tambah Data

// Route::get('/tambahpembelian', function () {
//     return view('tambahpembelian');
// });

Route::middleware(['login', 'pembelianbarang'])->group(function () {
    Route::get('/tambahpembelian', [PembelianBarangcontroller::class, "show"]);
    Route::post('/doPembelianbarang', [PembelianBarangcontroller::class, "doAdd"]);
    Route::get('/pembelianbarang', [PembelianBarangcontroller::class, "showpembelian"]);
    Route::post('/pembelianbarang/delete/{id}', [PembelianBarangcontroller::class, "delete"]);
});

// Route::get('/pembelianbarang', function () {
//     return view('pembelianbarang');
// });
// Route::get('/arusbarang', function () {
//     return view('arusbarang');
// });

Route::middleware(['login', 'masukkeluarbarang'])->group(function () {
    Route::get('/arusbarang', [PembelianBarangcontroller::class, "showarus"]);
    Route::get('/barangmasuk', [controllerMasukKeluarStok::class, "showmasuk"]);
    Route::post('/dobarangmasuk', [controllerMasukKeluarStok::class, "doaddmasuk"]);
    Route::get('/barangkeluar', [controllerMasukKeluarStok::class, "showkeluar"]);
    Route::post('/dobarangkeluar', [controllerMasukKeluarStok::class, "doaddkeluar"]);
});

// Route::get('/barangmasuk', function () {
//     return view('barangmasuk');
// });
// Route::get('/barangkeluar', function () {
//     return view('barangkeluar');
// });

Route::middleware(['login', 'stokbarang'])->group(function () {
    Route::get('/stokbarang', [stokbarangController::class, "showstok"]);
});
// Route::get('/stokbarang', function () {
//     return view('stokbarang');
// });

// Route::get('/tambahpenagihan', function () {
//     return view('tambahpenagihan');
// });
Route::middleware(['login', 'laporanlogin'])->group(function () {
    Route::get('/laporanlogin', function () {
        return view('laporanlogin');
    });
});

Route::middleware(['login', 'laporankeuangan'])->group(function () {
    Route::get('/laporankeuangan', function () {
        return view('laporankeuangan');
    });
});

Route::middleware(['login', 'laporantransaksi'])->group(function () {
    Route::get('/laporantransaksi', function () {
        return view('laporantransaksi');
    });
});
// Route::get('/masterrole', function () {
//     return view('masterrole');
// });

Route::post('importPegawai', [PegawaiController::class, 'uploadUsers']);
Route::post('importCustomer', [CustomerController::class, 'uploadUsers']);
Route::post('importSupplier', [SupplierController::class, 'uploadUsers']);
Route::post('importBox', [BoxController::class, 'uploadUsers']);
Route::post('importVendor', [vendorController::class, 'uploadUsers']);
