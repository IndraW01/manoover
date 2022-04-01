<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.dashboardAdmin');
});

Route::get('/dashboard', function () {
    return view('dashboardAdmin.home');
});
Route::get('/dashboard/futsal', function () {
    return view('dashboardAdmin.futsal');
});
Route::get('/dashboard/pubg', function () {
    return view('dashboardAdmin.pubg');
});
Route::get('/dashboard/valorant', function () {
    return view('dashboardAdmin.valorant');
});
Route::get('/dashboard/ml', function () {
    return view('dashboardAdmin.ml');
});

// detail diatas -----------------

Route::get('/dashboard/futsal/detail', function () {
    return view('dashboardAdmin.detail.futsal');
});
Route::get('/dashboard/pubg/detail', function () {
    return view('dashboardAdmin.detail.pubg');
});
Route::get('/dashboard/valorant/detail', function () {
    return view('dashboardAdmin.detail.valorant');
});
Route::get('/dashboard/ml/detail', function () {
    return view('dashboardAdmin.detail.ml');
});
