@extends('index')

@section('konten')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel {{$title}}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Kode Makanan</th>
          <th>Nama</th>
          <th>Harga</th>
          <th>Foto</th>
          <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($makanan as $m)
        <tr>
          <td>{{ $m->kode_makanan }}</td>
          <td>{{ $m->nama_makanan }}</td>
          <td>{{ $m->harga_makanan }}</td>
          <td></td>
          <td></td>
        </tr>
        @endforeach
        <tbody>
      </table>
      <div class="float-right my-2">
        <a class="btn btn-success" href="{{ route('makanan.create') }}">Input Makanan</a>
    </div>
    </div>
    <!-- /.card-body -->
  </div> 
@endsection