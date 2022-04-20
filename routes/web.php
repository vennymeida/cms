<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Models\ContactUs;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArticleController;

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
//     return view('index');
// });

// //PRAKTIKUM 1
// //nomor1
// /*Route::get('/', function () {
//     echo "Hi! Selamat Datang di Website Laravel";}) -> name('hello'); 
// //nomor2 
// Route::get('/about', function () {
//     echo "2041720100 <br>";
//     echo "Venny Meida Hersianty <br>";
//     echo "TI-2G";
// }) -> name('about');
// //nomor3 
// Route::get('/articles/{id}', function ($id) {
//     echo "Ini adalah halaman Artikel dengan ID: ".$id;
// });
// */

// //PRAKTIKUM 2
// //pertama
// Route::get('/', [HomeController::class, 'index']); 
// //kedua
// Route::get('/about', [AboutController::class, 'about']); 
// //ketiga
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);


// //PRAKTIKUM 3
// //Halaman Home
// Route::get('/', function () {
//     echo "Hi! Selamat Datang di Website Educa Studio<br>";
//     echo "A Simple Fun Educational Tool";
// });

// //Halaman Product
// Route::prefix('category')->group(function () {
//     Route::get('/marbel-edu-games', function () {
//         echo"Deskripsi Marbel-Educational Games<br>";
//         echo "Marbel Premium<br>";
//         echo "Marbel Piano<br>";
//         echo "Marbel Teliti Mencari Perbedaan";
//     });
//     Route::get('/marbel-and-friends-kids-games', function () {
//         echo"Deskripsi Marbel and Friends-Kids Games<br>";
//         echo "Marbel Peternakan<br>";
//         echo "Marbel Penyelamat Hewan<br>";
//         echo "Marbel Polisi<br>";
//         echo "Marbel Vegetable And Fruits";
//     });
//     Route::get('/riri-story-books', function () {
//         echo"Deskripsi Riri Story Book<br>";
//         echo "Kisah Keledai Yang Dungu<br>";
//         echo "Kisah Kerbau Kancil Dan Ular<br>";
//         echo "Kelelawar Cerdik Dan Musang yang Malang";
//     });
//     Route::get('/kolak-kids-songs', function () {
//         echo"Kolak-Kids Songs<br>";
//         echo "Lagu Anak Gosok Gigi<br>";
//         echo "Lagu Kak Zepe 2<br>";
//         echo "Kids Song Whell On The Bus";
//     });
// });
// //3
// Route::get('/news', function () {
//     return 'List Berita Hari Ini';
//     });
//     Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     });
// Route::get('/news/{id}', function ($id) {
//     return 'News '.$id;
//     });
//     Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     });
// //4
// Route::prefix('program')->group(function () {
//     Route::get('/karir', function () {
//         echo"We Are Hiring<br>";
//         echo"illustrator<br>";
//         echo"Trainer Bisnis dan Pemasaran<br>";
//         echo"Frontend Developer<br>";
//         echo"Digital Strategist<br>";
//         echo"Pengembangan Kurikulum dan Program";
//     });
//     Route::get('/magang', function () {
//         echo"Magang di Educa Studio<br>";
//         echo"Magang Teknis<br>";
//         echo"Magang Non Teknis";
//     });
//     Route::get('/kunjungan-industri', function () {
//         echo"Kunjungan Industri<br>";
//         echo"Educa Studio sering menerima kunjungan Industri dari dunia pendidikan 
//         baik itu SMK, LPK maupun Perguruan Tinggi.";
//     });
// });
    
// //5
// Route::get('/about-us', function () {
//     echo "Tentang Kami<br>
//     Sejarah Educa Studio<br>
//     Dapat juga mengunjungi profile saya di @vennymeida";
//    });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'home']);

Route::resource('articles', ArticleController::class);