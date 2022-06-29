@extends('crud.layout')
 
@section('content')
 
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Tambah Pelanggan</div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="post" action="{{ route('pelanggan.store') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="kode_pelanggan">Kode Pelanggan</label> 
                    <input type="text" name="kode_pelanggan" class="form-control" id="kode_pelanggan" aria-describedby="kode_pelanggan" > 
                </div>
                <div class="form-group">
                    <label for="Nama">Nama</label> 
                    <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama_" > 
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label> 
                    <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" > 
                </div>
                <div class="form-group">
                    <label for="no_telepon">No Telepon</label> 
                    <input type="text" name="no_telepon" class="form-control" id="no_telepon" aria-describedby="no_telepon" > 
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
 </div>
@endsection