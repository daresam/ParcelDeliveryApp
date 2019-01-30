<div class="modal fade" id="addParcel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Parcel</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form role="form" method="post" action="{{route('parcel.store')}}">
                    @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="weight">Weight(kg):</label>
                    <input type="text" name="weight" value="{{old('weight')}}" class="form-control" id="weight" placeholder=" 45">
                </div>
                <div class="d-flex justify-content-between">
                    <div class="form-group mr-1">
                        <label for="sent_on">Sent On:</label>
                        <input type="date" name="sent_on" value="{{old('sent_on')}}" class="form-control" id="sent_on" placeholder="2019-01-30">
                    </div>
                    <div class="form-group ml-1">
                        <label for="delivered_on">Delivered On:</label>
                        <input type="date" name="delivered_on" value="{{old('delivered_on')}}" class="form-control" id="delivered_on" placeholder="2019-02-28">
                    </div>
                </div>
                <div class="form-group">
                    <label for="from_address">From Address:</label>
                    <textarea class="form-control" id="from_address" name="from_address"  rows="3">{{old('from_address')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="to_address">To Address:</label>
                    <textarea class="form-control" id="to_address" name="to_address"  rows="3">{{old('to_address')}}</textarea>
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
