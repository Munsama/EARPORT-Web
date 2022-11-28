<?php

namespace App\Http\Controllers;

use App\Akun;
use App\Category;
use App\Solution;
use Illuminate\Http\Request;

class EarportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index(){
        return view('auth.adminIndex');
    }
     public function dashboard(){
        return view('admin.dashboard');
    }
    public function editprofil(){
        return view('admin.editprofil');
    }
    public function admin(){
        return view('admin.admin');
    }
    public function customer(){
        return view('admin.customer');
    }
    public function petugas(){
        return view('admin.petugas');
    }
    public function kategori(){
        return view('admin.kategori');
    }
    public function solusi(){
        return view('admin.solusi');
    }
    public function status(){
        return view('admin.status');
    }
    public function laporan(){
        $category = Category::all();
        $user = Akun::all();
        $solution = Solution::all();
        return view('admin.laporan', compact('category','user','solution'));
    }
    public function detaillaporan(){
        return view('admin.detaillaporan');
    }
    public function belum(){
        return view('admin.belum');
    }
    public function proses(){
        return view('admin.proses');
    }
    public function selesai(){
        return view('admin.selesai');
    }
    public function ajax(){
        return view('admin.productAjax');
    }
    public function ajaxcrud(){
        return view('admin.ajax_index');
    }

    public function admin1(){
        return view('admin.admin1');
    }
}
