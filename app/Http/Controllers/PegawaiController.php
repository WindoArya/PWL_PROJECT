<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
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
        $pegawais = Pegawai::all();
        $pegawai = DB::table('pegawai')->paginate(5);
        $posts = Pegawai::orderBy('kode_pegawai', 'desc');
        return view('main.pegawai')
            ->with('title', 'pegawai')
            ->with('pegawai', $pegawai)
            ->with('category', 'Tabel Data Master');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.pegawaicreate');
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
            'kode_pegawai' => 'required',
            'nama' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.index')
            ->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kode_pegawai)
    {
        $Pegawai = Pegawai::find($kode_pegawai);
        return view('pegawai.detail', compact('Pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_pegawai)
    {
        $Pegawai = Pegawai::find($kode_pegawai);
        return view('crud.pegawaianedit', compact('Pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_pegawai)
    {
        $request->validate([
            'kode_pegawai' => 'required',
            'nama' => 'required',
            'no_telepon' => 'required',
            'alamat' => 'required',
        ]);

        Pegawai::find($kode_pegawai)->update($request->all());
        return redirect('/pegawai');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_pegawai)
    {
        Pegawai::find($kode_pegawai)->delete();
        return redirect()->route('pegawai.index');
    }
}
