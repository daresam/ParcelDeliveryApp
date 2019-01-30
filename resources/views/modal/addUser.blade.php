<div class="modal fade" id="addUser">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form role="form" method="post" action="{{route('user.store')}}">
                    @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="FullName">Full Name:</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" id="FullName" placeholder="Enter Full Name">
                </div>
                <div class="form-group">
                    <label for="Email">Email:</label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control" id="Email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="Password">Password:</label>
                    <input type="password" name="password"  class="form-control" id="Password" placeholder="*******">
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="status" value="1"> Assign as an Admin
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary pull-right" >Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
