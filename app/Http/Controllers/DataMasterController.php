<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataMasterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function makanan(){
        return view('Main.makanan')
            ->with('category', 'Tabel Data Master')
            ->with('title', 'Data Makanan');
    }
    public function minuman(){
        return view('Main.minuman')
            ->with('category', 'Tabel Data Master')
            ->with('title', 'Data Minuman');
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
    public function pengeluaran(){
        return view('Main.pengeluaran')
        ->with('category', 'Tabel Data Master')
        ->with('title', 'Data Pengeluaran');
    }
}
