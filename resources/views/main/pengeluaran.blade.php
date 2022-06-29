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
          <th>Bahan</th>
          <th>Jumlah</th>
          <th>Harga</th>
          <th>Total</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>x</td>
          <td>x</td>
          <td>x</td>
          <td>x</td>
        </tr>
      </table>
      <div class="float-right my-2">
        <a class="btn btn-success" href="{{ route('pengeluaran.create') }}">Input Pengeluaran</a>
    </div>
    </div>
    <!-- /.card-body -->
  </div> 
@endsection