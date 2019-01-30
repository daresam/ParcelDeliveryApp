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
                                <h3 class="text-muted  mb-3  ">Parcels</h3>
                                <span  data-toggle="modal" data-target="#addParcel" class="pointer btn btn-link">
                                    <i  class="fas fa-plus-square fa-lg h2 text-primary mr-2 "></i>
                                </span>
                            </div>
                            <div class="col-md-6 mx-auto">
                                @include('includes.errors')
                                @include('includes.alert')

                            </div>
                            <table class="table table-striped bg-light text-center">
                                <thead>
                                <tr class="text-muted">
                                    <th>#</th>
                                    <th>Weight(kg)</th>
                                    <th>Sent On</th>
                                    <th>Delivered On</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if(count($parcels) > 0)
                                    @foreach($parcels as $key => $parcel)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$parcel->weight}}</td>
                                            <td>{{$parcel->sent_on}}</td>
                                            <td>{{$parcel->delivered_on}}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                       view more
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a data-toggle="modal" data-target="#viewParcel{{ $parcel->id }}" class="dropdown-item" href="#">View Delivery</a>
                                                        <a data-toggle="modal" data-target="#changeDestination{{ $parcel->id }}" class="dropdown-item" href="#" class="btn btn-link " >Change Destination</a>
                                                        <a data-toggle="modal" data-target="#cancelOrder{{ $parcel->id }}" class="dropdown-item text-danger" href="#">Cancel Order</a>
                                                        <a  data-toggle="modal" data-target="#deliveryStatus{{ $parcel->id }}" class="dropdown-item" href="#">Delivery Status</a>
                                                    </div>
                                                  </div>


                                            </td>
                                        </tr>
                                        @include('modal.viewParcel')
                                        @include('modal.changeDestination')
                                        @include('modal.deliveryStatus')
                                        @include('modal.cancelOrder')
                                    @endforeach
                                @endif
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of tables -->

    <!-- Add modal -->
    @include('modal.addParcel')
    <!-- end of modal -->



@endsection

