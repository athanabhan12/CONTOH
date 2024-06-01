<?php

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanitiaController;
use App\Http\Controllers\DaftarHadirController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\TourLeaderController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('dashboard');
// });

//  jika user belum login
Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'dologin']);

});

Route::get('/',                                   [LoginController::class,'index'])->name('login');

// untuk admin dan TourLeader
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function() {
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/redirect', [RedirectController::class, 'cek']);
});

// untuk superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
Route::get('/index',                              [AdminController::class, 'index'])->name('index');
Route::get('/admin',                              [AdminController::class, 'index'])->name('admin');
Route::get('/dashboard',                          [DashboardController::class, 'index'])->name('dashboard');

Route::get('/laporan_peserta',                    [LaporanController::class,'index_peserta'])->name('laporan_peserta');
Route::get('/laporan_data_tour',                  [LaporanController::class,'index_data_tour'])->name('laporan_data_tour');

Route::get('/panitia',                            [PanitiaController::class,'index'])->name('panitia');
Route::get('/panitia/create',                     [PanitiaController::class,'create']);
Route::post('/panitia/store',                     [PanitiaController::class,'store']);
Route::get('/panitia/edit/{id}',                  [PanitiaController::class,'edit']);
Route::post('/panitia/update/{id}',               [PanitiaController::class,'update']);
Route::get('/panitia/delete/{id}',                [PanitiaController::class,'delete']);
Route::get('/panitia/ubah_password/{id}',         [PanitiaController::class,'ubah_password']);
Route::post('/panitia/update_password/{id}',      [PanitiaController::class,'update_password']);



Route::get('/laporan_peserta/pdf_peserta',        [LaporanController::class,'pdf_peserta']);
});

// untuk TOUR LEADER
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
Route::get('/tourleader',                           [TourLeaderController::class, 'index'])->name('tourleader');
Route::get('/menu_pilihan',                         [TourLeaderController::class, 'index'])->name('menu_pilihan');
Route::get('/tourleader/create',                    [TourLeaderController::class, 'create'])->name('tourleader');
Route::post('/tourleader/store',                    [TourLeaderController::class, 'store'])->name('tourleader');

Route::get('/tour',                               [TourController::class,'index'])->name('tour');
Route::get('/tour/create',                        [TourController::class,'create']);
Route::post('/tour/store',                        [TourController::class,'store']);
Route::get('/tour/edit/{id}',                     [TourController::class,'edit']);
Route::post('/tour/update/{id}',                  [TourController::class,'update']);
Route::get('/tour/delete/{id}',                   [TourController::class,'delete']);
Route::get('/tour/show/{id_tour}',                [TourController::class,'show']);
Route::get('/daftar_hadir',                       [DaftarHadirController::class,'index'])->name('daftar_hadir');

});


Route::get('/daftar_hadir',                       [DaftarHadirController::class,'index'])->name('daftar_hadir');

Route::get('/tour',                               [TourController::class,'index'])->name('tour');
Route::get('/tour/create',                        [TourController::class,'create']);
Route::post('/tour/store',                        [TourController::class,'store']);
Route::get('/tour/edit/{id}',                     [TourController::class,'edit']);
Route::post('/tour/update/{id}',                  [TourController::class,'update']);
Route::get('/tour/destroy/{id}',                   [TourController::class,'destroy']);
Route::get('/tour/detail/{id}',                   [TourController::class,'detail']);

Route::get('/pelanggan',                          [PelangganController::class,'index'])->name('pelanggan');
Route::get('/peserta_pgii',                       [PelangganController::class,'index_pgii'])->name('pelanggan_pgii');
Route::get('/pelanggan/create',                   [PelangganController::class,'create']);
Route::post('/pelanggan/store',                   [PelangganController::class,'store']);
Route::get('/pelanggan/edit/{id}',                [PelangganController::class,'edit']);
Route::post('/pelanggan/update/{id}',             [PelangganController::class,'update']);
Route::get('/pelanggan/delete/{id}',              [PelangganController::class,'delete']);
Route::get('/pelanggan/detail/{id}',              [PelangganController::class,'detail']);
Route::post('/pelanggan/import',                  [PelangganController::class,'import'])->name('import');
Route::get('/pelanggan/pdf',                      [PelangganController::class,'pdf'])->name('pdf');

<<<<<<< HEAD
Route::get('/registrasi',                                           [RegistrasiController::class,'index'])->name('registrasi');
Route::get('/registrasi_kegiatan',                                  [RegistrasiController::class,'index_kegiatan'])->name('registrasi_kegiatan');
Route::post('/registrasi/update/{id}',                              [RegistrasiController::class,'update']);
Route::post('/registrasi_kegiatan/update_kegiatan/{id}',            [RegistrasiController::class,'update_kegiatan']);
=======
Route::get('/registrasi',                         [RegistrasiController::class,'index'])->name('registrasi');
Route::post('/registrasi/update/{id}',                 [RegistrasiController::class,'update']);
>>>>>>> 3f17a9c499e60892f5f0f88fbd2b172fafb6d9b3

Route::post('valdasi/qrcode',                     [RegistrasiController::class,'qrcode'])->name('qrcode');
Route::get('/registrasi/scan/{id}',               [RegistrasiController::class,'scan']);
Route::get('registrasi/detailscan',               [RegistrasiController::class,'detailscan'])->name('detailscan');
Route::get('/scan',                               [RegistrasiController::class,'handlescan'])->name('scan');


Route::get('/pelanggan/show/{id_tour}', [PelangganController::class, 'show']);

<<<<<<< HEAD

Route::get('/kegiatan',                                 [KegiatanController::class,'index'])->name('kegiatan');
Route::get('/kegiatan/show/{id_tour}',                  [KegiatanController::class, 'show']);
Route::get('/kegiatan/detail/{id_master_kegiatan}',     [KegiatanController::class, 'detail']);
Route::get('/kegiatan/create',                          [KegiatanController::class,'create']);
Route::post('/kegiatan/store',                          [KegiatanController::class,'store']);

Route::get('/kegiatan/create_master_kegiatan',          [KegiatanController::class,'create_master_kegiatan']);
Route::post('/kegiatan/store_master_kegiatan',          [KegiatanController::class,'store_master_kegiatan']);
Route::post('/registrasi_kegiatan/update_kegiatan', [RegistrasiController::class,'update_kegiatan']);


=======
>>>>>>> 3f17a9c499e60892f5f0f88fbd2b172fafb6d9b3











