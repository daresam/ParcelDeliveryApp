<!-- Edit modal -->
<div class="modal fade" id="cancelOrder{{ $parcel->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cancel Order</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form role="form" method="post" action="{{route('cancel.order', $parcel->id)}}">
                    @csrf
                    {{method_field('DELETE')}}
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <h3><strong>ARE YOU SURE?</strong></h3>
                    </div>
                    <div class="d-flex justify-content-around my-4">
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-danger ">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end of modal -->
