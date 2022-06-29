@extends('crud.layout')
 
@section('content')
 
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Tambah Makanan</div>
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
            <form method="post" action="{{ route('makanan.store') }}" id="myForm">
            @csrf
                <div class="form-group">
                    <label for="kode_makanan">Kode Makanan</label> 
                    <input type="text" name="kode_makanan" class="form-control" id="kode_makanan" aria-describedby="kode_makanan" > 
                </div>
                <div class="form-group">
                    <label for="Nama">Nama Makanan</label> 
                    <input type="nama_makanan" name="nama_makanan" class="form-control" id="nama_makanan" aria-describedby="nama_makanan" > 
                </div>
                <div class="form-group">
                    <label for="Harga">Harga</label> 
                    <input type="harga_makanan" name="harga_makanan" class="form-control" id="harga_makanan" aria-describedby="harga_makanan" > 
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
 </div>
@endsection