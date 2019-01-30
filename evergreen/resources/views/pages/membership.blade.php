@extends('layouts.master')
@section('title', 'Membership Form')

@section('style')

    <style>
        input[type=email], input[type=select] {
            border: none !important;
            border-left: 2px solid green !important;
        }
    </style>

@stop

@section('content')

    <div class="clearfix"></div>
    <div class="banner two">
        <h2>Membership Form</h2>
        <!--<h6>Add a short description here</h6>-->
    </div>

    <div class="welcome" style="background-color: white;">
        <div class="container">

            <div class="container">
                <div class="about-top">

                    <form role="form" action="{{route('membership.store')}}" method="post" enctype="multipart/form-data" id="memberFmId">

                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-12">
                                @include('includes.alert')
                                @include('includes.errors')
                            </div>
                            <div class="col-md-6  " >
                                {{--<div class="row">--}}
                                    <div class="form-group">
                                        <label for="Status" >Status <span class="text-danger">*</span></label>
                                        <select name="Status" id="Status" class="form-control" >
                                            <option value="">-- Select Status --</option>
                                            @foreach($status as $sta)
                                                <option value="{{$sta->StatusId}}" >{{$sta->Name}}</option>
                                             @endforeach
                                        </select>
                                        <span class="statusErr text-danger" ></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="Address">Address: <span class="text-danger">*</span></label>
                                        <input type="text" name="Address"
                                               class="form-control" id="Address"
                                               placeholder="Enter Address " value="{{old('Address')}}">
                                        <span class="addressErr text-danger" ></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="DateOfBirth">Date of Birth: <span class="text-danger">*</span></label>
                                        <input type="date" name="DateOfBirth"
                                               class="form-control" id="DateOfBirth"
                                               placeholder="Enter Date of Birth" value="{{old('DateOfBirth')}}">
                                        <span class="dobErr text-danger" ></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="Email">Email: <span class="text-danger">*</span></label>
                                        <input type="text" name="Email"
                                               class="form-control" id="Email"
                                               placeholder="Enter Email" value="{{old('Email')}}">
                                        <span class="emailErr text-danger" ></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="Passport">Passport: <span class="text-danger">*</span></label>
                                        <input type="file" id="Passport"  name="Passport" value="{{old('Passport')}}">

                                        <span class="passportErr text-danger"></span>
                                    </div>

                                </div>
                            {{--</div>--}}
                            <div class="col-md-6 ">
                                <div class="form-group">
                                    <label for="FullName">Full Name: <span class="text-danger">*</span></label>
                                    <input type="text" name="FullName"
                                           class="form-control" id="FullName"
                                           placeholder="Enter Full Name" value="{{old('FullName')}}">
                                    <span class="nameErr text-danger" ></span>
                                </div>

                                <div class="form-group">
                                    <label for="MobileNumber">Mobile Number:<span class="text-danger">*</span></label>
                                    <input type="text" name="MobileNumber"
                                           class="form-control" id="MobileNumber"
                                           placeholder="Enter Mobile Number" value="{{old('MobileNumber')}}">
                                    <span class="mobileErr text-danger" ></span>
                                </div>

                                <div class="form-group">
                                    <label for="Denomination">Denomination: (Church)<span class="text-danger">*</span></label>
                                    <input type="text" name="Denomination"
                                           class="form-control" id="Denomination"
                                           placeholder="Enter Denomination: (Church)" value="{{old('Denomination')}}">
                                    <span class="denominationErr text-danger" ></span>
                                </div>

                                <div class="form-group">
                                    <label for="MaritalStatus" >Marital Status: <span class="text-danger">*</span></label>
                                    <select name="MaritalStatus" id="MaritalStatus" class="form-control"  >
                                        <option value="">-- Select Marital Status --</option>
                                        @foreach($maritalStatus as $maritalSta)
                                            <option value="{{$maritalSta->MaritalStatusId}}">{{$maritalSta->Name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="maritalErr text-danger" ></span>
                                </div>

                                <div class="form-group">
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-success pull-right " id="submitFmId">Submit</button>

                                </div>

                            </div>
                        </div>


                    </form>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!---->
    </div>
    <svg id="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path id="trianglePath1" d="M0 0 L50 100 L100 0 Z"></path>
        <path id="trianglePath2" d="M50 100 L100 40 L100 0 Z"></path>
    </svg>

@stop

@section('script')
    <script src="{{asset('evergreen/js/member.js')}}"></script>
@stop