<div class="row">

    <form   method="POST" action="{{ route('enterprise.store')}}">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}



        <div class="col-md-5">

            <div class="form-horizontal">
                <div class="box-body">
                    <div class=" form-group{{ $errors->has('EnterpriseName') ? ' has-error' : '' }}">
                        <label for="EnterpriseName" class="col-sm-3 control-label">Company Name</label>

                        <div class="col-sm-9">
                            <input value={{$enterprise->EnterpriseName}} id="EnterpriseName" type="text" class="form-control" name="EnterpriseName"  required autofocus>

                            @if ($errors->has('EnterpriseName'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('EnterpriseName') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('EnterpriseEmail') ? ' has-error' : '' }}">
                        <label for="EnterpriseEmail" class="col-sm-3 control-label">Email</label>

                        <div class="col-sm-9">
                            <input id="EnterpriseEmail" type="email" class="form-control" name="EnterpriseEmail" value="{{ old('EnterpriseEmail') }}" required autofocus>

                            @if ($errors->has('EnterpriseEmail'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('EnterpriseEmail') }}</strong>
                                    </span>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">

            <div class="form-horizontal">
                <div class="box-body">
                    <div class="form-group{{ $errors->has('EnterpriseContactnumber') ? ' has-error' : '' }}">
                        <label for="EnterpriseName" class="col-sm-3 control-label">Contact Number</label>

                        <div class="col-sm-9">
                            <input id="EnterpriseContactnumber" type="number" class="form-control" name="EnterpriseContactnumber" value="{{ old('EnterpriseContactnumber') }}" required autofocus>

                            @if ($errors->has('EnterpriseContactnumber'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('EnterpriseContactnumber') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('EnterpriseAddress') ? ' has-error' : '' }}">
                        <label for="EnterpriseAddress" class="col-sm-3 control-label">Company Address</label>

                        <div class="col-sm-9">
                            <textarea id="EnterpriseAddress" type="text" class="form-control" name="EnterpriseAddress" value="{{ old('EnterpriseAddress') }}" required autofocus></textarea>

                            @if ($errors->has('EnterpriseAddress'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('EnterpriseAddress') }}</strong>
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
        </div>
    </form>



</div>
@if (session('status'))

    <script>

        $(function($) {
            console.log("sdsa");
            $('#editBtn').click();
        })

    </script>



@endif
