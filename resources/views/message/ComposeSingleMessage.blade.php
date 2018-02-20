<div class="modal fade modal-individualMsg"  role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title">Compose Individual Messege</h3>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('singleMsg.store')}}">
            {{ csrf_field() }}
        <div class="modal-body form">

            <div class="row">
                <div class="col-md-12">

                    <div class="box box-danger">
                        <div class="box-body">
                            <!-- Date dd/mm/yyyy -->
                            <div class="form-group">
                            <label for="lblTo" class="col-sm-2 control-label">To</label>

                            <div class="col-sm-10">
                                <input type="Text" class="form-control" id="receiverNo" name="receiverNo" placeholder="Enter a Contact Number">

                            </div>
                        </div>
                        </div>
                        
                        <div class="form-group">
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter Messege"></textarea>
                            </div>

                            <div class="modal-footer">
                <button type="submit" id="btnSave" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>


                    </div>
                </div>
            </div>

        </div>

        </form>


    </div>
</div>
</div>