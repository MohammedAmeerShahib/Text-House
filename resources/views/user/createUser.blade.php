
<!-- Bootstrap modal -->
<div class="modal fade bs-modal-cu"  role="dialog">

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
                <h3 class="modal-title">User Form</h3>
            </div>
            <div class="modal-body form">
                <form  class="form-horizontal" method="POST" action="{{ route('customer.store') }}">
                    {{ csrf_field() }}

                        <div class="form-body">

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-3 control-label">E-Mail Address</label>

                                <div class="col-md-9">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                <label for="username" class="col-md-3 control-label">Username</label>

                                <div class="col-md-9">
                                    <input id="username" placeholder="Username" class="form-control" name="username" type="text" required>

                                    @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="Password" class="col-md-3 control-label">Password</label>

                                <div class="col-md-9">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif


                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-3 control-label">Confirm Password</label>

                                <div class="col-md-9">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>


                                </div>
                            </div>

                        </div>

                    <div class="modal-footer">
                        <button type="submit"  class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </form>

            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->


