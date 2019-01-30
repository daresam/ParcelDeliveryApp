@extends('layouts.master')
@section('title', 'Contact Us')

@section('content')

    <div class="banner two">
        <h2>Contact Us</h2>
        <!--<h6>Add a short description here</h6>-->
    </div>

    <div class="container">
    <div class="contact">
        <div class="col-md-6 contact-top">
            <h3>Want to know more about us?</h3>
            @include('includes.alert')
            {{--@include('includes.errors')--}}

            <form  action="{{route('contact.us')}}" method="post" id="contactFmId" >

                {{csrf_field()}}
                <div class="con-text {{$errors->has('name') ? 'has-error' : ''}}">
                    <label for="name">Your Name: </label>
                    <input id="name" name="name" type="text" value="{{old('name')}}" placeholder="Your Name">
                    <span class=" nameErr errorT"></span>

                    @if($errors->has('name'))
                        <span class="help-block">
                            <strong>{{$errors->first('name')}}</strong>
                        </span>
                    @endif
                </div>
                <div class="con-text {{$errors->has('email') ? 'has-error' : ''}}">
                    <label for="email">Your Email: </label>
                    <input id="email" type="text"  name="email" value="{{old('email')}}" placeholder="Your Email">
                    <span class="text-danger emailErr errorT"></span>

                    @if($errors->has('email'))
                        <span class="help-block">
                            <strong>{{$errors->first('email')}}</strong>
                        </span>
                    @endif
                </div>
                <div class="con-text {{$errors->has('subject') ? 'has-error' : ''}}">
                    <label for="subject">Subject: </label>
                    <input id="subject" name="subject"  type="text" value="{{old('subject')}}"  placeholder="Subject">
                    <span class="text-danger subjectErr errorT"></span>


                @if($errors->has('subject'))
                        <span class="help-block">
                            <strong>{{$errors->first('subject')}}</strong>
                        </span>
                    @endif
                </div>
                <div class="con-text {{$errors->has('message') ? 'has-error' : ''}}">
                    <label for="message">Your Message: </label>
                    <textarea id="message" name="message" >{{old('message')}} </textarea>
                    <span class="text-danger messageErr errorT"></span>

                @if($errors->has('message'))
                        <span class="help-block">
                            <strong>{{$errors->first('message')}}</strong>
                        </span>
                @endif

                </div>
                <input type="submit" value="SEND" class="pull-right" id="submitBtn" >
            </form>

        </div>
        <br><br>
        <div class="col-md-6 contact-top">
            <h3 class="info">Info</h3>
            <p>EMAIL:  evergreen50plus@gmail.com<br><br>

                MOBILE:  08188887630 |  08020523500<br><br>

                ADDRESS: The Antioch Church, 12 Adeniyi Coker Street, Dideolu Estate, Off T.Y. Danjuma Street off Ligali Ayorinde, Victoria Island, Lagos. </p>

{{--            <img src="{{asset('evergreen/images/MAP.PNG')}}" style="width: 500px;">--}}
           <div class="map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63434.15521038564!2d3.432555!3d6.440934!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4f39d929ed833575!2sDideolu+Estate!5e0!3m2!1sen!2sng!4v1509612687313" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
           </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>
    <svg id="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path id="trianglePath5" d="M0 0 L50 100 L100 0 Z"></path>
        <path id="trianglePath6" d="M50 100 L100 40 L100 0 Z"></path>
    </svg>

@stop

@section('script')
    <script src="{{asset('evergreen/js/contact.js')}}"></script>
@stop