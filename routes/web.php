<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpkController;
use App\Http\Controllers\RkkController;
use App\Http\Controllers\FilePerawatController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\HasilPenilaianController;
use App\Http\Controllers\HasPenPerBidController;
use App\Http\Controllers\SuratMenyuratController;
use App\Http\Controllers\PDFController;


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
    return view('auth.login');
});


// ====================login===================
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login-proses',[LoginController::class,'login_proses'])->name('login-proses');
Route::get('/logout-proses',[LoginController::class,'logout'])->name('logout-proses');


Route::group(['prefix' => 'admin','middleware' => ['auth'], 'as' => 'admin.'] , function(){

    // ====================PROFIL==================
    Route::get('/profil',[ProfilController::class,'profil'])->name('profil.view');
    Route::get('/upload1',[ProfilController::class,'upload1'])->name('upload.view');
    Route::post('/upload', [ProfilController::class, 'upload'])->name('upload.file');

    Route::get('/edit', [ProfilController::class, 'edit'])->name('profil.edit');
    Route::put('/update', [ProfilController::class, 'update'])->name('profil.update');
    Route::put('/update2', [ProfilController::class, 'update2'])->name('profil.update2');

    Route::get('/ganti-password', [ProfilController::class, 'gantiPasswordForm'])->name('profil.ganti-password.form');
    Route::post('/ganti-password', [ProfilController::class, 'gantiPassword'])->name('profil.ganti-password');

    // ====================sertfikat===============
    Route::get('/sertif', [ProfilController::class, 'sertif'])->name('profil.sertif');
    Route::post('/sertif/upload', [ProfilController::class, 'storesertif'])->name('sertifikat.store');

    // ====================dashboard===============
    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
    // ====================create spk==============
    Route::get('/form', [SpkController::class, 'showForm'])->name('spk.form');
    Route::post('/form', [SpkController::class, 'storeData'])->name('spk.create');
    // ====================read spk=================
    Route::get('/spk', [SpkController::class, 'index'])->name('spk.index');
    Route::post('/spk', [SpkController::class, 'store'])->name('spk.store');
    Route::get('/spk/{id}/edit', [SpkController::class, 'edit'])->name('spk.edit');
    Route::put('/spk/{id}', [SpkController::class, 'update'])->name('spk.update');
    Route::delete('/spk/{id}', [SpkController::class, 'destroy'])->name('spk.destroy');

    // =====================RKK======================
    Route::get('/rkk/formrkk',[RkkController::class,'rkkData'])->name('rkk.view');
    Route::get('/rkk/hasilrkk',[RkkController::class,'hasil'])->name('rkk.hasil');
    
    Route::get('/rkk/{id}/edit', [RkkController::class, 'edit'])->name('rkk.edit');
    Route::put('/rkk/{id}', [RkkController::class, 'update'])->name('rkk.update');
    
    // =====================FILE PERAWAT===============
    Route::get('/fileperawat', [FilePerawatController::class, 'index'])->name('perawat.index');
    Route::get('/fileperawat/{id}/edit', [FilePerawatController::class, 'edit'])->name('perawat.edit');
    Route::put('/fileperawat/{id}', [FilePerawatController::class, 'update'])->name('perawat.update');
    Route::delete('/fileperawat/{id}', [FilePerawatController::class, 'destroy'])->name('perawat.destroy');
    Route::get('/profil/{id}', [FilePerawatController::class, 'show'])->name('profil.show');

    // ======================HASIL PENILAIAN==============
    Route::get('/hasil-penilaian/pk1/{nopeg}', [HasilPenilaianController::class, 'hasilpk1'])->name('hasilpk1');
    Route::get('/hasil-penilaian/bidan1/{nopeg}', [HasilPenilaianController::class, 'hasilbidan1'])->name('hasilbidan1');
    Route::get('/hasil-penilaian/bidan2/{nopeg}', [HasilPenilaianController::class, 'hasilbidan2'])->name('hasilbidan2');
    Route::get('/hasil-penilaian/bidan3/{nopeg}', [HasilPenilaianController::class, 'hasilbidan3'])->name('hasilbidan3');
    Route::get('/hasil-penilaian/pk2anestesi/{nopeg}', [HasilPenilaianController::class, 'hasilpk2anestesi'])->name('hasilpk2anestesi');
    Route::get('/hasil-penilaian/pk2bedah/{nopeg}', [HasilPenilaianController::class, 'hasilpk2bedah'])->name('hasilpk2bedah');
    Route::get('/hasil-penilaian/pk2hd/{nopeg}', [HasilPenilaianController::class, 'hasilpk2hd'])->name('hasilpk2hd');
    Route::get('/hasil-penilaian/pk2icu/{nopeg}', [HasilPenilaianController::class, 'hasilpk2icu'])->name('hasilpk2icu');
    Route::get('/hasil-penilaian/pk2igd/{nopeg}', [HasilPenilaianController::class, 'hasilpk2igd'])->name('hasilpk2igd');
    Route::get('/hasil-penilaian/pk2ipcn/{nopeg}', [HasilPenilaianController::class, 'hasilpk2ipcn'])->name('hasilpk2ipcn');
    Route::get('/hasil-penilaian/pk2medikalbedah/{nopeg}', [HasilPenilaianController::class, 'hasilpk2medikalbedah'])->name('hasilpk2medikalbedah');
    Route::get('/hasil-penilaian/pk2neonatologi/{nopeg}', [HasilPenilaianController::class, 'hasilpk2neonatologi'])->name('hasilpk2neonatologi');
    Route::get('/hasil-penilaian/pk3anestesi/{nopeg}', [HasilPenilaianController::class, 'hasilpk3anestesi'])->name('hasilpk3anestesi');
    Route::get('/hasil-penilaian/pk3bedah/{nopeg}', [HasilPenilaianController::class, 'hasilpk3bedah'])->name('hasilpk3bedah');
    Route::get('/hasil-penilaian/pk3hd/{nopeg}', [HasilPenilaianController::class, 'hasilpk3hd'])->name('hasilpk3hd');
    Route::get('/hasil-penilaian/pk3icu/{nopeg}', [HasilPenilaianController::class, 'hasilpk3icu'])->name('hasilpk3icu');
    Route::get('/hasil-penilaian/pk3igd/{nopeg}', [HasilPenilaianController::class, 'hasilpk3igd'])->name('hasilpk3igd');
    Route::get('/hasil-penilaian/pk3ipcn/{nopeg}', [HasilPenilaianController::class, 'hasilpk3ipcn'])->name('hasilpk3ipcn');
    Route::get('/hasil-penilaian/pk3medikalbedah/{nopeg}', [HasilPenilaianController::class, 'hasilpk3medikalbedah'])->name('hasilpk3medikalbedah');
    Route::get('/hasil-penilaian/pk3neonatologi/{nopeg}', [HasilPenilaianController::class, 'hasilpk3neonatologi'])->name('hasilpk3neonatologi');

    //=======================HasPenPerBid============
    Route::get('/hasilbidan1', [HasPenPerBidController::class, 'hasilbidan1'])->name('hasil.bidan1');
    Route::get('/hasilbidan2', [HasPenPerBidController::class, 'hasilbidan2'])->name('hasil.bidan2');
    Route::get('/hasilbidan3', [HasPenPerBidController::class, 'hasilbidan3'])->name('hasil.bidan3');
    Route::get('/hasilpk1', [HasPenPerBidController::class, 'hasilpk1'])->name('hasil.pk1');
    Route::get('/hasilpk2anestesi', [HasPenPerBidController::class, 'hasilpk2anestesi'])->name('hasil.pk2anestesi');
    Route::get('/hasilpk2bedah', [HasPenPerBidController::class, 'hasilpk2bedah'])->name('hasil.pk2bedah');
    Route::get('/hasilpk2hd', [HasPenPerBidController::class, 'hasilpk2hd'])->name('hasil.pk2hd');
    Route::get('/hasilpk2icu', [HasPenPerBidController::class, 'hasilpk2icu'])->name('hasil.pk2icu');
    Route::get('/hasilpk2igd', [HasPenPerBidController::class, 'hasilpk2igd'])->name('hasil.pk2igd');
    Route::get('/hasilpk2ipcn', [HasPenPerBidController::class, 'hasilpk2ipcn'])->name('hasil.pk2ipcn');
    Route::get('/hasilpk2medikalbedah', [HasPenPerBidController::class, 'hasilpk2medikalbedah'])->name('hasil.pk2medikalbedah');
    Route::get('/hasilpk2neonatologi', [HasPenPerBidController::class, 'hasilpk2neonatologi'])->name('hasil.pk2neonatologi');
    Route::get('/hasilpk3anestesi', [HasPenPerBidController::class, 'hasilpk3anestesi'])->name('hasil.pk3anestesi');
    Route::get('/hasilpk3bedah', [HasPenPerBidController::class, 'hasilpk3bedah'])->name('hasil.pk3bedah');
    Route::get('/hasilpk3hd', [HasPenPerBidController::class, 'hasilpk3hd'])->name('hasil.pk3hd');
    Route::get('/hasilpk3icu', [HasPenPerBidController::class, 'hasilpk3icu'])->name('hasil.pk3icu');
    Route::get('/hasilpk3igd', [HasPenPerBidController::class, 'hasilpk3igd'])->name('hasil.pk3igd');
    Route::get('/hasilpk3ipcn', [HasPenPerBidController::class, 'hasilpk3ipcn'])->name('hasil.pk3ipcn');
    Route::get('/hasilpk3medikalbedah', [HasPenPerBidController::class, 'hasilpk3medikalbedah'])->name('hasil.pk3medikalbedah');
    Route::get('/hasilpk3neonatologi', [HasPenPerBidController::class, 'hasilpk3neonatologi'])->name('hasil.pk3neonatologi');

    //=======================dompdf===============
    Route::get('/generatepdf1/', [HasPenPerBidController::class,'generatePDF1'])->name('generatepdf1');
    Route::get('/generatepdf2/', [HasPenPerBidController::class,'generatePDF2'])->name('generatepdf2');
    Route::get('/generatepdf3/', [HasPenPerBidController::class,'generatePDF3'])->name('generatepdf3');
    Route::get('/generatepdf4/', [HasPenPerBidController::class,'generatePDF4'])->name('generatepdf4');
    Route::get('/generatepdf5/', [HasPenPerBidController::class,'generatePDF5'])->name('generatepdf5');
    Route::get('/generatepdf6/', [HasPenPerBidController::class,'generatePDF6'])->name('generatepdf6');
    Route::get('/generatepdf7/', [HasPenPerBidController::class,'generatePDF7'])->name('generatepdf7');
    Route::get('/generatepdf8/', [HasPenPerBidController::class,'generatePDF8'])->name('generatepdf8');
    Route::get('/generatepdf9/', [HasPenPerBidController::class,'generatePDF9'])->name('generatepdf9');
    Route::get('/generatepdf10/', [HasPenPerBidController::class,'generatePDF10'])->name('generatepdf10');
    Route::get('/generatepdf11/', [HasPenPerBidController::class,'generatePDF11'])->name('generatepdf11');
    Route::get('/generatepdf12/', [HasPenPerBidController::class,'generatePDF12'])->name('generatepdf12');
    Route::get('/generatepdf13/', [HasPenPerBidController::class,'generatePDF13'])->name('generatepdf13');
    Route::get('/generatepdf14/', [HasPenPerBidController::class,'generatePDF14'])->name('generatepdf14');
    Route::get('/generatepdf15/', [HasPenPerBidController::class,'generatePDF15'])->name('generatepdf15');
    Route::get('/generatepdf16/', [HasPenPerBidController::class,'generatePDF16'])->name('generatepdf16');
    Route::get('/generatepdf17/', [HasPenPerBidController::class,'generatePDF17'])->name('generatepdf17');
    Route::get('/generatepdf18/', [HasPenPerBidController::class,'generatePDF18'])->name('generatepdf18');
    Route::get('/generatepdf19/', [HasPenPerBidController::class,'generatePDF19'])->name('generatepdf19');
    Route::get('/generatepdf20/', [HasPenPerBidController::class,'generatePDF20'])->name('generatepdf20');

    //=======================PENILAIAN RKK PK / BIDAN============
    Route::get('/formpk1', [PenilaianController::class, 'formpk1'])->name('formpk1');
    Route::post('/simpan-penilaianpk1', [PenilaianController::class, 'simpanpk1'])->name('simpanpk1');

    Route::get('/formbidan1', [PenilaianController::class, 'formbidan1'])->name('formbidan1');
    Route::post('/simpan-penilaianbidan1', [PenilaianController::class, 'simpanbidan1'])->name('simpanbidan1');

    Route::get('/formbidan2', [PenilaianController::class, 'formbidan2'])->name('formbidan2');
    Route::post('/simpan-penilaianbidan2', [PenilaianController::class, 'simpanbidan2'])->name('simpanbidan2');

    Route::get('/formbidan3', [PenilaianController::class, 'formbidan3'])->name('formbidan3');
    Route::post('/simpan-penilaianbidan3', [PenilaianController::class, 'simpanbidan3'])->name('simpanbidan3');

    Route::get('/formpk2anestesi', [PenilaianController::class, 'formpk2anestesi'])->name('formpk2anestesi');
    Route::post('/simpan-penilaianpk2anestesi', [PenilaianController::class, 'simpanpk2anestesi'])->name('simpanpk2anestesi');

    Route::get('/formpk2bedah', [PenilaianController::class, 'formpk2bedah'])->name('formpk2bedah');
    Route::post('/simpan-penilaianpk2bedah', [PenilaianController::class, 'simpanpk2bedah'])->name('simpanpk2bedah');

    Route::get('/formpk2hd', [PenilaianController::class, 'formpk2hd'])->name('formpk2hd');
    Route::post('/simpan-penilaianpk2hd', [PenilaianController::class, 'simpanpk2hd'])->name('simpanpk2hd');

    Route::get('/formpk2icu', [PenilaianController::class, 'formpk2icu'])->name('formpk2icu');
    Route::post('/simpan-penilaianpk2icu', [PenilaianController::class, 'simpanpk2icu'])->name('simpanpk2icu');

    Route::get('/formpk2igd', [PenilaianController::class, 'formpk2igd'])->name('formpk2igd');
    Route::post('/simpan-penilaianpk2igd', [PenilaianController::class, 'simpanpk2igd'])->name('simpanpk2igd');

    Route::get('/formpk2ipcn', [PenilaianController::class, 'formpk2ipcn'])->name('formpk2ipcn');
    Route::post('/simpan-penilaianpk2ipcn', [PenilaianController::class, 'simpanpk2ipcn'])->name('simpanpk2ipcn');

    Route::get('/formpk2medikalbedah', [PenilaianController::class, 'formpk2medikalbedah'])->name('formpk2medikalbedah');
    Route::post('/simpan-penilaianpk2medikalbedah', [PenilaianController::class, 'simpanpk2medikalbedah'])->name('simpanpk2medikalbedah');

    Route::get('/formpk2neonatologi', [PenilaianController::class, 'formpk2neonatologi'])->name('formpk2neonatologi');
    Route::post('/simpan-penilaianpk2neonatologi', [PenilaianController::class, 'simpanpk2neonatologi'])->name('simpanpk2neonatologi');

    Route::get('/formpk3anestesi', [PenilaianController::class, 'formpk3anestesi'])->name('formpk3anestesi');
    Route::post('/simpan-penilaianpk3anestesi', [PenilaianController::class, 'simpanpk3anestesi'])->name('simpanpk3anestesi');

    Route::get('/formpk3bedah', [PenilaianController::class, 'formpk3bedah'])->name('formpk3bedah');
    Route::post('/simpan-penilaianpk3bedah', [PenilaianController::class, 'simpanpk3bedah'])->name('simpanpk3bedah');

    Route::get('/formpk3hd', [PenilaianController::class, 'formpk3hd'])->name('formpk3hd');
    Route::post('/simpan-penilaianpk3hd', [PenilaianController::class, 'simpanpk3hd'])->name('simpanpk3hd');

    Route::get('/formpk3icu', [PenilaianController::class, 'formpk3icu'])->name('formpk3icu');
    Route::post('/simpan-penilaianpk3icu', [PenilaianController::class, 'simpanpk3icu'])->name('simpanpk3icu');

    Route::get('/formpk3igd', [PenilaianController::class, 'formpk3igd'])->name('formpk3igd');
    Route::post('/simpan-penilaianpk3igd', [PenilaianController::class, 'simpanpk3igd'])->name('simpanpk3igd');

    Route::get('/formpk3ipcn', [PenilaianController::class, 'formpk3ipcn'])->name('formpk3ipcn');
    Route::post('/simpan-penilaianpk3ipcn', [PenilaianController::class, 'simpanpk3ipcn'])->name('simpanpk3ipcn');

    Route::get('/formpk3medikalbedah', [PenilaianController::class, 'formpk3medikalbedah'])->name('formpk3medikalbedah');
    Route::post('/simpan-penilaianpk3medikalbedah', [PenilaianController::class, 'simpanpk3medikalbedah'])->name('simpanpk3medikalbedah');

    Route::get('/formpk3neonatologi', [PenilaianController::class, 'formpk3neonatologi'])->name('formpk3neonatologi');
    Route::post('/simpan-penilaianpk3neonatologi', [PenilaianController::class, 'simpanpk3neonatologi'])->name('simpanpk3neonatologi');

    //=====================surat menyurat================
    Route::get('/suratmenyurat', [SuratMenyuratController::class, 'index'])->name('suratmenyurat.index');

    Route::get('/suratmenyurat/{id}/edit', [SuratMenyuratController::class, 'edit'])->name('suratmenyurat.edit');
    Route::put('/suratmenyurat/{id}', [SuratMenyuratController::class, 'update'])->name('suratmenyurat.update');
    Route::delete('/suratmenyurat/{id}', [SuratMenyuratController::class, 'destroy'])->name('suratmenyurat.destroy');

    
    Route::get('/formsuratmenyurat', [SuratMenyuratController::class, 'showForm'])->name('suratmenyurat.form');
    Route::post('/formsuratmenyurat', [SuratMenyuratController::class, 'storeData'])->name('suratmenyurat.create');


});


