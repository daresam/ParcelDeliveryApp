<!-- Edit modal -->
<div class="modal fade" id="deliveryStatus{{ $parcel->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Change Destination</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form role="form" method="post" action="{{route('delivery.status', $parcel->id)}}">
                    @csrf
                    {{method_field('PUT')}}
                <div class="modal-body">
                    <select name="status" class="custom-select">
                        <option value="">Select Status</option>
                        @foreach($status as $key => $sta)
                            <option value="{{$sta }}" {{$sta === $parcel->status ? 'selected': ''}}>{{$sta}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary pull-right" >Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end of modal -->
