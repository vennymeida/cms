<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return "Hi! Selamat Datang di Website Laravel";
    }
    
    public function about(){
        return "2041720100 <br> Venny Meida Hersianty <br> TI-2G";
    }
    
    public function articles ($id){
        return "Ini adalah halaman Artikel dengan ID: $id";
    }
}
