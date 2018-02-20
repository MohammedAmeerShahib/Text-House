@extends('AdminLayout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Create User
	    </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->

    <section style="background-color:white" class="content container-fluid">

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissable">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table id="SMS" class="table table-bordered table-hover dataTable" role="grid" data-show-header="true" data-id-field="name" data-pagination="true" data-page-list="[5, 10, 25, 50, 100, ALL]" data-page-size="5"
               >
            <thead>
            <tr role="row">
                <th width="3%">#</th>
                <th data-field="name" width="20%">Enterprise Name</th>
                <th width="20%">Enterprise Email</th>
                <th width="20%">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($enterprises as $enterprise)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $enterprise->EnterpriseName}}</td>
                <td>{{ $enterprise->EnterpriseEmail}}</td>
                <td><a class="btn btn-sm btn-primary" href="{{ route('customer.edit',$enterprise->EnterpriseId) }}" title="Edit" ><i class="glyphicon glyphicon-user"></i>&nbsp Create Account  </a>

                </td>
            </tr>
            @endforeach
            </tbody>
        </table>


    </section>

@endsection
