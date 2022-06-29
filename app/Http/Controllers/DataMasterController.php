<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataMasterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function minuman(){
        return view('Main.minuman')
            ->with('category', 'Tabel Data Master')
            ->with('title', 'Data Minuman');
    }
    public function pengeluaran(){
        return view('Main.pengeluaran')
        ->with('category', 'Tabel Data Master')
        ->with('title', 'Data Pengeluaran');
    }
}
