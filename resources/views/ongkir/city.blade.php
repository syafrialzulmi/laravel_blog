@extends('template')
@section('content')
<h3>City {{$results['rajaongkir']['results'][0]['province']}}</h3>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="/ongkir/province" class="btn btn-danger me-md-2"> Kembali</a>
</div>
@include('alert')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Kode Kota/ Kab</th>
            <th scope="col">Kode Pos</th>
            <th scope="col">Tipe</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($results['rajaongkir']['results'] as $item)
        <tr>
            <td>{{$item['city_name']}}</td>
            <td>{{$item['postal_code']}}</td>
            <td>{{$item['type']}}</td>
        </tr>
        @endforeach

    </tbody>
</table>

@endsection
