@extends('index')

@section('konten')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel {{$title}}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <caption>Table of Drink List</caption>
        <thead>
        <tr>
          <th>Kode Minuman</th>
          <th>Nama</th>
          <th>Harga</th>
          <th>Foto</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>x</td>
          <td>x</td>
          <td>x</td>
          <td>x</td>
          <td>X</td>
        </tr>
      </table>
    </div>
    <!-- /.card-body -->
  </div> 
@endsection