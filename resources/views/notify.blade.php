@if($msg = Session::get('msg'))
    <div class="alert alert-success text-center" role="alert">
        {{$msg}}
    </div>
@endif
@if($error = Session::get('error'))
    <div class="alert alert-danger text-center" role="alert">
        {{$error}}
    </div>
@endif
