@extends('layouts.master')
@section('title', 'About')

@section('content')

    <div class="banner two">
        <h2>About</h2>
    </div>

    <div class="blog-section">
        <div class="container">
            <div class="blog-top">

                <div class="col-md-6 about-top-right">
                    <h4 style="text-align: center; text-transform: capitalize;"><strong>Impact to the next generation</strong></h4>
                    <p>Evergreen 50 Plus is a group of women who have come together to socialize in their older age,
                        and to be a strong support system for one another, as well as impact the right moral values to
                        the next generation….passing on the baton.</p>
                    <p>. </p>
                </div>
                <div class="col-md-6 about-top-left">
                    <img src="{{asset('evergreen/images/About1.jpg')}}" class="img-responsive" alt=""/>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
    <svg id="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path id="trianglePath1" d="M0 0 L50 100 L100 0 Z"></path>
        <path id="trianglePath2" d="M50 100 L100 40 L100 0 Z"></path>
    </svg>

@stop