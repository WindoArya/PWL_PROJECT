@extends('makanan.layout')
 
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">Detail Makanan</div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Kode Makanan: </b>{{$Makanan->kode_makanan}}</li>
                    <li class="list-group-item"><b>Nama Makanan: </b>{{$Makanan->kode_makanan}}</li>
                    <li class="list-group-item"><b>Harga: </b>{{$Makanan->kode_makanan}}</li>
                </ul>
            </div>
                <a class="btn btn-success mt-3" href="{{ route('makanan.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection