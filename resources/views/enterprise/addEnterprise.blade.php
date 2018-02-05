<div class="modal fade bs-modal-ce"  role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Enterprise Form</h3>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('enterprise.store')}}">
                {{ csrf_field() }}
                <div class="modal-body form">



                    <div class="form-body">

                        <div class="form-group{{ $errors->has('EnterpriseName') ? ' has-error' : '' }}">
                            <label for="EnterpriseName" class="col-md-4 control-label">Company Name</label>

                            <div class="col-md-6">
                                <input id="EnterpriseName" type="text" class="form-control" name="EnterpriseName" value="{{ old('EnterpriseName') }}" required autofocus>

                                @if ($errors->has('EnterpriseName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('EnterpriseName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('EnterpriseContactnumber') ? ' has-error' : '' }}">
                            <label for="EnterpriseName" class="col-md-4 control-label">Contact Number</label>

                            <div class="col-md-6">
                                <input id="EnterpriseContactnumber" type="number" class="form-control" name="EnterpriseContactnumber" value="{{ old('EnterpriseContactnumber') }}" required autofocus>

                                @if ($errors->has('EnterpriseContactnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('EnterpriseContactnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('EnterpriseAddress') ? ' has-error' : '' }}">
                            <label for="EnterpriseAddress" class="col-md-4 control-label">Company Address</label>

                            <div class="col-md-6">
                                <textarea id="EnterpriseAddress" type="text" class="form-control" name="EnterpriseAddress" value="{{ old('EnterpriseAddress') }}" required autofocus></textarea>

                                @if ($errors->has('EnterpriseAddress'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('EnterpriseAddress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('EnterpriseEmail') ? ' has-error' : '' }}">
                            <label for="EnterpriseEmail" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="EnterpriseEmail" type="email" class="form-control" name="EnterpriseEmail" value="{{ old('EnterpriseEmail') }}" >

                                @if ($errors->has('EnterpriseEmail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('EnterpriseEmail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">


                    <button type="submit"  class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>


