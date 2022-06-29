@extends('crud.layout')
 
@section('content')
 
<div class="container mt-5">
 
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Edit Pegawai</div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Terdapat inputan yang salah.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                    <form method="post" action="{{ route('pegawai.update', $Pegawai->kode_pegawai) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kode_pegawai">Kode Pegawai</label> 
                        <input type="text" name="kode_pegawai" class="form-control" id="kode_pegawai" value="{{ $Pegawai->kode_pegawai }}" aria-describedby="kode_pegawai" > 
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label> 
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $Pegawai->nama }}" aria-describedby="nama" > 
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label> 
                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $Pegawai->alamat }}" aria-describedby="alamat" > 
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">No Telepon</label> 
                        <input type="text" name="no_telepon" class="form-control" id="no_telepon" value="{{ $Pelanggan->no_telepon }}" aria-describedby="no_telepon" > 
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
