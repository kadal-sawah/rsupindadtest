<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PerawatController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PenunjangController;
use App\Http\Controllers\FarmasiController;
use App\Http\Controllers\ChartController;

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

Route::get('/', function () {
    // return view('welcome');
    return view('beranda.beranda');
});

Route::get('/beranda', [UserController::class, 'showHalamanUtama']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);

// Route Survey
Route::get('/create-survey', [SurveyController::class, 'viewLayanan']);
Route::post('/end-survey', [SurveyController::class, 'endSurvey']);

Route::post('/create-pendaftaran', [PendaftaranController::class, 'storePendaftaran']);
Route::post('/create-perawat', [PerawatController::class, 'storePerawat']);
Route::post('/create-dokter', [DokterController::class, 'storeDokter']);
Route::post('/create-penunjang', [PenunjangController::class, 'storePenunjang']);
Route::post('/create-farmasi', [FarmasiController::class, 'storeFarmasi']);


Route::get('/chart', [ChartController::class, 'getchartData']);