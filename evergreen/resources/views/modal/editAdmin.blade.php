<div class="modal fade" id="editAdmin{{$admin->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit {{$admin->name}}</h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="{{route('admin.update', $admin->id)}}" >
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="box-body">

                        <div class=" ">
                            <div class="form-group">
                                <label for="FullName">Full Name:</label>
                                <input type="text" name="FullName" value="{{$admin->name}}" class="form-control" id="FullName" placeholder="Enter Full Name">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email:</label>
                                <input type="email" name="Email" value="{{$admin->email}}" class="form-control" id="Email" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password:</label>
                                <input type="password" name="Password" class="form-control" id="Password" placeholder="*******">
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="status" value="1" {{$admin->status == 1 ? 'checked' : ''}}> Assign as an Admin
                                </label>
                            </div>

                            <div class="form-group">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary pull-right" >Update</button>
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