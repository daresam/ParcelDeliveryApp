@extends('layouts.admin')

@section('title', 'Members')


@section('content')

    <div class="row" id="dashboard">
        <div class="col-sm-6">
            <div class="text-left">
                <button class="btn btn-warning"
                        data-toggle="modal"
                        data-target="#addMember"
                >Add New Member
                </button>
            @include('modal.addMember')

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
                               <th>Passport</th>
                               <th>Status</th>
                               <th>Full Name</th>
                               <th>Mobile Number</th>
                               <th>Marital Status</th>
                               <th >Actions</th>
                           </tr>
                           </thead>
                           <tbody>
                           @if(count($members) > 0)
                               @foreach($members as $key => $member)
                                   <tr>
                                       <td class="text-right">{{++$key}}</td>
                                       <td><img src="{{asset( ($member->Passport) ? $member->Passport : 'uploads/passports/default.png')}}"
                                                alt="{{$member->Name}}"
                                                height="60px" width="60px"
                                                style="border-radius: 50%;">
                                       </td>
                                       <td>{{$member->status->Name}}</td>
                                       <td>{{$member->FullName}}</td>
                                       <td>{{$member->MobileNumber}}</td>
                                       <td>{{$member->maritalStatus->Name}}</td>

                                       <td>
                                           <span
                                                   class="btn btn-sm btn-primary"
                                                   data-toggle="modal"
                                                   data-target="#viewDetail{{$member->MembershipFormId}}"
                                           >View Details</span>
                                           <span
                                                   class="btn btn-sm btn-success"
                                                   data-toggle="modal"
                                                   data-target="#editMember{{$member->MembershipFormId}}"
                                           >Edit</span>
                                           <span
                                                   class="btn btn-sm btn-danger"
                                                   data-toggle="modal"
                                                   data-target="#deleteMember{{$member->MembershipFormId}}"
                                           >Delete</span>
                                       </td>

                                   </tr>
                                   @include('modal.viewDetail')
                                   @include('modal.editMember')
                                   @include('modal.deleteMember')
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