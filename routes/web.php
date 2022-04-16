<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MobileLegendController;
use App\Http\Controllers\PubgMobileController;
use App\Http\Controllers\ValorantController;
use Illuminate\Support\Facades\Route;


// Route FIX
Route::redirect('/', '/dashboard');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

Route::prefix('/dashboard')->name('dashboard.')->group(function() {

    // Download File
    Route::get('/mobile-legend/download-identitas/{mobile_legend}', [MobileLegendController::class, 'downloadIdentitas'])->name('ml.download.identitas');
    Route::get('/mobile-legend/download-bukti/{mobile_legend}', [MobileLegendController::class, 'downloadBukti'])->name('ml.download.bukti');
    Route::get('/valorant/download-identitas/{valorant}', [ValorantController::class, 'downloadIdentitas'])->name('valorant.download.identitas');
    Route::get('/valorant/download-bukti/{valorant}', [ValorantController::class, 'downloadBukti'])->name('valorant.download.bukti');
    Route::get('/pubg/download-identitas/{pubg}', [PubgMobileController::class, 'downloadIdentitas'])->name('pubg.download.identitas');
    Route::get('/pubg/download-bukti/{pubg}', [PubgMobileController::class, 'downloadBukti'])->name('pubg.download.bukti');

    // Verikasi Email
    Route::get('/mobile-legend/verifikasi-berhasil/{mobile_legend}', [MobileLegendController::class, 'verifikasiBerhasil'])->name('ml.verifikasi.berhasil');
    Route::get('/mobile-legend/verifikasi-tolak/{mobile_legend}', [MobileLegendController::class, 'verifikasiTolak'])->name('ml.verifikasi.tolak');
    Route::get('/valorant/verifikasi-berhasil/{valorant}', [ValorantController::class, 'verifikasiBerhasil'])->name('valorant.verifikasi.berhasil');
    Route::get('/valorant/verifikasi-tolak/{valorant}', [ValorantController::class, 'verifikasiTolak'])->name('valorant.verifikasi.tolak');
    Route::get('/pubg/verifikasi-berhasil/{pubg}', [PubgMobileController::class, 'verifikasiBerhasil'])->name('pubg.verifikasi.berhasil');
    Route::get('/pubg/verifikasi-tolak/{pubg}', [PubgMobileController::class, 'verifikasiTolak'])->name('pubg.verifikasi.tolak');

    // Crud Mobile Legend
    Route::resource('/mobile-legend', MobileLegendController::class)->names('ml');
    // Crud Valorant
    Route::resource('/valorant', ValorantController::class)->names('valorant');
    // Crud Pubg
    Route::resource('/pubg', PubgMobileController::class)->names('pubg');

    // index riview ----------------------
    Route::get('/futsal', function () {
        return view('admin.futsal.index');
    })->name('futsal.index');
});


Route::get('/beranda', function () {
    return view('layouts.landingPage');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/registrasi', function () {
    return view('auth.registrasi');
});
Route::get('/success-registrasi', function () {
    return view('auth.success');
});



// show diatas -----------------

Route::get('/dashboard/futsal/detail', function () {
    return view('admin.futsal.show');
});
Route::get('/dashboard/pubg/detail', function () {
    return view('admin.pubg.show');
});
Route::get('/dashboard/valorant/detail', function () {
    return view('admin.valorant.show');
});


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

