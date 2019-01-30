@extends('layouts.master')
@section('title', 'Event Registration')

@section('content')

    <div class="clearfix"></div>
    <div class="banner two">
        <h2>Event Registration</h2>
        <!--<h6>Add a short description here</h6>-->
    </div>

    <div class="welcome" style="background-color: white;">
        <div class="container">

            <div class="container">
                <div class="about-top">

                    <form role="form" action="{{route('eventreg.store')}}" method="post" id="eventRegFmId">

                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                @include('includes.alert')
                                @include('includes.errors')
                            </div>
                            <div class="col-md-6 col-md-offset-3 col-xs-12 about-top-right" >

                                <div class="form-group">
                                    <label for="FullName">Full Name: <span class="text-danger">*</span></label>
                                    <input type="text" name="FullName"
                                           class="form-control" id="FullName"
                                           placeholder="Enter Full Name " value="{{old('FullName')}}">
                                    <span class="nameErr text-danger" ></span>
                                </div>


                                <div class="form-group">
                                    <label for="Email">Email: <span class="text-danger">*</span></label>
                                    <input type="text" name="Email"
                                           class="form-control" id="Email"
                                           placeholder="Enter Email" value="{{old('Email')}}">
                                    <span class="emailErr text-danger" ></span>
                                </div>

                                <div class="form-group">
                                    <label for="MobileNumber">Mobile Number:<span class="text-danger">*</span></label>
                                    <input type="text" name="MobileNumber"
                                           class="form-control" id="MobileNumber"
                                           placeholder="Enter Mobile Number" value="{{old('MobileNumber')}}">
                                    <span class="mobileErr text-danger" ></span>
                                </div>


                                <div class="form-group">
                                    <label for="Designate" >Registrants: <span class="text-danger">*</span></label>
                                    <select name="Designate" id="Designate" class="form-control"  >
                                        <option value="">-- Select Registrant --</option>
                                        @foreach($designates as $designate)
                                            <option value="{{$designate->DesignateId}}">{{$designate->Name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="designateErr text-danger" ></span>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-success pull-right" id="submitBtn">Submit</button>
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
    <script src="{{asset('evergreen/js/eventregist.js')}}"></script>
@stop