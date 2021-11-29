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

Auth::routes();

Route::middleware(['logged'])->group(function () {

    //pemesanan
    Route::post('/reservation', 'ReservasiController@AddReservation');
    Route::post('/reservation-mrs/{cate}', 'ReservasiController@AddReservationMRS');
    Route::post('/booking', 'ReservasiController@Booking');
    Route::post('/booking/{cate}', 'ReservasiController@BookingB');
    Route::get('/booking-page/{id}/{cate}', 'RuangController@BookingRuangan');
    Route::get('/booking-keluar/{id}/{cate}', 'RuangController@BookingKeluar');
    Route::get('/booking-mrs/{id}/{cate}', 'RuangController@BookingMRS');
    Route::post('/keluar', 'ReservasiController@PasienKeluar');
    Route::post('/pasien-keluar/{cate}', 'ReservasiController@PasienKeluarB');
    Route::get('/check-kamar/{id}', 'ReservasiController@checkKamar');
    Route::get('/check-bookedd/{id}', 'ReservasiController@checkBooked');
    Route::get('/check-booked/{id}/{kmr}', 'ReservasiController@checkBookedKMR');
    Route::get('/check-booked-id/{id}', 'ReservasiController@checkBookedById');
    Route::get('/', 'ReservasiController@index');
    Route::get('/reservasi-batal/{id_res}/{cate}', 'ReservasiController@ReservasiBatal');

    //Kamar
    Route::get('/icu', 'RuangController@icu');
    Route::get('/paviliun1', 'RuangController@paviliun1');
    Route::get('/paviliun2', 'RuangController@paviliun2');
    Route::get('/paviliun3', 'RuangController@paviliun3');
    Route::get('/lantai1pdp', 'RuangController@lantai1pdp');
    Route::get('/lantai2rba1', 'RuangController@lantai2rba1');
    Route::get('/lantai2rba2', 'RuangController@lantai2rba2');
    Route::get('/lantai3obg', 'RuangController@lantai3obg');
    Route::get('/lantai3neo', 'RuangController@lantai3neo');
    Route::get('/lantai4pdw', 'RuangController@lantai4pdw');

    //User
    Route::get('/add-user', 'UserController@index');
    Route::get('/delete-user/{id}', 'UserController@DeleteUser');
    Route::post('/add-user', 'UserController@AddUser');
    Route::post('/update-user', 'UserController@UpdateUser');

    //Rekap
    Route::get('/rekap', 'RekapController@index');
    Route::get('/batal-keluar/{id}', 'RekapController@BatalKeluar');
    Route::get('/hapus/{id}', 'RekapController@Hapus');
    Route::get('/get-seluruh', 'RekapController@Seluruh');
    Route::get('/get-seluruh-ket/{ket}', 'RekapController@SeluruhByKet');
    Route::get('/get-seluruh-tgl/{tgl}', 'RekapController@SeluruhByTgl');
    Route::get('/get-seluruh-kt/{ket}/{tgl}', 'RekapController@SeluruhByKetTgl');
    Route::get('/get-seluruh-ket-kel/{ket}', 'RekapController@SeluruhByKetKel');
    Route::get('/get-seluruh-kt-kel/{ket}/{tgl}', 'RekapController@SeluruhByKetTglKel');
    Route::get('/get-reservasi/{id}', 'RekapController@checkReservasi');
    Route::post('/rekap-update', 'RekapController@RekapUpdate');

    //dashboard
    Route::get('/cekKamar', 'ReservasiController@KamarTerpakai');
    Route::get('/penanggung', 'ReservasiController@Penanggung');
    Route::get('/pasien', 'ReservasiController@PasienBulanIni');

    //Fasilitas
    Route::get('/fasilitas-vvip', 'FasilitasController@Vvip');
    Route::get('/fasilitas-vip', 'FasilitasController@Vip');
    Route::get('/fasilitas-kelas1pav', 'FasilitasController@Kelas1pav');
    Route::get('/fasilitas-kelas1gp', 'FasilitasController@Kelas1gp');

    Route::get('/fasilitas-kelas2b', 'FasilitasController@Kelas2b');
    Route::get('/fasilitas-kelas2gp', 'FasilitasController@Kelas2gp');
    Route::get('/fasilitas-kelas2pav', 'FasilitasController@Kelas2pav');
    Route::get('/fasilitas-kelas3', 'FasilitasController@Kelas3');

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auth/login', 'Auth\LoginController@index')->name('login');
Route::post('/auth/dologin', 'Auth\LoginController@dologin')->name('dologin');
Route::get('/auth/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/auth/check/{username}/{password}', 'Auth\LoginController@CheckLogin')->name('CheckLogin');
