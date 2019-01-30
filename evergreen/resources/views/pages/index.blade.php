@extends('layouts.master')

@section('title', 'Home')

@section('content')

    <div class="banner">
        <div class="container">
            <div class="banner-text">
                <h2  style="background-color: rgba(0, 0, 0, .5); padding: 20px;">Evergreen 50 Plus Women's Group!</h2>
                <p>Impacting the right moral values to the next generation.</p>
                <div class="read-more">  <a class="read" href="{{route('membership.create')}}">Register Now</a></div>
            </div>
        </div>
    </div>

    <!--welcome-->
    <div class="welcome">
        <div class="container">
            <div class="welcome-top">
                <h3>Welcome !</h3>
                <p>Evergreen 50 Plus is a group of women who have come together to socialize in their older age,
                    and to be a strong support system for one another, as well as impact the right moral values to
                    the next generation….passing on the baton.</p>
            </div>
        </div>
    </div>
    <svg id="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path id="trianglePath1" d="M0 0 L50 100 L100 0 Z"></path>
        <path id="trianglePath2" d="M50 100 L100 40 L100 0 Z"></path>
    </svg>

    <!-- events -->
    <div class="events">
        <div class="container">
            <div class="event-grids">
                <div class="col-md-6 upcoming">
                    {{--<h3>Upcoming Events</h3>--}}
                    {{--<div class="family">--}}
                        {{--<div class="twenty">--}}
                            {{--<h4>11</h4>--}}
                            {{--<p>NOV</p>--}}
                            {{--<p>2017</p>--}}
                        {{--</div>--}}
                        {{--<div class="sunday">--}}
                            {{--<img src="{{asset('evergreen/images/games-day.jpg')}}" alt="" class="img-responsive">--}}
                            {{--<hr><h5>Games Day Between Two Generation</h5><hr>--}}
                            {{--<p>Games Day between two generations is scheduled to hold on</p>--}}
                            {{--<p>Saturday | 9:00am</p>--}}

                            {{--<div class="read-more">  <a class="read pull-right" href="{{url('event')}}">Read Now</a></div>--}}
                        {{--</div>--}}

                        {{--<div class="clearfix"> </div>--}}
                    {{--</div>--}}

                    <h3>Past Events</h3>

                    <div class="family">
                        <div class="twenty">
                            <h4>11</h4>
                            <p>NOV</p>
                            <p>2017</p>
                        </div>
                        <div class="sunday">
                            <img src="{{asset('evergreen/images/games-day.jpg')}}" alt="" class="img-responsive">
                            <hr><h5>Games Day Between Two Generation</h5><hr>
                            <p>Games Day between two generations is scheduled to hold on</p>
                            <p>Saturday | 9:00am</p>

                            <div class="read-more">  <a class="read pull-right" href="{{url('event')}}">Read Now</a></div>
                        </div>

                        <div class="clearfix"> </div>
                    </div>

                    <div class="family">
                        <div class="twenty">
                            <h4>28</h4>
                            <p>AUG</p>
                            <p>2017</p>
                        </div>
                        <div class="sunday">
                            <img src="{{asset('evergreen/images/GAMES-DAY2.jpg')}}" alt="games day image" >
                            <hr><h5>Get Together</h5><hr>
                            <p>Monday | 9:30am</p>

                            <div class="read-more">  <a class="read pull-right" href="#">Read Now</a></div>
                        </div>

                        <div class="clearfix"> </div>
                    </div>

                </div>
                <div class="col-md-6 keep">
                    <h3>How we go about it</h3>
                    <p>Have quarterly social outings for the purpose of bonding and sharing life experiences</p>
                    <p>Creating forums to impact knowledge on to our Sons and Daughters, which will prevent
                        them from being influenced by peer pressure and pressure of the society</p>
                    <p>Engage in Counselling sessions, which will prepare our children for marriages; making
                        use of professional Counsellors in the Evergreen 50 plus group</p>

                    <p>Engage in mentoring our children like Elizabeth and Mary (two generations apart who
                        learnt from each other through exchange of ideas and prayers)</p>

                    <br><br><br>
                    <img src="{{asset('evergreen/images/pastor.jpeg')}}" alt="pastor" class="img-responsive" style="height:300px; width:500px; border-radius: 10px;" >

                    <p><strong>From the Pastor's Desk</strong><br>
                       <div class="text-justify">
                            Dr Tony Rapu, Snr Pastor House of Freedom
                        </div>
                        <p >The Dome Freedom way Lekki Phase1, Lagos.</p>
                        <p class="text-justify">
                        You are here to be light bringing out the God colours in the World
                        Matthew 5vs 14-16 MSG
                        GOD created a colourful and beautiful World that became distorted by sin into the World of darkness pain and brokenness
                        But the Bible says we are to Shine the light bringing out the God colours in the World The real  colours of LOVE JOY PEACE HEALING and WHOLENESS are found in God alone. We are meant to ENJOY life expressing these BEAUTIFUL COLOURS OF GOD
                        MAY your life be a testimony of God's VIBRANT colours may each day bring you meaning Purpose and Direction
                        May God Radiate His life through you everyday so you too can Paint some BEAUTIFUL COLOURS into the World
                        Splash some colours of Joy and Laughter and bring some Beauty into the World of Pain #Colour #Laughter #Peace #Healing #WHOLENESS #Purpose
                    </p>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--events -->

    <div class="team">
        <div class="container">
            <div class="second-head">
                <h3>Groups</h3>
            </div>
            <div class="team-top">
                <div class="col-md-3 col-xs-3 team-grid">
                    <img src="{{asset('evergreen/images/GB-3.jpg')}}" alt="" class="img img-responsive"  />
                    <h4>Daisy : <b style="color: yellow">Yellow</b><br><small style="color: white">Contact: 08022034567</small><br> Captain: Tina Nkem<br>(Mama T)</h4>
                </div>
                <div class="col-md-3 col-xs-3 team-grid">
                    <img src="{{asset('evergreen/images/GB-1.jpeg')}}" alt="" class="img img-responsive" />
                    <h4>Carnations: <b style="color:royalblue">Royal Blue</b> <br><small style="color: white">Contact: 08023103392</small><br> Captain: Tochi Opara</h4>
                </div>
                <div class="col-md-3 col-xs-3 team-grid">
                    <img src="{{asset('evergreen/images/GB-4.jpg')}}" alt="" class="img img-responsive" />
                    <h4>Marigold: <b style="color: orange">Orange</b> <br><small style="color: white">Contact: 09033613864</small><br> Captain: Josephine<br> Onouha</h4>
                </div>
                <div class="col-md-3 col-xs-3 team-grid">
                    <img src="{{asset('evergreen/images/GB-2.jpg')}}" alt="" class="img img-responsive" />
                    <h4>Orchid: <b style="color: green;">Lemon Green</b> <br><small style="color: white">Contact:08023058830</small><br> Captain: Funmilayo<br>Onafowokan </h4>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    <svg id="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path id="trianglePath3" d="M0 0 L50 100 L100 0 Z"></path>
        <path id="trianglePath4" d="M50 100 L100 40 L100 0 Z"></path>
    </svg>


@stop