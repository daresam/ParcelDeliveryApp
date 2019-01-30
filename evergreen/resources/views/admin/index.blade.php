@extends('layouts.admin')

@section('title', 'Members')


@section('content')

    <div class="row" id="dashboard">
        <div class="col-sm-6">
            <div class="text-left">
                <button class="btn btn-warning"
                        data-toggle="modal"
                        data-target="#addAdmin"
                >Add New Admin
                </button>
            @include('modal.addAdmin')

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
                               <th>Name</th>
                               <th>Email</th>
                               <th>Status</th>
                               <th >Actions</th>
                           </tr>
                           </thead>
                           <tbody>
                           @if(count($admins) > 0)
                               @foreach($admins as $key => $admin)
                                   <tr>
                                       <td class="text-right">{{++$key}}</td>
                                       <td>{{$admin->name}}</td>
                                       <td>{{$admin->email}}</td>
                                       <td>{{$admin->status == 1 ? 'Admin' : 'Normal User'}}</td>
                                       <td>
                                           <span
                                                   class="btn btn-sm btn-success"
                                                   data-toggle="modal"
                                                   data-target="#editAdmin{{$admin->id}}"
                                           >Edit</span>
                                           <span
                                                   class="btn btn-sm btn-danger"
                                                   data-toggle="modal"
                                                   data-target="#deleteAdmin{{$admin->id}}"
                                           >Delete</span>
                                       </td>

                                   </tr>
                                   @include('modal.editAdmin')
                                   @include('modal.deleteAdmin')
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