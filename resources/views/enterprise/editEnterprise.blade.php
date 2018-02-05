@extends('AdminLayout')
@section('content')

    <section class="content-header">
        <h1>
            Page Header
            <small>Optional description</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->
    <section style="background-color:white" class="content container-fluid">

<div class="row">
            <div class="modal-header">
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                {{-- <h3 class="modal-title">Enterprise Form</h3>--}}
            </div>
<form  class="form-horizontal" method="POST" action="{{ route('enterprise.update',$enterprise->EnterpriseId) }}">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <div class="modal-body edit-content form">



        <div class="form-body">

            <div class="form-group{{ $errors->has('EnterpriseName') ? ' has-error' : '' }}">
                <label for="EnterpriseName" class="col-md-2 control-label">Company Name</label>

                <div class="col-md-6">
                    <label  id="EnterpriseName" type="text" class="form-control" name="EnterpriseName">{{$enterprise->EnterpriseName}}</label>

                    @if ($errors->has('EnterpriseName'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('EnterpriseName') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('EnterpriseContactnumber') ? ' has-error' : '' }}">
                <label for="EnterpriseName" class="col-md-2 control-label">Contact Number</label>

                <div class="col-md-6">
                    <input id="EnterpriseContactnumber" type="number" class="form-control" name="EnterpriseContactnumber" value="{{ $enterprise->EnterpriseContactnumber }}" required autofocus>

                    @if ($errors->has('EnterpriseContactnumber'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('EnterpriseContactnumber') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('EnterpriseAddress') ? ' has-error' : '' }}">
                <label for="EnterpriseAddress" class="col-md-2 control-label">Company Address</label>

                <div class="col-md-6">
                    <input id="EnterpriseAddress" type="text" class="form-control" name="EnterpriseAddress" value="{{$enterprise->EnterpriseAddress}}" required autofocus>

                    @if ($errors->has('EnterpriseAddress'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('EnterpriseAddress') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('EnterpriseEmail') ? ' has-error' : '' }}">
                <label for="EnterpriseEmail" class="col-md-2 control-label">Email</label>

                <div class="col-md-6">
                    <input id="EnterpriseEmail" type="email" class="form-control" name="EnterpriseEmail" value="{{ $enterprise->EnterpriseEmail }}" required autofocus>

                    @if ($errors->has('EnterpriseEmail'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('EnterpriseEmail') }}</strong>
                                    </span>
                    @endif

                    <div class="modal-footer">
                        <button type="submit"  class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>

                </div>
            </div>

        </div>

    </div>

</form>


</div>
    </section>
@endsection