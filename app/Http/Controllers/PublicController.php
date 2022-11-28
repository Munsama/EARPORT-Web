<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //
    public function index(){
        return view('public.index');
    }
    public function laporan(){
        return view('public.laporan');
    }
    public function tentangkami(){
        return view('public.tentang_kami');
    }

}
