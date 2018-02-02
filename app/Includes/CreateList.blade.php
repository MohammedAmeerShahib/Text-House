
<!-- Bootstrap modal -->
<div class="modal fade bs-modal-sm"  role="dialog">

    <script>
        function ClearFields() {

            document.getElementById("ConfirmPassword").value = "";
            document.getElementById("Password").value = "";
            document.getElementById("Email").value = "";
            document.getElementById("Username").value = "";
        }
    </script>

    <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Person Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">E-Mail Address</label>
                            <div class="col-md-9">
                                <input id="Email" placeholder="E-Mail Address" class="form-control" type="text" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Username</label>
                            <div class="col-md-9">
                                <input id="Username" placeholder="Username" class="form-control" type="text" required>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input type = password id="Password" placeholder="Password" class="form-control" required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Confirm Password</label>
                            <div class="col-md-9">
                                <input type = password id="ConfirmPassword" placeholder="Confirm Password" class="form-control"  required>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i>&nbsp Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="ClearFields()">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->


