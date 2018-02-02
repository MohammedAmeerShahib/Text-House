@extends('AdminLayout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->

    <section style="background-color:white" class="content container-fluid">




        {{--<div class="col-sm-2" style="margin-top: 4%;margin-bottom: 2%">--}}
            {{--<button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target=".bs-modal-sm">--}}
                {{--<i class="glyphicon glyphicon-plus"></i>--}}
                {{--<b>&nbsp;&nbsp;CREATE</b>--}}
            {{--</utton>--}}

        {{--</div>--}}
        <table id="SMS" class="table table-bordered table-hover dataTable" role="grid">
            <thead>
            <tr role="row">
                <th width="3%">#</th>
                <th width="20%">Enterprise Name</th>
                <th width="20%">Enterprise Email</th>
                <th width="20%">Action</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td>1</td>
                <td>02:04 04/01/2018</td>
                <td>Shipa</td>
                <td><a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" data-toggle="modal" data-target=".bs-modal-sm"><i class="glyphicon glyphicon-user"></i> Create Account  </a>

                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>02:01 04/01/2018</td>
                <td>Ameer</td>
                <td>A</td>
            </tr>
            <tr>
                <td>3</td>
                <td>04:01 04/01/2018</td>
                <td>Shipa</td>
                <td>1.8</td>
            </tr>
            <tr>
                <td>4</td>
                <td>04:01 04/02/2018</td>
                <td>Sajan</td>
                <td>1.9</td>
            </tr>
            <tr>
                <td>5</td>
                <td>04:01 04/02/2018</td>
                <td>AG</td>
                <td>1.8</td>
            </tr>
            </tbody>
        </table>


        <?php   include(app_path().'/Includes/EntCreateList.php'); ?>

    </section>

@endsection
