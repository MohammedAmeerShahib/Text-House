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


        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
    @endif



                    <div class="col-sm-2" style="margin-top: 4%;margin-bottom: 2%">
            <button id="createEnterprise" type="button"  class="btn btn-block btn-success " data-toggle="modal" data-target=".bs-modal-ce">
                <i class="glyphicon glyphicon-plus"></i>
                <b>&nbsp;&nbsp;CREATE</b>
            </button>

        </div>


        
        <table id="SMS" class="table table-bordered table-hover dataTable" role="grid">
            <thead>
            <tr role="row">
                <th>Number</th>
                <th >Enterprise Name</th>
                <th>Contact Number</th>
                <th >Email</th>
                <th >Address</th>
                <th >Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($enterprises as $enterprise)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $enterprise->EnterpriseName}}</td>
                <td>{{ $enterprise->EnterpriseContactnumber}}</td>
                <td>{{ $enterprise->EnterpriseEmail}}</td>
                <td>{{ $enterprise->EnterpriseAddress}}</td>
                <td>
                    <a href="{{ route('enterprise.edit',$enterprise) }}" class="btn btn-sm btn-primary"  title="Edit" ><i class="glyphicon glyphicon-pencil"></i> Edit  </a>
                    <a href="{{ route('enterprise.reserve',$enterprise) }}" class="btn btn-sm btn-success"  title="Reserve" ><i class="glyphicon glyphicoen-pencil"></i> Reserve  </a>
                    <button type="button" data-target="#myModal" data-toggle="modal" data-tooltip="tooltip" class="btn btn-success glyphicon glyphicon-transfer registerBtn"  data_value="{{ $enterprise }}"></button>

                </td>
            </tr>
            @endforeach

            </tbody>
        </table>


    {!! $enterprises->links() !!}

</section>


@include('enterprise.addEnterprise')
@include('SampleModel')
@endsection

@if ($errors->any())

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>

        $(function($) {

            $('#createEnterprise\n').click();
        })

    </script>

@endif

