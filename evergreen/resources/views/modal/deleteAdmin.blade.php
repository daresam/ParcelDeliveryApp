<div class="modal fade" id="deleteAdmin{{$admin->id}}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Delete <strong> {{$admin->name}}</strong> </h4>
            </div>
            <div class="modal-body">
                <form role="form" method="post" action="{{route('admin.destroy', $admin->id)}}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <div class="box-body">
                        <h3><strong>ARE YOU SURE?</strong></h3>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary pull-right">Yes</button>
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