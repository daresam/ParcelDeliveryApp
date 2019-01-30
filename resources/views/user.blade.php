@extends('layouts.admin.admin')

@section('content')
    <!-- tables -->
    <section>
        <div class="container-fluid mt-5">
            <div class="row mb-5">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-12 mb-4 mb-xl-0 mt-5">
                            <div class="d-flex justify-content-between">
                                <h3 class="text-muted  mb-3  ">Users</h3>
                                <span  data-toggle="modal" data-target="#addUser" class="pointer btn btn-link">
                                    <i  class="fas fa-plus-square fa-lg h2 text-primary mr-2 "></i>
                                </span>
                            </div>
                            <div class="col-md-6 mx-auto">
                                @include('includes.errors')
                                @include('includes.alert')

                            </div>
                            <table class="table table-striped bg-light text-center">
                                <thead>
                                <tr class="text-muted">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if(count($users) > 0)
                                    @foreach($users as $key => $user)
                                        <tr>
                                            <td >{{++$key}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->status === 1 ? 'Admin' : 'User'}}</td>
                                            <td>
                                                <span  data-toggle="modal" data-target="#editUser{{ $user->id }}" class="pointer btn btn-link">
                                                    <i class="fas fa-edit fa-lg text-success mr-2"></i>
                                                </span>
                                                <span  data-toggle="modal" data-target="#deleteUser{{ $user->id }}" class="pointer btn btn-link">
                                                    <i class="fas fa-trash-alt fa-lg text-danger"></i>
                                                </span>
                                            </td>
                                        </tr>
                                        @include('modal.editUser')
                                        @include('modal.deleteUser')
                                    @endforeach
                                @endif
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of tables -->

    <!-- Add modal -->
    @include('modal.addUser')
    <!-- end of modal -->



@endsection

