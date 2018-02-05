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
            <form  class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="modal-body">



                    <div class="form-body">

                        <input type="hidden" value={{$enterprise->EnterpriseId}} name="EnterpriseId" />
                        <input type="hidden" value="User" name="userType"/>

                        <div class="form-group">
                            <label for="EnterpriseName" class="col-md-2 control-label">Company Name</label>

                            <div class="col-md-6">
                                <label  id="EnterpriseName" type="text" class="form-control" name="EnterpriseName">{{$enterprise->EnterpriseName}}</label>


                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-2 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-2 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" placeholder="Username" class="form-control" name="username" type="text" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="Password" class="col-md-2 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif


                            </div>
                        </div>

                        <div class="form-group">
                            <label for="EnterpriseEmail" class="col-md-2 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>


                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit"  class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-danger" >Cancel</button>
                </div>
            </form>


        </div>


    </section>

@endsection