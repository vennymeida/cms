<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

//Route::get('/', function () {
    //return view('welcome');
//});

//PRAKTIKUM 1
//nomor1
/*Route::get('/', function () {
    echo "Hi! Selamat Datang di Website Laravel";}) -> name('hello'); 
//nomor2 
Route::get('/about', function () {
    echo "2041720100 <br>";
    echo "Venny Meida Hersianty <br>";
    echo "TI-2G";
}) -> name('about');
//nomor3 
Route::get('/articles/{id}', function ($id) {
    echo "Ini adalah halaman Artikel dengan ID: ".$id;
});
*/

//PRAKTIKUM 2
//pertama
Route::get('/', [PageController::class, 'index']); 
//kedua
Route::get('/about', [PageController::class, 'about']); 
//ketiga
Route::get('/articles/{id}', [PageController::class, 'articles']); 