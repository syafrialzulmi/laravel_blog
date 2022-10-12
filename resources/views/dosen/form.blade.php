
<div class="row mb-3">
    {{ Form::label('nidn', 'NIDN', ['class' => 'col-sm-2 col-form-label']) }}
    <div class="col-sm-10">

        {{ Form::text('nidn', null, ['class' => 'form-control', 'placeholder' => 'NIDN']) }}
    </div>
</div>
<div class="row mb-3">
    {{ Form::label('namalengkap', 'Nama Lengkap', ['class' => 'col-sm-2 col-form-label']) }}
    <div class="col-sm-10">

        {{ Form::text('nama_lengkap', null, ['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) }}
    </div>
</div>
<div class="row mb-3">
    {{ Form::label('tanggal_lahir', 'Tanggal Lahir', ['class' => 'col-sm-2 col-form-label']) }}
    <div class="col-sm-10">

        {{ Form::date('tanggal_lahir', null, ['class' => 'form-control', 'placeholder' => 'Tanggal Lahir']) }}
    </div>
</div>
<div class="row mb-3">
    {{ Form::label('email', 'Email', ['class' => 'col-sm-2 col-form-label']) }}
    <div class="col-sm-10">

        {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
    </div>
</div>
<div class="row mb-3">
    {{ Form::label('status', 'Status', ['class' => 'col-sm-2 col-form-label']) }}
    <div class="col-sm-10">

        {{ Form::select('status', [true => 'Dosen Tetap', false => 'Dosen Kontrak'], null,['class' => 'form-control', 'placeholder' => '--Pilih Status']) }}
    </div>
</div>
<div class="row mb-3">
    {{ Form::label('id_departemen', 'Departemen', ['class' => 'col-sm-2 col-form-label']) }}
    <div class="col-sm-10">

        {{ Form::select('id_departemen', $departemens, null,['class' => 'form-control', 'placeholder' => '--Pilih Departemen']) }}
    </div>
</div>

<div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
        {{ Form::submit('Tambah Data', ['class' => 'btn btn-primary']) }}
    </div>
</div>
