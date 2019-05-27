<?php
// use Symfony\Component\Routing\Route;
// use Symfony\Component\Routing\Annotation\Route;

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
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');
Route::get('/layanan', 'HomeController@layanan');
Route::get('/kontakKami', 'HomeController@kontakKami');
Route::get('/registrasi', 'HomeController@registrasi');
Route::get('/getMapel/{jenjang}', 'HomeController@getMapel');
// Regitrasi Guru
Route::post('/registrasiGuru', 'HomeController@registrasiGuru');

// Login admin
// Route::get('/admin', 'AdminController@LoginAdmin');
Route::get('/dashboard', 'AdminController@index');
Route::get('/dataGuru', 'AdminController@dataGuru');
Route::get('/dataGuruApprove', 'AdminController@dataGuruApprove');
Route::get('/dataGuruDissapprove', 'AdminController@dataGuruDissapprove');
Route::get('/dataPemesan', 'AdminController@dataPemesan');
Route::get('/pemesan', 'AdminController@pemesan');
Route::get('/pemesanan', 'AdminController@pemesanan');
Route::get('/absensi', 'AdminController@absensi');
Route::get('/pembayaran', 'AdminController@pembayaran');
// Route untuk akses mapel

// update status
Route::get('/dataGuru/approve/{id}', 'AdminController@approveGuru');
Route::get('/dataGuru/disapprove/{id}', 'AdminController@disapproveGuru');
Route::get('/dataGuru/trash/{id}', 'AdminController@trashGuru');
// Route::get('/disapproveGuru/{id}', 'AdminController@disapproveGuru');
