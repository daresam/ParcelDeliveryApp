<div class="modal fade" id="viewParcel{{ $parcel->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Delivery</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                   <div class="row">
                    <div class="col-md-8 mx-auto">
                            <p><strong>Placed By: </strong>{{ $parcel->placed_by }}</p>
                            <p><strong>Weight: </strong>{{ $parcel->weight }}kg</p>
                            <p><strong>Sent On: </strong>{{ $parcel->sent_on }}</p>
                            <p><strong>Delivered On: </strong>{{ $parcel->delivered_on }}</p>
                            <p><strong>Status: </strong>{{ $parcel->status }}</p>
                            <p><strong>From Address: </strong>{{ $parcel->from_address }}</p>
                            <p><strong>To Address: </strong>{{ $parcel->to_address }}</p>
                    </div>
                   </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
