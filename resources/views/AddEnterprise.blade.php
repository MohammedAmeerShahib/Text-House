@extends('AdminLayout')
@section('content')
<!-- Content Header (Page header) -->
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
<section class="content container-fluid">

    <!--------------------------
      | Your Page Content Here |
      -------------------------->
    <div style="background-color:white" class="row">

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
    @endif

            <!-- left column -->
            <div class="box box-primary">

                <!-- /.box-header -->
                <div style="background-color:white" class="col-md-12">

                    <div class="col-sm-2" style="margin-top: 4%;margin-bottom: 2%">
            <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target=".bs-modal-ce">
                <i class="glyphicon glyphicon-plus"></i>
                <b>&nbsp;&nbsp;CREATE</b>
            </button>

        </div>
                    </div>


        
        <table id="SMS" class="table table-bordered table-hover dataTable" role="grid">
            <thead>
            <tr role="row">
                <th width="5%">Number</th>
                <th width="22%">Enterprise Name</th>
                <th width="15%">Contatc Number</th>
                <th width="23%">Email</th>
                <th width="25%">Address</th>
                <th width="10%">Action</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td>1</td>
                <td>Microsoft</td>
                <td>0112000400</td>
                <td>info@microsoft.lk</td>
                <td>Colombo</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" ><i class="glyphicon glyphicon-pencil"></i> Edit  </a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Ubisoft</td>
                <td>0116503200</td>
                <td>info@Ubisoft.lk</td>
                <td>Colombo</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Valve</td>
                <td>0816302600</td>
                <td>contact@valve.lk</td>
                <td>Katugasthota</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Cisco</td>
                <td>0354560000</td>
                <td>lk@cisco.com</td>
                <td>Mawanella</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Infinity Ward</td>
                <td>0818200320</td>
                <td>info@infinityward.lk</td>
                <td>Matale</td>
            </tr>
                        </tbody>
        </table>



                        <!-- Bootstrap modal -->

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
                                    <div class="modal-footer">
                                        <button type="submit"  class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                                    </form>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <!-- End Bootstrap modal -->




                    
            </div>
                    </div>
</section>
@endsection