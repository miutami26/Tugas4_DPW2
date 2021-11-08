<?php
namespace App\Http\Controllers;


class HomeController extends Controller{
   
    function showberanda(){
        return view('beranda');
    }
    function showkatagori(){
        return view('katagori');
    }

    function showproduk(){
        return view('produk');
    }
    function showlogin(){
        return view('login');
    }
    function showlogout(){
        return view('logout');
    }
    function showprofil(){
        return view('profil');
    }
    
    
    
}