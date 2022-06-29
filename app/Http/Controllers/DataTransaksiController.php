<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pembelian(){
        return view('Main.pembelian')
            ->with('category', 'Tabel Data Transaksi')
            ->with('title', 'Data Pembelian');
    }
}
