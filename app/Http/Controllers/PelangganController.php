<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pelanggans = Pelanggan::all();
        $pelanggan = DB::table('pelanggan')->paginate(5);
        $posts = Pelanggan::orderBy('kode_pelanggan', 'desc');
        return view('main.pelanggan')
            ->with('title', 'Data Pelanggan')
            ->with('pelanggan', $pelanggan)
            ->with('category', 'Tabel Data Master');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.pelanggancreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_pelanggan' => 'required',
            'nama' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
        ]);

        Pelanggan::create($request->all());

        return redirect()->route('pelanggan.index')
            ->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kode_pelanggan)
    {
        $Pelanggan = Pelanggan::find($kode_pelanggan);
        return view('pelanggan.detail', compact('Pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_pelanggan)
    {
        $Pelanggan = Pelanggan::find($kode_pelanggan);
        return view('crud.pelangganedit', compact('Pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_pelanggan)
    {
        $request->validate([
            'kode_pelanggan' => 'required',
            'nama' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
        ]);

        Pelanggan::find($kode_pelanggan)->update($request->all());
        return redirect('/pelanggan');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_pelanggan)
    {
        Pelanggan::find($kode_pelanggan)->delete();
        return redirect()->route('pelanggan.index')
            -> with('success', 'Pelanggan Berhasil Dihapus');
    }
}
