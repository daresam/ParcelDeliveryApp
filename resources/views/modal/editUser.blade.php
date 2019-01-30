<!-- Edit modal -->
<div class="modal fade" id="editUser{{ $user->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit User</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form role="form" method="post" action="{{route('user.update', $user->id)}}">
                    @csrf
                    {{method_field('PUT')}}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="FullName">Full Name:</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="FullName" placeholder="Enter Full Name">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email:</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="Email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password:</label>
                        <input type="password" name="password"  class="form-control" id="Password" placeholder="*******">
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="status" value="1" {{$user->status == 1 ? 'checked' : ''}}> Assign as an Admin
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary pull-right" >Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end of modal -->