<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    // public function index(){
    //     return "Hi! Selamat Datang di Website Laravel";
    // }
    
    // public function about(){
    //     return "2041720100 <br> Venny Meida Hersianty <br> TI-2G";
    // }
    
    // public function articles ($id){
    //     return "Ini adalah halaman Artikel dengan ID: $id";
    // }
    // public function index(){
    //       return view('home', ['contact_us'=>ContactUs::index()]);
    // }

    public function home()
   {
       return view('index');
   }

   public function index()
   {
       $user = Auth::user();
       return view('dashboard',['user' => $user]);
   }
}