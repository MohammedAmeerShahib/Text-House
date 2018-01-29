
@extends('AdminLayoutTest')
@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
Enterprise Details
</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->

    <section style="background-color:white" class="content container-fluid">

	<div class="row">
        <form>

        <!-- left column -->
	<div class="box box-primary">

            <!-- /.box-header -->
        <div style="background-color:white" class="col-md-6">
		<div class="box-header with-border">
              <h3 class="box-title">User Details</h3>
            </div>
          <!-- general form elements -->

            <!-- form start -->

             <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="lblFirstName" class="col-sm-2 control-label">First Name</label>

                  <div class="col-sm-10">
                    <input type="Text" class="form-control" id="firstName" placeholder="First Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="lblLastName" class="col-sm-2 control-label">Last Name</label>

                  <div class="col-sm-10">
                    <input type="Text" class="form-control" id="lastName" placeholder="Last Name">
                  </div>
                </div>

				<div class="form-group">
                  <label for="lblContactNo" class="col-sm-2 control-label">Contact Number</label>

                  <div class="col-sm-10">
                    <input type="Text" class="form-control" id="contactNo" placeholder="Contact Number">
                  </div>
                </div>

				 <div class="form-group">
                  <label for="lblEmail" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder=" User Email">
                  </div>
                </div>





			<div class="box box-primary">
				<div class="box-header with-border">
              <h3 class="box-title">Add Login Details</h3>
            </div>
            <!-- /.box-header -->
			<div style="background-color:white" class="col-md-6">
			</div>
			</div>
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

            </div>

          </div>



		     <div style="background-color:white" class="col-md-6">
			 <div class="box-header with-border">
              <h3 class="box-title">Company Details</h3>
            </div>
          <!-- general form elements -->

            <!-- form start -->

             <div class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="lblCompanyName" class="col-sm-2 control-label">Company Name</label>

                  <div class="col-sm-10">
                    <input type="Text" class="form-control" id="companyName" placeholder="Company Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="lblCmpnyCN" class="col-sm-2 control-label">Contact Number</label>

                  <div class="col-sm-10">
                    <input type="Text" class="form-control" id="cmpnyCN" placeholder="Company Contact Number">
                  </div>
                </div>

				<div class="form-group">
                  <label for="lblCmpnyEmail" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="cmpnyEmail" placeholder="Company Email">
                  </div>
                </div>

				<div class="form-group">
                  <label for="lblCmpnyAddress" class="col-sm-2 control-label">Address</label>

                  <div class="col-sm-10">
                    <input type="Text" class="form-control" id="cmpnyAddress" placeholder="Company Address">

                  </div>
                </div>

				<div class="form-group">
                  <label for="lblCmpnyCity" class="col-sm-2 control-label">City</label>

                  <div class="col-sm-10">
                    <input type="Text" class="form-control" id="cmpnyCity" placeholder="Company City">

                  </div>
                </div>

				<div class="form-group">
                  <label for="lblCmpnyCountry" class="col-sm-2 control-label">Country</label>

                  <div class="col-sm-10">
                    <input type="Text" class="form-control" id="cmpnyCountry" placeholder="Company Country">

                  </div>
                </div>




              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </div>

          </div>


        </div>
        </form>
      </div>

    </section>
    <!-- /.content -->

  <!-- /.content-wrapper -->
@endsection

