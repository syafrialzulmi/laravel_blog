@extends('template')
@section('content')
<h3>Data Dosen Baru</h3>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="/dosen/create" class="btn btn-primary me-md-2"> Tambah Data</a>
</div>
@include('alert')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">NIDN</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Email</th>
            <th scope="col">Departemen</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dosen as $item)
        <tr>
            <td>{{$item->nidn}}</td>
            <td>{{$item->nama_lengkap}}</td>
            <td>{{$item->email}}</td>
            <td>
                {{-- @if ($item->id_departemen) --}}
                {{$item->departemen->nama_departemen}}
                {{-- @endif --}}
            </td>
            <td>{{$item->alamat}}</td>
            <td>{{Form::open(['url'=>'dosen/'.$item->id,'method'=>'delete'])}}
                {{Form::submit('hapus', ['class' => 'btn btn-danger btn-sm'])}}
                <a href="/dosen/{{$item->id}}/edit" class="btn btn-warning btn-sm">Ubah</a>
                {{Form::close()}}
        </tr>
        @endforeach

    </tbody>
</table>

@endsection
