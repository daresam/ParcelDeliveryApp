<!-- Edit modal -->
<div class="modal fade" id="changeDestination{{ $parcel->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Change Destination</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form role="form" method="post" action="{{route('change.destination', $parcel->id)}}">
                    @csrf
                    {{method_field('PUT')}}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="to_address">To Address:</label>
                        <textarea class="form-control" id="to_address" name="to_address"  rows="3">{{ $parcel->to_address}}</textarea>
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
    <!-- end of modal -->
