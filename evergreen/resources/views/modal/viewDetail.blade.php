<div class="modal fade" id="viewDetail{{$member->MembershipFormId}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>{{$member->FullName}}</b> Full Details</h4>
            </div>
            <div class="modal-body">
                    <div class="box-body">


                        <p>Full Name:    <b>{{$member->status->Name}} {{$member->FullName}}</b></p>
                        <p>Mobile Number:    <b>{{$member->MobileNumber}}</b></p>
                        <p>Address:    <b>{{$member->Address}}</b></p>
                        <p>Denomination:    <b>{{$member->Denomination}}</b></p>
                        <p>Date of Birth :    <b>{{$member->DateOfBirth}}</b></p>
                        <p>Email:    <b>{{$member->Email}}</b></p>
                        <p>Marital Status:    <b>{{$member->maritalStatus->Name}}</b></p>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>