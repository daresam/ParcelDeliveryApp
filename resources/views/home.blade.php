@extends('layouts.admin.admin')

@section('content')
    <!-- modal -->
    <div class="modal fade" id="sign-out">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Want to leave?</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    Press logout to leave
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Stay Here</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Logout</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end of modal -->

    <!-- cards -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row pt-md-5 mt-md-3 mb-5">
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-shopping-cart fa-3x text-warning"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Sales</h5>
                                            <h3>$135,000</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Updated Now</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-money-bill-alt fa-3x text-success"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Expenses</h5>
                                            <h3>$39,000</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Updated Now</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-users fa-3x text-info"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Users</h5>
                                            <h3>15,000</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Updated Now</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-chart-line fa-3x text-danger"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Visitors</h5>
                                            <h3>45,000</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Updated Now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of cards -->

    <!-- tables -->
    <section>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                            <h3 class="text-muted text-center mb-3">Staff Salary</h3>
                            <table class="table table-striped bg-light text-center">
                                <thead>
                                <tr class="text-muted">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Salary</th>
                                    <th>Date</th>
                                    <th>Contact</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>John</td>
                                    <td>$2000</td>
                                    <td>25/05/2018</td>
                                    <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Ann</td>
                                    <td>$2000</td>
                                    <td>25/05/2018</td>
                                    <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Mark</td>
                                    <td>$2000</td>
                                    <td>25/05/2018</td>
                                    <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>Mary</td>
                                    <td>$2000</td>
                                    <td>25/05/2018</td>
                                    <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>Bob</td>
                                    <td>$2000</td>
                                    <td>25/05/2018</td>
                                    <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                </tr>
                                </tbody>
                            </table>

                            <!-- pagination -->
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link py-2 px-3">
                                            1
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            2
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            3
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- end of pagination -->

                        </div>
                        <div class="col-xl-6 col-12">
                            <h3 class="text-muted text-center mb-3">Recent Payments</h3>
                            <table class="table table-dark table-hover text-center">
                                <thead>
                                <tr class="text-muted">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Monica</td>
                                    <td>$2000</td>
                                    <td>25/05/2018</td>
                                    <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Nick</td>
                                    <td>$2000</td>
                                    <td>25/05/2018</td>
                                    <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>Alex</td>
                                    <td>$2000</td>
                                    <td>25/05/2018</td>
                                    <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>Jane</td>
                                    <td>$2000</td>
                                    <td>25/05/2018</td>
                                    <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>Michael</td>
                                    <td>$2000</td>
                                    <td>25/05/2018</td>
                                    <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                                </tr>
                                <tr>
                                    <th>6</th>
                                    <td>Kate</td>
                                    <td>$2000</td>
                                    <td>25/05/2018</td>
                                    <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- pagination -->
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link py-2 px-3">
                                            1
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            2
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            3
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- end of pagination -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of tables -->

    <!-- progress / task list -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row mb-4 align-items-center">
                        <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                            <div class="bg-dark text-white p-4 rounded">
                                <h4 class="mb-5">Coversion Rates</h4>
                                <h6 class="mb-3">Google Chrome</h6>
                                <div class="progress mb-4" style="height: 20px">
                                    <div class="progress-bar progress-bar-striped font-weight-bold" style="width: 91%">
                                        91%
                                    </div>
                                </div>
                                <h6 class="mb-3">Mozilla Firefox</h6>
                                <div class="progress mb-4" style="height: 20px">
                                    <div class="progress-bar progress-bar-striped font-weight-bold bg-success" style="width: 82%">
                                        82%
                                    </div>
                                </div>
                                <h6 class="mb-3">Safari</h6>
                                <div class="progress mb-4" style="height: 20px">
                                    <div class="progress-bar progress-bar-striped font-weight-bold bg-danger" style="width: 67%">
                                        67%
                                    </div>
                                </div>
                                <h6 class="mb-3">IE</h6>
                                <div class="progress mb-4" style="height: 20px">
                                    <div class="progress-bar progress-bar-striped font-weight-bold bg-info" style="width: 10%">
                                        10%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">
                            <h4 class="text-muted p-3 mb-3">Tasks:</h4>
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 task-border align-items-center">
                                    <div class="col-1">
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="col-sm-9 col-8">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true" data-placement="top"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 task-border align-items-center">
                                    <div class="col-1">
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="col-sm-9 col-8">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true" data-placement="top"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 task-border align-items-center">
                                    <div class="col-1">
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="col-sm-9 col-8">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true" data-placement="top"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 task-border align-items-center">
                                    <div class="col-1">
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="col-sm-9 col-8">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true" data-placement="top"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 task-border align-items-center">
                                    <div class="col-1">
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="col-sm-9 col-8">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top"><i class="fas fa-edit fa-lg text-success mr-2"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>delete</h6>" data-html="true" data-placement="top"><i class="fas fa-trash-alt fa-lg text-danger"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of progress / task list -->

    <!-- activities / quick post -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row align-items-center mb-5">
                        <div class="col-xl-7">
                            <h4 class="text-muted mb-4">Recent Customer Activities</h4>
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseOne">
                                            <img src="{{ asset('admin/images/cust1.jpeg') }}" width="50" class="mr-3 rounded">
                                            John posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse show" id="collapseOne" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis earum modi delectus fugiat consectetur eaque harum obcaecati, saepe id vitae, dolore aliquam! Quos, doloribus quisquam.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseTwo">
                                            <img src="{{ asset('admin/images/cust2.jpeg') }}" width="50" class="mr-3 rounded">
                                            Mark posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis earum modi delectus fugiat consectetur eaque harum obcaecati, saepe id vitae, dolore aliquam! Quos, doloribus quisquam.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseThree">
                                            <img src="{{ asset('admin/images/cust3.jpeg') }}" width="50" class="mr-3 rounded">
                                            Monica posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseThree" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis earum modi delectus fugiat consectetur eaque harum obcaecati, saepe id vitae, dolore aliquam! Quos, doloribus quisquam.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseFour">
                                            <img src="{{ asset('admin/images/cust4.jpeg') }}" width="50" class="mr-3 rounded">
                                            Vivien posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseFour" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis earum modi delectus fugiat consectetur eaque harum obcaecati, saepe id vitae, dolore aliquam! Quos, doloribus quisquam.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseFive">
                                            <img src="{{ asset('admin/images/cust5.jpeg') }}" width="50" class="mr-3 rounded">
                                            Nick posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseFive" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis earum modi delectus fugiat consectetur eaque harum obcaecati, saepe id vitae, dolore aliquam! Quos, doloribus quisquam.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseSix">
                                            <img src="{{ asset('admin/images/cust6.jpeg') }}" width="50" class="mr-3 rounded">
                                            Ann posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseSix" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis earum modi delectus fugiat consectetur eaque harum obcaecati, saepe id vitae, dolore aliquam! Quos, doloribus quisquam.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 mt-5">
                            <div class="card rounded">
                                <div class="card-body">
                                    <h5 class="text-muted text-center mb-4">Quick Status Post</h5>
                                    <ul class="list-inline text-center py-3">
                                        <li class="list-inline-item mr-4">
                                            <a href="#">
                                                <i class="fas fa-pencil-alt text-success"></i>
                                                <span class="h6 text-muted">Status</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item mr-4">
                                            <a href="#">
                                                <i class="fas fa-camera text-info"></i>
                                                <span class="h6 text-muted">Photo</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fas fa-map-marker-alt text-primary"></i>
                                                <span class="h6 text-muted">Check-in</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control py-2 mb-3" placeholder="What's Your Status...">
                                            <button type="button" class="btn btn-block text-uppercase font-weight-bold text-light bg-info py-2 mb-5">Submit Post</button>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card bg-light">
                                                <i class="far fa-calendar-alt fa-8x text-warning d-block m-auto py-3"></i>
                                                <div class="card-body">
                                                    <p class="card-text text-center font-weight-bold text-uppercase">Mon, may 26</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card bg-light">
                                                <i class="far fa-clock fa-8x text-danger d-block m-auto py-3"></i>
                                                <div class="card-body">
                                                    <p class="card-text text-center font-weight-bold text-uppercase">3:50 am</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of activities / quick post -->

@endsection

