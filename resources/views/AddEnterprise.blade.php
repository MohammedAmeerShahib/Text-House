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
<section style="background-color:white" class="content container-fluid">

    <!--------------------------
      | Your Page Content Here |
      -------------------------->

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
    @endif

            <!-- left column -->

                <!-- /.box-header -->

                    <div class="col-sm-2" style="margin-top: 4%;margin-bottom: 2%">
            <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target=".bs-modal-ce">
                <i class="glyphicon glyphicon-plus"></i>
                <b>&nbsp;&nbsp;CREATE</b>
            </button>

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
                <td></td>
                <td></td>
                <td>0112000400</td>
                <td>info@microsoft.lk</td>
                <td>Colombo</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" ><i class="glyphicon glyphicon-pencil"></i> Edit  </a>
                </td>
            </tr>

                        </tbody>
        </table>


</section>

                        <!-- Bootstrap modal -->





@endsection