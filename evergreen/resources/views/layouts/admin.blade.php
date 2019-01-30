<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="icon" type="images/png" href="{{asset('evergreen/images/favicon-32x32.png')}}" sizes="32x32" />
    <link rel="icon" type="images/png" href="{{asset('evergreen/images/favicon-16x16.png')}}" sizes="16x16" />
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.max.css') }}" rel="stylesheet">

    <!--Scripts-->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}" target="_blank">
                    <img src="{{ asset('evergreen/images/logo-admin.png') }}" class="img-responsive" alt="Ever Green"/>

                    <span> Ever Green </span>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav" id="navMenu">
                    <li><a href="{{ route('members.index') }}">Members List</a></li>
                    {{--<li><a href="{{ route('events.index') }}">Events  </a></li>--}}
                    <li><a href="{{ route('registrations.index') }}">Events Registration</a></li>
                    <li><a href="{{ route('admin.index') }}">Register New Admin</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Welcome <b>{{ auth()->user()->name }}</b> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('logout') }}">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid basket">
        <div class="row">
            <!-----------------Side-Nav Pane----------------->
            <div class="col-sm-3 sidePane">
                <div class="row">
                    <div class="sm-12">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{ route('dashboard') }}"> Ever Green 50 Plus</a>
                            </li>
                            <li class="list-group-item" id="pFaculty">
                                <a href="{{ route('members.index') }}"><i class="fa fa-caret-right"></i> Members List</a>
                            </li>
                            {{--<li class="list-group-item" id="sCourse">--}}
                                {{--<a href="{{ route('events.index') }}"><i class="fa fa-caret-right"></i> Events </a>--}}
                            {{--</li>--}}
                            <li class="list-group-item" id="pCourse">
                                <a href="{{ route('registrations.index') }}"><i class="fa fa-caret-right"></i> Events Registration</a>
                            </li>
                            <li class="list-group-item" id="pRegNewAdmin">
                                <a href="{{ route('admin.index') }}"><i class="fa fa-caret-right"></i> Register New Admin</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!------------------Action Pane------------------->
            <div class="col-sm-9 APcontent">
                <div class="blackLine col-md-offset-6 col-md-6 col-sm-offset-5 col-sm-7 col-xs-offset-2 col-xs-10"></div>
                @yield('content')
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/custom.js') }}"></script>

<script >
    $(function() {
        $('.timed').delay(9000).fadeOut(9000);
    });
</script>
@yield('script')
</body>
</html>
