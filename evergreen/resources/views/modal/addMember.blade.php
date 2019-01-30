<div class="modal fade" id="addMember">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Member</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="{{route('members.store')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Status">Status</label>
                                    <select id="Status" name="Status" class="form-control select2" style="width: 100%;">
                                        <option value="">-- Select Status --</option>
                                        @if(count($status) > 0)
                                            @foreach($status as $sta)
                                                <option value="{{$sta->StatusId}}">{{$sta->Name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="FullName">Full Name:</label>
                                    <input type="text" name="FullName" value="{{old('FullName')}}" class="form-control" id="FullName" placeholder="Enter Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email:</label>
                                    <input type="email" name="Email" value="{{old('Email')}}" class="form-control" id="Email" placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <label for="Address">Address:</label>
                                    <input type="text" name="Address" value="{{old('Address')}}" class="form-control" id="Address" placeholder="Enter Address">
                                </div>
                                <div class="form-group">
                                    <label for="DateOfBirth">DateOfBirth:</label>
                                    <input type="date" name="DateOfBirth" value="{{old('DateOfBirth')}}" class="form-control" id="DateOfBirth" placeholder="Enter Date of Birth">
                                </div>


                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="MobileNumber">MobileNumber:</label>
                                    <input type="text" name="MobileNumber" value="{{old('MobileNumber')}}" class="form-control" id="MobileNumber" placeholder="Enter MobileNumber">
                                </div>
                                <div class="form-group">
                                    <label for="Denomination">Denomination:</label>
                                    <input type="text" name="Denomination" value="{{old('Denomination')}}" class="form-control" id="Denomination" placeholder="Enter Denomination">
                                </div>

                                <div class="form-group">
                                    <label for="MaritalStatus">Marital Status</label>
                                    <select id="MaritalStatus" name="MaritalStatus" class="form-control " style="width: 100%;">
                                        <option value="">-- Select Status --</option>
                                        @if(count($maritalStas) > 0)
                                            @foreach($maritalStas as $Msta)
                                                <option value="{{$Msta->MaritalStatusId}}">{{$Msta->Name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="Passport">Passport:</label>
                                    <input type="file" name="Passport" value="{{old('Passport')}}" class="form-control" id="Passport" placeholder="Enter Passport">
                                </div>

                                <div class="form-group">
                                    <br>
                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                                </div>

                            </div>
                        </div>

                        {{--<div class="checkbox">--}}
                            {{--<label>--}}
                                {{--<input type="checkbox" name="status" value="1"> Status--}}
                            {{--</label>--}}
                        {{--</div>--}}

                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>