<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
        \Illuminate\Http\Middleware\HandleCors::class,
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            \Illuminate\Routing\Middleware\ThrottleRequests::class.':api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's middleware aliases.
     *
     * Aliases may be used to conveniently assign middleware to routes and groups.
     *
     * @var array<string, class-string|string>
     */
    protected $middlewareAliases = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'auth.session' => \Illuminate\Session\Middleware\AuthenticateSession::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \App\Http\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        'superadmin' => \App\Http\Middleware\SuperAdminMiddleware::class,
        'login' => \App\Http\Middleware\LoginMiddleware::class,
        'masterpegawai'=> \App\Http\Middleware\MasterPegawaiMiddleware::class,
        'masterbox'=> \App\Http\Middleware\MasterBoxMiddleware::class,
        'mastercustomer'=> \App\Http\Middleware\MasterCustomerMiddleware::class,
        'mastersupplier'=> \App\Http\Middleware\MasterSupplierMiddleware::class,
        'mastervendor'=> \App\Http\Middleware\MasterVendorMiddleware::class,
        'stokbarang'=> \App\Http\Middleware\StokBarangMiddleware::class,
        'pembelianbarang'=> \App\Http\Middleware\PembelianBarangMiddleware::class,
        'masukkeluarbarang'=> \App\Http\Middleware\MasukKeluarBarangMiddleware::class,
        'stokbarangjadi'=> \App\Http\Middleware\StokBarangJadiMiddleware::class,
        'masterpenawaran'=> \App\Http\Middleware\MasterPenawaranMiddleware::class,
        'formdp'=> \App\Http\Middleware\FormDPMiddleware::class,
        'formdesain'=> \App\Http\Middleware\FormDesainMiddleware::class,
        'suratperintahkerja'=> \App\Http\Middleware\SPKMiddleware::class,
        'penagihan'=> \App\Http\Middleware\PenagihanMiddleware::class,
        'suratjalan'=> \App\Http\Middleware\SuratJalanMiddleware::class,
        'laporanlogin'=> \App\Http\Middleware\LaporanLoginMiddleware::class,
        'laporankeuangan'=> \App\Http\Middleware\LaporanKeuanganMiddleware::class,
        'laporantransaksi'=> \App\Http\Middleware\LaporanTransaksiMiddleware::class,
    ];
}
