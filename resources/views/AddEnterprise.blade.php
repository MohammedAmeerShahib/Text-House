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
        <form>

            <!-- left column -->
            <div class="box box-primary">

                <!-- /.box-header -->
                <div style="background-color:white" class="col-md-12">
                    <div class="box-header with-border">
                        <h3 class="box-title">Company Details</h3>
                    </div>
                    <div class="col-sm-2" style="margin-top: 4%;margin-bottom: 2%">
            <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target=".bs-modal-sm">
                <i class="glyphicon glyphicon-plus"></i>
                <b>&nbsp;&nbsp;CREATE</b>
            </button>

        </div>
                    </div>

                    <section style="background-color:white" class="content container-fluid">




        
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


        <?php   include(app_path().'/Includes/CreateList.php'); ?>

    </section>

                    </div>
</section>
@endsection