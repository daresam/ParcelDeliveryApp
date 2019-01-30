@extends('layouts.master')
@section('title', 'Events')

@section('content')

    <div class="banner two">
        <h2>Events</h2>
    </div>

    <!--welcome-->
    <div class="blog-section">
        <div class="container">
            <div class="blog-top">

                <div class="grid_3 two">
                    <h3 style="text-align: center; font-family: cursive;">Games Day Between Two Generations (Mother & Daughter)</h3><br><br>
                    <div class="col-md-6">
                        <img src="{{asset('evergreen/images/TR-1.jpg')}}" class="img-responsive" alt=""/>
                    </div>

                    <div class="col-md-6">
                        <img src="{{asset('evergreen/images/TR-3.jpg')}}" class="img-responsive" alt=""/><br><br><br>
                    </div>

                    <p>Games Day between two generations is scheduled to hold on Saturday, November 11, 2017 at 12, Adeniyi Coker Street, Dideolu Estate, T.Y Danjuma Street off Ligali Ayorinde, Victoria Island, Lagos by 9am Dress Code is Sporty and to go with the color of your selected group.<br>
                        Four groups with Squadron Leaders to lead each of their members, which will have 6 per group, will be selected through a transparent method. <br>
                        Each group will be named after a flower with a symbolic meaning:
                    </p>

                    <h3 style="text-align: center; font-family: cursive; margin-top: 50px;">Groups</h3>

                    <div class="row">
                        <div class="col-md-3">
                            <p>1. DAISY – White with touch of Yellow symbolizes</p>

                            <li>
                                Innocence, Purity, Cheerfulness and Beauty
                            </li>


                        </div>

                        <div class="col-md-3">

                            <p>2. CARNATIONS - comes in various colors of Red, Pink, White, Purple, Green and Yellow symbolizes different array of emotions capable of being felt by women:</p>

                            <p><li>Red symbolizes feeling of admiration</li>

                            <li>Pink symbolizes true love </li>

                            <li> White symbolizes purity and good fortune</li>

                            <li>Purple symbolizes a Woman’s caprice….sudden change of mind, mood swings</li>

                            <li>Blue symbolizes peace, tranquility and truth</li>

                            </p>



                        </div>

                        <div class="col-md-3">

                            <p>3. ORCHID – Very unique, brings back good memories, blooms all year round and has all the colors, could be Blue Orchid or Pink Orchid and symbolizes</p>
                            <p>
                            <li>Childlike innocence, Wealth, Luxury, Beauty, Wisdom.</li>
                            </p>

                        </div>

                        <div class="col-md-3">

                            <p>4. MARIGOLD  - Golden orange and yellow symbolizes</p>
                             <li>Passion, Creativity and Love.  </li>

                        </div>

                    </div>


                    <div class="read-more" style="text-align: center;"><a class="read" href="{{route('eventreg.create')}}">Register Now</a></div>




                </div>

            </div>
        </div>
    </div>

    <svg id="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path id="trianglePath5" d="M0 0 L50 100 L100 0 Z"></path>
        <path id="trianglePath6" d="M50 100 L100 40 L100 0 Z"></path>
    </svg>

@stop