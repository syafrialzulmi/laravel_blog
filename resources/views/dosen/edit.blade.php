@extends('template')
@section('content')
<h3>Ubah Data Dosen</h3>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="/dosen" class="btn btn-danger me-md-2"> Kembali</a>
</div>
@include('validation')
<div class="row" style="margin-top: 20px">
    {{-- <form> --}}
    {{Form::model($dosen, ['url'=>'dosen/'.$dosen->id, 'method'=>'put', 'class'=>'row', 'style'=> 'margin-top: 20px'])}}
        @include('dosen.form')
    {{-- </form> --}}
    {{Form::close()}}
</div>
@endsection
