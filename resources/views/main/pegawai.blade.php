@extends('index')

@section('konten')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel {{$title}}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <caption>Table of Employee List</caption>
        <thead>
        <tr>
          <th>Kode Pegawai</th>
          <th>Nama</th>
          <th>No Telepon</th>
          <th>Alamat</th>
          <th>Foto</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($pegawai as $pe)
        <tr>
          <td>{{ $pe->kode_pegawai }}</td>
          <td>{{ $pe->nama}}</td>
          <td>{{ $pe->no_telepon }}</td>
          <td>{{ $pe->alamat }}</td>
          <td>            
            <form action="{{ route('pegawai.destroy', $pe->kode_pegawai) }}" method="POST">
              <a class="btn btn-primary" href="{{ route('pegawai.edit', $pe->kode_pegawai) }}">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
        </tbody>
      </table>
      <div class="float-right my-2">
        <a class="btn btn-success" href="{{ route('pegawai.create') }}">Input Pegawai</a>
    </div>
    </div>
    <!-- /.card-body -->
  </div> 
@endsection