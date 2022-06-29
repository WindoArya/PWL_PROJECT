@extends('crud.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DOU's Food</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('crud.makanan.create') }}"> Input Makanan</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            <th>Kode Makanan</th>
            <th>Nama Makanan</th>
            <th>Harga</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($Makanan as $M)
        <tr>
            <td>{{ $M->kode_makanan }}</td>
            <td>{{ $M->nama_makanan }}</td>
            <td>{{ $M->harga_makanan }}</td>
            <td>
            <form action="{{ route('makanan.destroy',$Makanan->kode_makanan) }}" method="POST">
                <a class="btn btn-info" href="{{ route('makanan.show',$Makanan->kode_makanan) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('makanan.edit',$Makanan->kode_makanan) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
