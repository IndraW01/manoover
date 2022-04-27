<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FutsalController;
use App\Http\Controllers\ValorantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PubgMobileController;
use App\Http\Controllers\MobileLegendController;
use App\Http\Controllers\Auth\User\UserController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\ClosingController;
use App\Http\Controllers\Competition\FutsalCompetitionController;
use App\Http\Controllers\Competition\MobileLegendCompetitionController;
use App\Http\Controllers\Competition\PubgMobileCompetitionController;
use App\Http\Controllers\Competition\ValorantCompetitionController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\DashboardUserController;

// Landing Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route Admin
Route::get('/dashboard-admin', [DashboardController::class, 'dashboard'])->name('admin.dashboard')->middleware([]);

Route::middleware([])->prefix('/dashboard-admin')->name('dashboard.')->group(function() {
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
    // 5. closing
    Route::get('/closing/download-identitas/{closing}', [ClosingController::class, 'downloadIdentitas'])->name('closing.download.identitas');
    Route::get('/closing/download-bukti/{closing}', [ClosingController::class, 'downloadBukti'])->name('closing.download.bukti');
    // 6. Band
    Route::get('/band/download-bukti/{band}', [BandController::class, 'downloadBukti'])->name('band.download.bukti');

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
    // 5. Closing
    Route::get('/closing/verifikasi-berhasil/{closing}', [ClosingController::class, 'verifikasiBerhasil'])->name('closing.verifikasi.berhasil');
    Route::get('/closing/verifikasi-tolak/{closing}', [ClosingController::class, 'verifikasiTolak'])->name('closing.verifikasi.tolak');
    // 6. Band
    Route::get('/band/verifikasi-berhasil/{band}', [BandController::class, 'verifikasiBerhasil'])->name('band.verifikasi.berhasil');
    Route::get('/band/verifikasi-tolak/{band}', [BandController::class, 'verifikasiTolak'])->name('band.verifikasi.tolak');

    // Crud Mobile Legend
    Route::resource('/mobile-legend', MobileLegendController::class)->names('ml');
    // Crud Valorant
    Route::resource('/valorant', ValorantController::class)->names('valorant');
    // Crud Pubg
    Route::resource('/pubg', PubgMobileController::class)->names('pubg');
    // Crud Futsal
    Route::resource('/futsal', FutsalController::class)->names('futsal');
    // Crud Closing
    Route::resource('/closing', ClosingController::class)->names('closing');
    // Crud Band
    Route::resource('/band', BandController::class)->names('band');
});

// Route Auth
//Login With Google (Socialite Route) Routes
Route::middleware(['guest'])->group(function() {

    Route::get('/sign-in-google', [UserController::class, 'google'])->name('user.login.google');
    Route::get('/auth/google/callback', [UserController::class, 'handleProviderCallback'])->name('user.google.callback');

});

Route::get('/verifikasi-email', [UserController::class, 'verifikasiEmail'])->name('user.verikasi')->middleware('auth');

// Login Email
Auth::routes(['verify' => true]);

Route::get('/registrasi-berhasil', function () {
    return view('auth.success.emailSuccess');
});


Route::get('/dashboard-user', [DashboardUserController::class, 'dashboard'])->name('user.dashborad')->middleware('auth');

// Route Competition
Route::middleware(['auth', 'verified'])->prefix('/competition')->name('competition.')->group(function() {

    Route::get('/', [CompetitionController::class, 'index'])->name('index');

    Route::get('/pubg', [PubgMobileCompetitionController::class, 'detail'])->name('pubg.detail');
    Route::get('/pubg/form', [PubgMobileCompetitionController::class, 'create'])->name('pubg.create');
    Route::post('/pubg/form', [PubgMobileCompetitionController::class, 'store'])->name('pubg.store');
    Route::get('/pubg/pembayaran/success', [PubgMobileCompetitionController::class, 'success'])->name('pubg.success');
    Route::get('/pubg/pembayaran/{pubg}', [PubgMobileCompetitionController::class, 'pembayaran'])->name('pubg.pembayaran');
    Route::patch('/pubg/pembayaran/{pubg}', [PubgMobileCompetitionController::class, 'pembayaranProses'])->name('pubg.pembayaranProeses');

    Route::get('/valorant', [ValorantCompetitionController::class, 'detail'])->name('valorant.detail');
    Route::get('/valorant/form', [ValorantCompetitionController::class, 'create'])->name('valorant.create');
    Route::post('/valorant/form', [ValorantCompetitionController::class, 'store'])->name('valorant.store');
    Route::get('/valorant/pembayaran/success', [ValorantCompetitionController::class, 'success'])->name('valorant.success');
    Route::get('/valorant/pembayaran/{valorant}', [ValorantCompetitionController::class, 'pembayaran'])->name('valorant.pembayaran');
    Route::patch('/valorant/pembayaran/{valorant}', [ValorantCompetitionController::class, 'pembayaranProses'])->name('valorant.pembayaranProeses');

    Route::get('/ml', [MobileLegendCompetitionController::class, 'detail'])->name('ml.detail');
    Route::get('/ml/form', [MobileLegendCompetitionController::class, 'create'])->name('ml.create');
    Route::post('/ml/form', [MobileLegendCompetitionController::class, 'store'])->name('ml.store');
    Route::get('/ml/pembayaran/success', [MobileLegendCompetitionController::class, 'success'])->name('ml.success');
    Route::get('/ml/pembayaran/{mobile_legend}', [MobileLegendCompetitionController::class, 'pembayaran'])->name('ml.pembayaran');
    Route::patch('/ml/pembayaran/{mobile_legend}', [MobileLegendCompetitionController::class, 'pembayaranProses'])->name('ml.pembayaranProeses');

    Route::get('/futsal', [FutsalCompetitionController::class, 'detail'])->name('futsal.detail');
    Route::get('/futsal/form', [FutsalCompetitionController::class, 'create'])->name('futsal.create');
    Route::post('/futsal/form', [FutsalCompetitionController::class, 'store'])->name('futsal.store');
    Route::get('/futsal/pembayaran/success', [FutsalCompetitionController::class, 'success'])->name('futsal.success');
    Route::get('/futsal/pembayaran/{futsal}', [FutsalCompetitionController::class, 'pembayaran'])->name('futsal.pembayaran');
    Route::patch('/futsal/pembayaran/{futsal}', [FutsalCompetitionController::class, 'pembayaranProses'])->name('futsal.pembayaranProeses');
});



Route::get('/band', function () {
    return view('user.band.detail');
});
Route::get('/band/form', function () {
    return view('user.band.form');
});
Route::get('/band/pembayaran/', function () {
    return view('user.band.pembayaran');
});
Route::get('/band/success', function () {
    return view('auth.success.bandSuccess');
});

Route::get('/closingCeremony', function () {
    return view('user.closingCeremony.detail');
});
Route::get('/closingCeremony/form', function () {
    return view('user.closingCeremony.form');
});
Route::get('/closingCeremony/pembayaran', function () {
    return view('user.closingCeremony.pembayaran');
});
Route::get('/closingCeremony/success', function () {
    return view('auth.success.ceremonySuccess');
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




