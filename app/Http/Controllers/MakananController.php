<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakananController extends Controller
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
        $makanans = Makanan::all();
        $makanan = DB::table('makanan')->paginate(5);
        $posts = Makanan::orderBy('kode_makanan', 'desc');
        return view('main.makanan')
            ->with('title', 'makanan')
            ->with('makanan', $makanan)
            ->with('category', 'Tabel Data Master');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
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
            'kode_makanan' => 'required',
            'nama_makanan' => 'required',
            'harga_makanan' => 'required',
        ]);

        Makanan::create($request->all());

        return redirect()->route('makanan.index')
            ->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kode_makanan)
    {
        $Makanan = Makanan::find($kode_makanan);
        return view('makanan.detail', compact('Makanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_makanan)
    {
        $Makanan = Makanan::find($kode_makanan);
        return view('makanan.edit', compact('Makanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_makanan' => 'required',
            'nama_makanan' => 'required',
            'harga_makanan' => 'required',
        ]);

        Makanan::find($kode_makanan)->update($request->all());
        return redirect()->route('makanan.index')
            ->with('success', 'Makanan Berhasil Diupdate');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_makanan)
    {
        Makanan::find($kode_makanan)->delete();
        return redirect()->route('makanan.index')
            -> with('success', 'Makanan Berhasil Dihapus');
    }
}
