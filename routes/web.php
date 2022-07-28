<?php

use App\Http\Controllers\createRapatbaruController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/home', function () {
    return view('Homepage');
});

Route::get('/folderUser', function () {
    return view('SubFolder');
});

Route::get('/fileUser', function () {
    return view('UserFile');
});

Route::get('/profil', function () {
    return view('Profil');
});

Route::get('/userDownload', function () {
    return view('unggahUser');
});


//admin

Route::get('/adm', function () {
    return view('adminmenu');
});

Route::get('/admhomefolder', function () {
    return view('adminHomepagefolder');
});
Route::get('/access', function () {
    return view('admUseraccess');
});

Route::get('/admUser', function () {
    return view('admUser');
});