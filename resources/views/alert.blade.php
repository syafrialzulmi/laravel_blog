@if (Session('pesan') != null)

<div class="alert alert-primary" role="alert" style="margin-top: 20px">
    {{Session('pesan')}}
</div>

@endif
