@extends('layouts.intro')

@section('title','EverGreen ::: Admin')

@section('style')

    <style>
        input[type=email], input[type=password] {
            border: none;
            border-bottom: 2px solid green;
        }
    </style>

@stop

@section('content')

    <div class="container errorLogin">
        <div class="row">
            <div class="col-sm-9 col-md-offset-2 col-xs-12">
                @include('includes.errors')
            </div>
        </div>
    </div>
    <div class="col-sm-offset-2 col-sm-8 adminForm">
        <form role="form" method="post" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="form-group row">
                <label for="Email" class="col-sm-offset-1 col-sm-2 control-label">
                    <i class="fa fa-user"></i> Email
                </label>
                <div class="col-sm-7">
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="admin@xplug.com" required="required"/>
                </div>
            </div>

            <div class="form-group row">
                <label for="Password" class="col-sm-offset-1 col-sm-2 control-label">
                    <i class="fa fa-key"></i> Password
                </label>
                <div class="col-sm-7">
                    <input type="password" name="password" value="" class="form-control" placeholder="*******" required="required"/>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-offset-3 col-sm-7">
                    <a href="#">Password Reset</a>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-offset-3 col-sm-7">
                    <button type="submit" class="btn btn-danger pull-right" name="">Log in</button>
                </div>
            </div>
        </form>
    </div>
@endsection
