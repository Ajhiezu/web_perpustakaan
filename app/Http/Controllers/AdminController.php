<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('layout.admin');
    }

    public function buku(){
        return view('admin.buku');
    }

    public function member(){
        return view('admin.member');
    }

    public function peminjaman(){
        return view('admin.peminjaman');
    }

    public function pengembalian(){
        return view('admin.pengembalian');
    }

    public function laporan_peminjaman(){
        return view('admin.laporan-peminjaman');
    }

    public function laporan_pengembalian(){
        return view('admin.laporan-pengembalian');
    }

    public function laporan_denda(){
        return view('admin.laporan-denda');
    }

    public function profile(){
        return view('profile');
    }

    public function login(){
        return view('auth.login');
    }
}
