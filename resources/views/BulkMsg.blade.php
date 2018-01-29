@extends('UserLayout')
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

    <section class="content container-fluid">

    <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Inbox</h3>

        <div class="box-tools pull-right">
            <div class="has-feedback">
                <input type="text" class="form-control input-sm" placeholder="Search Mail">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
            </div>

            <div  style="margin-top: 4%;margin-bottom: 2%">
                <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target=".modal-bulkmsg">
                    <i class="glyphicon glyphicon-plus"></i>
                    <b>&nbsp;&nbsp;COMPOSE MESSAGE</b>
                </button>

            </div>
        </div>
        <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <div class="mailbox-controls">
            <!-- Check all button -->
                <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>

            <!-- /.btn-group -->
        </div>

        <div class="table-responsive mailbox-messages">
            <table class="table table-hover table-striped no-margin">
                <tbody>
                <tr>
                    <td><input class="icheckbox_flat-blue"type="checkbox" ></td>
                    <td><b>1</b></td>
                    <td >02:30:16 <br> 17/01/2018</td>
                    <td>0771234567</td>
                    <td>First Message sent to this number as expected deliverd</td>
                    <td><span class="label label-primary">Delivered</span></td>
                </tr>
                <tr>
                    <td><input class="icheckbox_flat-blue"type="checkbox" ></td>
                    <td><b>1</b></td>
                    <td >02:30:16 <br> 17/01/2018</td>
                    <td>0771234567</td>
                    <td>First Message sent to this</td>
                    <td><span class="label label-primary">Delivered</span></td>
                </tr>
                <tr>
                    <td><input class="icheckbox_flat-blue"type="checkbox" ></td>
                    <td><b>1</b></td>
                    <td >02:30:16 <br> 17/01/2018</td>
                    <td>0771234567</td>
                    <td>First Message sent to this</td>
                    <td><span class="label label-danger">UnDelivered</span></td>
                </tr>
                <tr>
                    <td><input class="icheckbox_flat-blue"type="checkbox" ></td>
                    <td><b>1</b></td>
                    <td >02:30:16 <br> 17/01/2018</td>
                    <td>0771234567</td>
                    <td>First Message sent to this</td>
                    <td><span class="label label-primary">Delivered</span></td>
                </tr>
                <tr>
                    <td><input class="icheckbox_flat-blue"type="checkbox" ></td>
                    <td><b>1</b></td>
                    <td >02:30:16 <br> 17/01/2018</td>
                    <td>0771234567</td>
                    <td>First Message sent to this</td>
                    <td><span class="label label-primary">Delivered</span></td>
                </tr>
                </tbody>
            </table>
            <!-- /.table -->
        </div>
        <!-- /.mail-box-messages -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer no-padding">
        <div class="mailbox-controls">
            <!-- Check all button -->
                   </div>
    </div>
</div>

        <?php   include(app_path().'/Includes/ScheduleMsg.php'); ?>


    </section>

@endsection
