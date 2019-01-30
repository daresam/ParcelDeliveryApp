@extends('layouts.admin')

@section('title', 'Dashboard')


@section('content')

    <div class="row" id="dashboard">
        <div class="col-sm-6">
            <div class="card text-center">
                <h4>Total Members</h4><hr>
                <p class="label label-success">{{$totalMembers}}</p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card text-center">
                <h4>Total Event Registrants</h4><hr>
                <p class="label label-danger">{{$totalEventReg}}</p>
            </div>
        </div>
    </div>

@stop