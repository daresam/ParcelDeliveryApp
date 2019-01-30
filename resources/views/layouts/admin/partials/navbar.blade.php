<nav class="navbar navbar-expand-md navbar-light">
    <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
                    <a href="/" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">ParcelDeliveryApp</a>
                    <div class="bottom-border pb-3">
                        <img src="{{ asset('admin/images/admin.jpeg') }}" width="50" class="rounded-circle mr-3">
                        <a href="#" class="text-white">{{ Auth::user() ? Auth::user()->name : '' }}</a>
                    </div>
                    <ul class="navbar-nav flex-column mt-4">
                        <li class="nav-item"><a href="/dashboard" class="nav-link text-white p-3 mb-2 current"><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
                        <li class="nav-item"><a href="/user" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-user text-light fa-lg mr-3"></i>Users</a></li>
                        <li class="nav-item"><a href="/parcel" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>Parcel Orders</a></li>
                    </ul>
                </div>
                <!-- end of sidebar -->

                <!-- top-nav -->
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <h4 class="text-light text-uppercase mb-0">Dashboard</h4>
                        </div>
                        <div class="col-md-5">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control search-input" placeholder="Search...">
                                    <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3">
                            <ul class="navbar-nav">
                                <li class="nav-item  ">
                                    <a class="nav-link text-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end of top-nav -->
            </div>
        </div>
    </div>
</nav>
<!-- end of navbar -->