@extends('template')
@section('content')
<h3>Province</h3>
{{-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="/dosen/create" class="btn btn-primary me-md-2"> Tambah Data</a>
</div> --}}
@include('alert')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Kode Propinsi</th>
            <th scope="col">Nama Propinsi</th>
            <th scope="col">Detail Kota/Kab</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($results['rajaongkir']['results'] as $item)
        <tr>
            <td>{{$item['province_id']}}</td>
            <td>{{$item['province']}}</td>
            <td>
                <a href="/ongkir/city/{{$item['province_id']}}" class="btn btn-success btn-sm">Detail</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

@endsection
