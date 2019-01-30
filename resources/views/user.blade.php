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
                            @include('includes.errors')
                            @include('includes.alert')
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
                                            <td class="text-right">{{++$key}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->status === 1 ? 'Admin' : 'User`'}}</td>
                                            <td>
                                                <i class="fas fa-edit fa-lg text-success mr-2"></i>
                                                <i class="fas fa-trash-alt fa-lg text-danger"></i>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>

                            <!-- pagination -->
                            {{--<nav>--}}
                                {{--<ul class="pagination justify-content-center">--}}
                                    {{--<li class="page-item">--}}
                                        {{--<a href="#" class="page-link py-2 px-3">--}}
                                            {{--<span>&laquo;</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="page-item active">--}}
                                        {{--<a href="#" class="page-link py-2 px-3">--}}
                                            {{--1--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="page-item">--}}
                                        {{--<a href="#" class="page-link py-2 px-3">--}}
                                            {{--2--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="page-item">--}}
                                        {{--<a href="#" class="page-link py-2 px-3">--}}
                                            {{--3--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li class="page-item">--}}
                                        {{--<a href="#" class="page-link py-2 px-3">--}}
                                            {{--<span>&raquo;</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</nav>--}}
                            <!-- end of pagination -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of tables -->

    <!-- modal -->
    <div class="modal fade" id="addUser">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form role="form" method="post" action="{{route('user.store')}}">
                        @csrf
                <div class="modal-body">
                    
                        <div class="box-body">
                            <div class="">
                                <div class=" ">
                                    <div class="form-group">
                                        <label for="FullName">Full Name:</label>
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="FullName" placeholder="Enter Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="Email">Email:</label>
                                        <input type="email" name="email" value="{{old('email')}}" class="form-control" id="Email" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="Password">Password:</label>
                                        <input type="password" name="password"  class="form-control" id="Password" placeholder="*******">
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="status" value="1"> Assign as an Admin
                                        </label>
                                    </div>

                                </div>
                            </div>

                        </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary pull-right" >Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end of modal -->

@endsection

