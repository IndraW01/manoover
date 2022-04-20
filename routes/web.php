<?php

use App\Http\Controllers\Auth\User\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FutsalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobileLegendController;
use App\Http\Controllers\PubgMobileController;
use App\Http\Controllers\ValorantController;
use Illuminate\Support\Facades\Route;


// Landing Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route FIX
Route::get('/dashboard-admin', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

Route::prefix('/dashboard-admin')->name('dashboard.')->group(function() {
    // Download File
    // 1. Mobile Legend
    Route::get('/mobile-legend/download-identitas/{mobile_legend}', [MobileLegendController::class, 'downloadIdentitas'])->name('ml.download.identitas');
    Route::get('/mobile-legend/download-bukti/{mobile_legend}', [MobileLegendController::class, 'downloadBukti'])->name('ml.download.bukti');
    // 2. Valorant
    Route::get('/valorant/download-identitas/{valorant}', [ValorantController::class, 'downloadIdentitas'])->name('valorant.download.identitas');
    Route::get('/valorant/download-bukti/{valorant}', [ValorantController::class, 'downloadBukti'])->name('valorant.download.bukti');
    // 3. Pubg Mobile
    Route::get('/pubg/download-identitas/{pubg}', [PubgMobileController::class, 'downloadIdentitas'])->name('pubg.download.identitas');
    Route::get('/pubg/download-bukti/{pubg}', [PubgMobileController::class, 'downloadBukti'])->name('pubg.download.bukti');
    // 4. Futsal
    Route::get('/futsal/download-identitas/{futsal}', [FutsalController::class, 'downloadIdentitas'])->name('futsal.download.identitas');
    Route::get('/futsal/download-bukti/{futsal}', [FutsalController::class, 'downloadBukti'])->name('futsal.download.bukti');

    // Verikasi Email
    // 1. Mobile Legend
    Route::get('/mobile-legend/verifikasi-berhasil/{mobile_legend}', [MobileLegendController::class, 'verifikasiBerhasil'])->name('ml.verifikasi.berhasil');
    Route::get('/mobile-legend/verifikasi-tolak/{mobile_legend}', [MobileLegendController::class, 'verifikasiTolak'])->name('ml.verifikasi.tolak');
    // 2. Valorant
    Route::get('/valorant/verifikasi-berhasil/{valorant}', [ValorantController::class, 'verifikasiBerhasil'])->name('valorant.verifikasi.berhasil');
    Route::get('/valorant/verifikasi-tolak/{valorant}', [ValorantController::class, 'verifikasiTolak'])->name('valorant.verifikasi.tolak');
    // 3. Pubg Mobile
    Route::get('/pubg/verifikasi-berhasil/{pubg}', [PubgMobileController::class, 'verifikasiBerhasil'])->name('pubg.verifikasi.berhasil');
    Route::get('/pubg/verifikasi-tolak/{pubg}', [PubgMobileController::class, 'verifikasiTolak'])->name('pubg.verifikasi.tolak');
    // 4. Futsal
    Route::get('/futsal/verifikasi-berhasil/{futsal}', [FutsalController::class, 'verifikasiBerhasil'])->name('futsal.verifikasi.berhasil');
    Route::get('/futsal/verifikasi-tolak/{futsal}', [FutsalController::class, 'verifikasiTolak'])->name('futsal.verifikasi.tolak');

    // Crud Mobile Legend
    Route::resource('/mobile-legend', MobileLegendController::class)->names('ml');
    // Crud Valorant
    Route::resource('/valorant', ValorantController::class)->names('valorant');
    // Crud Pubg
    Route::resource('/pubg', PubgMobileController::class)->names('pubg');
    // Crud Futsal
    Route::resource('/futsal', FutsalController::class)->names('futsal');
});

// Route Auth
//Login With Google (Socialite Route) Routes
Route::get('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/registrasi', [UserController::class, 'register'])->name('user.register');
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

Route::get('/sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('/auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

Route::get('/verifikasi-email', function () {
    return view('auth.verifikasiEmail');
});



Route::get('/registrasi-berhasil', function () {
    return view('auth.success.emailSuccess');
});
Route::get('/pendafatar-pubg-berhasil', function () {
    return view('auth.success.PUBGSuccess');
});
Route::get('/pendafatar-ml-berhasil', function () {
    return view('auth.success.mlSuccess');
});
Route::get('/pendafatar-valorant-berhasil', function () {
    return view('auth.success.valorantSuccess');
});
Route::get('/pendafatar-putsal-berhasil', function () {
    return view('auth.success.putsalSuccess');
});
Route::get('/competition', function () {
    return view('layouts.competition');
});
Route::get('/detail-pubg', function () {
    return view('user.pubg.detail');
});
Route::get('/pendaftaran-pubg', function () {
    return view('user.pubg.form');
});








// Route::get('/success-registrasi', function () {
//     return view('auth.success');
// });

// filter status -----------------

// Route::get('/dashboard/futsal/belum_verifikasi', function () {
//     return view('dashboardAdmin.filter.futsal');
// });
// Route::get('/dashboard/futsal/sudah_verifikasi', function () {
//     return view('dashboardAdmin.filter.futsal');
// });
// Route::get('/dashboard/futsal/tolak', function () {
//     return view('dashboardAdmin.filter.futsal');
// });

// Route::get('/dashboard/pubg/belum_verifikasi', function () {
//     return view('dashboardAdmin.filter.pubg');
// });
// Route::get('/dashboard/pubg/sudah_verifikasi', function () {
//     return view('dashboardAdmin.filter.pubg');
// });
// Route::get('/dashboard/pubg/tolak', function () {
//     return view('dashboardAdmin.filter.pubg');
// });

// Route::get('/dashboard/valorant/belum_verifikasi', function () {
//     return view('dashboardAdmin.filter.valorant');
// });
// Route::get('/dashboard/valorant/sudah_verifikasi', function () {
//     return view('dashboardAdmin.filter.valorant');
// });
// Route::get('/dashboard/valorant/tolak', function () {
//     return view('dashboardAdmin.filter.valorant');
// });

// Route::get('/dashboard/ml/belum_verifikasi', function () {
//     return view('dashboardAdmin.filter.ml');
// });
// Route::get('/dashboard/ml/sudah_verifikasi', function () {
//     return view('dashboardAdmin.filter.ml');
// });
// Route::get('/dashboard/ml/tolak', function () {
//     return view('dashboardAdmin.filter.ml');
// });

