@if(count($errors) > 0)

    @foreach($errors->all() as $error)
        <div class="alert alert-danger text-center timed">
            {{$error}}
        </div>
    @endforeach

@endif