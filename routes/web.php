<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MobileLegendController;
use Illuminate\Support\Facades\Route;


// Route FIX
Route::redirect('/', '/dashboard');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

Route::prefix('/dashboard')->name('dashboard.')->group(function() {

    // Download File
    Route::get('/mobile-legend/download-identitas/{mobile_legend}', [MobileLegendController::class, 'downloadIdentitas'])->name('ml.download.identitas');
    Route::get('/mobile-legend/download-bukti/{mobile_legend}', [MobileLegendController::class, 'downloadBukti'])->name('ml.download.bukti');

    // Verikasi Email
    Route::get('/mobile-legend/verifikasi-berhasil/{mobile_legend}', [MobileLegendController::class, 'verifikasiBerhasil'])->name('ml.verifikasi.berhasil');
    Route::get('/mobile-legend/verifikasi-tolak/{mobile_legend}', [MobileLegendController::class, 'verifikasiTolak'])->name('ml.verifikasi.tolak');

    // Crud Mobile Legend
    Route::resource('/mobile-legend', MobileLegendController::class)->names('ml');


    // index riview ----------------------

    Route::get('/futsal', function () {
        return view('admin.futsal.index');
    })->name('futsal.index');

    Route::get('/pubg', function () {
        return view('admin.pubg.index');
    })->name('pubg.index');

    Route::get('/valorant', function () {
        return view('admin.valorant.index');
    })->name('valorant.index');
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

