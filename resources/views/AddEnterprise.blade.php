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
                <div style="background-color:white" class="col-md-6">
                    <div class="box-header with-border">
                        <h3 class="box-title">Company Details</h3>
                    </div>
                    <!-- general form elements -->

                    <!-- form start -->

                    <div class="form-horizontal">
                        <div class="box-body">



                            
                            


                            <div class="form-group">
                                <label for="lblCompanyName" class="col-sm-3 control-label">Company Name</label>

                                <div class="col-sm-9">
                                    <input type="Text" class="form-control" id="companyName" placeholder="Company Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="lblCmpnyCN" class="col-sm-3 control-label">Contact Number</label>

                                <div class="col-sm-9">
                                    <input type="Text" class="form-control" id="cmpnyCN" placeholder="Company Contact Number">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lblCmpnyEmail" class="col-sm-3 control-label">Email</label>

                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="cmpnyEmail" placeholder="Company Email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lblCmpnyAddress" class="col-sm-3 control-label">Address</label>

                                <div class="col-sm-9">
                                    <textarea class="form-control" id="cmpnyAddress" rows="4" placeholder="Company Address"></textarea>
                                    {{--<input type="text" class="form-control" id="cmpnyAddress" placeholder="Company Address">--}}

                                </div>
                            </div>



                        </div>

                    </div>

                </div>



                <div style="background-color:white" class="col-md-6">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Login Details</h3>
                    </div>
                    <!-- general form elements -->

                    <!-- form start -->

                    <div class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="lblCmpnyUsername" class="col-sm-2 control-label">Username</label>

                                <div class="col-sm-10">
                                    <input type="Text" class="form-control" id="cmpnyUsername" placeholder="Username">

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lblCmpnyPW" class="col-sm-2 control-label">Password</label>

                                <div class="col-sm-10">
                                    <input type="Password" class="form-control" id="cmpnyPW" placeholder="Password">

                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        

                    </div>


                </div>



            </div>
        </form>
    </div>

    <div  class="row">

    <div style="padding: 5%">

        <div style="float:right; padding-left:2%">
            <button type="submit" class="btn btn-info pull-right">Submit</button>
        </div>

        <div style="float:right">
            <button class="btn btn-default">Cancel</button>
        </div>
    </div>
    </div>



</section>
@endsection