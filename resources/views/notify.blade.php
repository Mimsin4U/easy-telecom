@if($msg = Session::get('msg'))
    <div class="alert alert-success " role="alert">
        {{$msg}}
    </div>
@endif
@if($error = Session::get('error'))
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
@endif
