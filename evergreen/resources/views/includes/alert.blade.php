@if(Session::has('success'))
    <div class="alert alert-success text-center timed">
        {{session('success')}}
    </div>
@elseif(Session::has('verify'))
    <div class="alert alert-success text-center timed">
        {{session('verify')}}
    </div>
@elseif(Session::has('warning'))
    <div class="alert alert-success text-center timed">
        {{session('warning')}}
    </div>
@endif