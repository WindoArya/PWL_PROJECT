@extends('index')

@section('konten')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Tabel {{$title}}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <caption>Table of Customer List</caption>
        <thead>
        <tr>
          <th>Kode Pelanggan</th>
          <th>Nama</th>
          <th>No Telepon</th>
          <th>Alamat</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($pelanggan as $p)
        <tr>
          <td>{{ $p->kode_pelanggan }}</td>
          <td>{{ $p->nama}}</td>
          <td>{{ $p->no_telepon }}</td>
          <td>{{ $p->alamat }}</td>
          <td>            
            <form action="{{ route('pelanggan.destroy', $p->kode_pelanggan) }}" method="POST">
              <a class="btn btn-primary" href="{{ route('pelanggan.edit', $p->kode_pelanggan) }}">Edit</a>
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
        <a class="btn btn-success" href="{{ route('pelanggan.create') }}">Input Pelanggan</a>
    </div>
    </div>
    <!-- /.card-body -->
  </div> 
@endsection