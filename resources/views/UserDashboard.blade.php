@extends('UserLayout')
@section('content')
    <section class="content-header">
        <h1>
            Dashboard
            <small>Optional description</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <section class="content container-fluid">

    <div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-gray">
            <div class="inner">
                <h3>150</h3>

                <p>Messages</p>
            </div>
            <div class="icon">
                <i class="ion ion-email"></i>
            </div>
            <a href="#" class="small-box-footer bg-navy">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-gray">
            <div class="inner">
                <h3>53<sup style="font-size: 20px"></sup></h3>

                <p>Not Delivered</p>
            </div>
            <div class="icon">
                <i class="ion ion-email"></i>
            </div>
            <a href="#" class="small-box-footer bg-navy">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-gray">
            <div class="inner">
                <h3>44</h3>

                <p>Example</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-notifications-none"></i>
            </div>
            <a href="#" class="small-box-footer bg-navy">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-gray">
            <div class="inner">
                <h3>65</h3>

                <p>Example 2</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-notifications-none"></i>
            </div>
            <a href="#" class="small-box-footer bg-navy">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>

        <div class="row">
        <div class="col-sm-7">
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Latest Single Message</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body" style="">
        <div class="table-responsive">
            <table class="table no-margin">
                <thead>
                <tr>
                    <th>Sent At</th>
                    <th>To</th>
                    <th>Message</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>02:30:16 17/01/2018</td>
                    <td>0771234567</td>
                    <td>Welcome</td>
                    <td><span class="label label-success">Delivered</span></td>
                </tr>
                <tr>
                    <td>02:15:16 17/01/2018</td>
                    <td>0778892828</td>
                    <td>Low Ballance in your account</td>
                    <td><span class="label label-success">Delivered</span></td>
                </tr>
                <tr>
                    <td>02:00:16 17/01/2018</td>
                    <td>0771234567</td>
                    <td>Bill payent confirmed</td>
                    <td><span class="label label-success">Delivered</span></td>
                </tr>
                <tr>
                    <td>01:30:16 17/01/2018</td>
                    <td>0773465586</td>
                    <td>get a 40% discount with your visa card</td>
                    <td><span class="label label-success">Delivered</span></td>
                </tr>
                <tr>
                    <td>01:00:16 17/01/2018</td>
                    <td>0755607753</td>
                    <td>Congradulatios you won a bicycle</td>
                    <td><span class="label label-danger">Pending</span></td>
                </tr>
                <tr>
                    <td>02:30:16 17/01/2018</td>
                    <td>0771212121</td>
                    <td>you account was transformed from savins to current</td>
                    <td><span class="label label-success">Delivered</span></td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer clearfix" style="">
        <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Messages</a>
    </div>
    <!-- /.box-footer -->
</div>
        </div>

            <div class="col-sm-5">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Latest Bulk Message</h3>

                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>List Name</th>
                                    <th>Sent At</th>
                                    <th>Message</th>
                                    <th>Delivered/Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Loyalty Customers</td>
                                    <td>02:30:16 17/01/2018</td>
                                    <td>20% off at KFC</td>
                                    <td><span class="label label-primary">65/80</span></td>
                                </tr>
                                <tr>
                                    <td>Daily Customers</td>
                                    <td>12:30:16 17/01/2018</td>
                                    <td>A new brnch is opend in Dehiwala</td>
                                    <td><span class="label label-primary">65/80</span></td>
                                </tr>
                                <tr>
                                    <td>New Customers</td>
                                    <td>11:30:16 17/01/2018</td>
                                    <td>new compertation</td>
                                    <td><span class="label label-primary">65/80</span></td>
                                </tr>
                                <tr>
                                    <td>Gold Customers</td>
                                    <td>10:30:16 17/01/2018</td>
                                    <td>ther will be a small maintainace break in a few minutes</td>
                                    <td><span class="label label-primary">65/80</span></td>
                                </tr>
                                <tr>
                                    <td>Loyalty Customers</td>
                                    <td>02:30:16 17/01/2018</td>
                                    <td>20% off at KFC</td>
                                    <td><span class="label label-primary">65/80</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix" style="">
                        <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Messages</a>
                    </div>
                    <!-- /.box-footer -->
                </div>
            </div>
        </div>
    </section>
@endsection
