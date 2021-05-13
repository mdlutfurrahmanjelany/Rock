@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success :</strong> {{ Session::get('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
</div>

@elseif(Session::has('war'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Warning :</strong> {{ Session::get('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
</div>
@endif


@if ($errors->any())
@if (count($errors) > 0)
@foreach ($errors->all() as $error)
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Warning :</strong> {{ $error }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
</div>

@endforeach

@endif
@endif