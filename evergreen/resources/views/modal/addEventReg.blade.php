<div class="modal fade" id="addEventReg">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Event Registration</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="{{route('registrations.store')}}" id="eventRegFmId">
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="">
                            <div class=" ">
                                <div class="form-group">
                                    <label for="FullName">Full Name:</label>
                                    <input type="text" name="FullName" value="{{old('FullName')}}" class="form-control" id="FullName" placeholder="Enter Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email:</label>
                                    <input type="email" name="Email" value="{{old('Email')}}" class="form-control" id="Email" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label for="MobileNumber">Mobile Number:</label>
                                    <input type="text" name="MobileNumber" value="{{old('MobileNumber')}}" class="form-control" id="MobileNumber" placeholder="Enter Mobile Number">
                                </div>

                                <div class="form-group">
                                    <label for="Designate">Designate:</label>
                                    <select id="Designate" name="Designate" class="form-control " style="width: 100%;">
                                        <option value="">-- Select Designate --</option>
                                        @if(count($designates) > 0)
                                            @foreach($designates as $designate)
                                                <option value="{{$designate->DesignateId}}">{{$designate->Name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary pull-right"  id="submitBtn">Submit</button>
                                </div>
                            </div>
                        </div>



                    </div>


                </form>
            </div>
            <div class="modal-footer">


            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>