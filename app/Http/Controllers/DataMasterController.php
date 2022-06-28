<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataMasterController extends Controller
{
    public function makanan(){
        return view('Main.makanan')
            ->with('category', 'Tabel Data Master')
            ->with('title', 'Data Makanan');
    }
    public function pelanggan(){
        return view('Main.pelanggan')
            ->with('category', 'Tabel Data Master')
            ->with('title', 'Data Pelanggan');
    }
    public function pegawai(){
        return view('Main.pegawai')
            ->with('category', 'Tabel Data Master')
            ->with('title', 'Data Pegawai');
    }
    public function meja(){
        return view('Main.meja')
            ->with('category', 'Tabel Data Master')
            ->with('title', 'Data Meja');
    }
}
