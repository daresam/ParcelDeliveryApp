@extends('layouts.admin')

@section('title', 'Members')


@section('content')

    <div class="row" id="dashboard">
        <div class="col-sm-6">
            <div class="text-left">

                <button class="btn btn-warning"
                        data-toggle="modal"
                        data-target="#addEventReg"
                >Add New Event Registration
                </button>
            @include('modal.addEventReg')

                <br><br>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
           <div class="panel panel-success">
               <div class="panel-heading">
               </div>
               <div class="panel-body">
                   <div class="box-body table-responsive no-padding">
                       @include('includes.errors')
                       @include('includes.alert')
                       <table class="table table-hover">
                           <thead>
                           <tr>
                               <th>ID</th>
                               <th>Full Name</th>
                               <th>Email</th>
                               <th>Mobile Number</th>
                               <th>Designate</th>
                           </tr>
                           </thead>
                           <tbody>
                           @if(count($eventRegs) > 0)
                               @foreach($eventRegs as $key => $eventReg)
                                   <tr>
                                       <td class="text-right">{{++$key}}</td>
                                       <td>{{$eventReg->FullName}}</td>
                                       <td>{{$eventReg->Email}}</td>
                                       <td>{{$eventReg->MobileNumber}}</td>
                                       <td>{{$eventReg->designate->Name}}</td>

                                       <td>
                                           <span
                                                   class="btn btn-sm btn-success"
                                                   data-toggle="modal"
                                                   data-target="#editEventReg{{$eventReg->EventRegistrationId}}"
                                           >Edit</span>
                                           <span
                                                   class="btn btn-sm btn-danger"
                                                   data-toggle="modal"
                                                   data-target="#deleteEventReg{{$eventReg->EventRegistrationId}}"
                                           >Delete</span>
                                       </td>

                                   </tr>
                                   @include('modal.editEventReg')
                                   @include('modal.deleteEventReg')
                               @endforeach
                           @endif
                           </tbody>
                       </table>
                   </div>
               </div>
           </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{asset('evergreen/js/eventregist.js')}}"></script>
@stop