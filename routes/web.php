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
    return view('pages.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// view control hasil
Route::get('/hasil', [App\Http\Controllers\HasilController::class, 'index'])->name('hasil.index');
Route::get('/hasil/print', [App\Http\Controllers\PageController::class, 'cetak_pdf'])->name('print.index');

// Page Profile
Route::group(['middleware' => 'auth'], function () {
    // Update Profile
    Route::get('profile', [App\Http\Controllers\PageController::class, 'profile'])->name('profile');

    Route::patch('profile/update', [App\Http\Controllers\PageController::class, 'update'])->name('profile.update');

    // Ubah Password Profile
    Route::get('resetpassword', [App\Http\Controllers\PageController::class, 'password'])->name('profile.password');

    Route::patch('profile/ubah password', [App\Http\Controllers\PageController::class, 'reset'])->name('profile.reset');
});

Route::middleware(['is.admin'])->prefix('admin')->name('admin.')->group(function () {

    // Page Kriteria & bobot nilai
    Route::resource('kriteria', App\Http\Controllers\KriteriaController::class);

    // Page Alternatif
    Route::resource('alternatif', App\Http\Controllers\AlternatifController::class);

    // Page Peniliai Alternatif
    Route::resource('nilai-alternatif', App\Http\Controllers\NAlternatifController::class);

    // Ubah Password Pengguna
    Route::resource('ubah-password', App\Http\Controllers\UbahPasswordController::class);

    // Get data alternatif
    Route::get('detail/alternatif/{id}', 'PageController@getDetails')->name('getData');

    // sub kriteria
    Route::resource('sub-kriteria', App\Http\Controllers\SubKriteriaController::class);
});
