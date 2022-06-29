@extends('crud.layout')
 
@section('content')
 
<div class="container mt-5">
 
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Edit Makanan</div>
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
                    <form method="post" action="{{ route('makanan.update', $Makanan->kode_makanan) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kode_makanan">Kode Makanan</label> 
                        <input type="text" name="kode_makanan" class="form-control" id="kode_makanan" value="{{ $Makanan->kode_makanan }}" aria-describedby="kode_makanan" > 
                    </div>
                    <div class="form-group">
                        <label for="nama_makanan">Nama Makanan</label> 
                        <input type="text" name="nama_makanan" class="form-control" id="nama_makanan" value="{{ $Makanan->nama_makanan }}" aria-describedby="nama_makanan" > 
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label> 
                        <input type="text" name="harga_makanan" class="form-control" id="harga_makanan" value="{{ $Makanan->harga }}" aria-describedby="harga" > 
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
