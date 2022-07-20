<?php

use App\Http\Controllers\createRapatbaruController;
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
    return view('Loginpage');
});

Route::get('/register', function () {
    return view('Register');
});
Route::get('/home', function () {
    return view('Homepage');
});

Route::get('/SubFolder', function () {
    return view('SubFolder');
});