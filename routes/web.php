<?php

use App\Models\SubjectDonatur;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\DetailBantuanController;
use App\Http\Controllers\DonaturActiveController;
use App\Http\Controllers\SubjectDonaturController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\KemungkinanController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\JenisBantuanController;
use App\Models\DonaturActive;

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



Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/home', function(){
    return view('index');
})->middleware('auth');

Route::resource('/bantuan', BantuanController::class)->middleware('auth');
Route::resource('/donatur', DonaturController::class)->middleware('auth');
Route::put('/donaturu', [DonaturController::class, 'update'])->middleware('auth');
Route::put('/bantuanq',[BantuanController::class, 'update'])->middleware('auth');
Route::get('/edit/{id}', [BantuanController::class, 'ajax_edit'])->middleware('auth');
Route::get('/donasi/{id}', [DonaturController::class, 'ajax_detail_donatur'])->middleware('auth');
Route::get('/donasis/{id}', [DonaturController::class, 'ajax_edit_donatur'])->middleware('auth');
Route::get('/templates/{id}', [TemplateController::class, 'ajax_edit_template'])->middleware('auth');
Route::put('/templatess', [TemplateController::class, 'update'])->middleware('auth');
Route::get('/penerimas/{id}', [PenerimaController::class, 'ajax_detail_penerima'])->middleware('auth');
Route::post('/donaturs', [DonaturController::class, 'ajax_donatur'])->middleware('auth');
Route::get('/detail_bantuan/{id}', [BantuanController::class, 'ajax_detail'])->middleware('auth');
Route::get('/detail_bantuan_bantuan/{id}', [DetailBantuanController::class, 'ajax_detail_bantuan'])->middleware('auth');
Route::post('/wa',[DetailBantuanController::class, 'wa'])->middleware('auth');

Route::resource('/user', UserController::class)->middleware('auth');
Route::resource('/deta', DetailBantuanController::class)->middleware('auth');
route::resource('/jenis-bantuan', JenisBantuanController::class)->middleware('auth');
Route::resource('/penerima', PenerimaController::class)->middleware('auth');
Route::resource('/template', TemplateController::class)->middleware('auth');
Route::get('/template-ajax/{$id}', [TemplateController::class, 'ajax_edit'])->middleware('auth');


Route::post('/donatur-active/{bantuan:id}', [DonaturActiveController::class, 'index'])->middleware('auth');
Route::get('/donatur-active/{bantuan:id}', [DonaturActiveController::class, 'index'])->middleware('auth');
Route::resource('/donatur-actives', DonaturActiveController::class)->middleware('auth');

Route::post('/details/{bantuan:id}', [DetailBantuanController::class, 'index'])->middleware('auth');
Route::get('/details/{bantuan:id}', [DetailBantuanController::class, 'index'])->middleware('auth');
Route::resource('/detail/', DetailBantuanController::class)->middleware('auth');


Route::resource('/kemungkinan', KemungkinanController::class)->middleware('auth');
Route::resource('/kelurahan', KelurahanController::class)->middleware('auth');
Route::resource('/kecamatan', KecamatanController::class)->middleware('auth');
Route::post('/subject-donatur/{donatur:id}',[ SubjectDonaturController::class, 'index'])->middleware('auth');
Route::get('/subject-donatur/{donatur:id}',[ SubjectDonaturController::class, 'index'])->middleware('auth');
Route::resource('/subject-donaturs/',SubjectDonaturController::class)->middleware('auth');

Route::post('/pesan', [WaController::class, 'pesan'])->middleware('auth');

