@extends('UserLayout')
@section('content')

<section class="content-header">
    <h1>
        User List
        <small>Optional description</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol>
</section>

<section class="content container-fluid">

    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissable">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">
                <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target=".modal-individualMsg">
                    <i class="glyphicon glyphicon-plus"></i>
                    <b>&nbsp;&nbsp;CREATE LIST</b>
                </button>
            </h3>


            <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">

            <div class="table-responsive col-md-12">
                <table id="userList" class="table table-hover table-striped no-margin">

                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Created At</th>
                        <th>Last Updated</th>
                        <th>List Size</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($userLists as $userList)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td >{{$userList->ListName}}</td>
                        <td >{{$userList->created_at}}</td>
                        <td>{{$userList->updated_at}}</td>
                        <td>{{$userList->ListSize}}</td>
                        <td><a class="btn btn-sm btn-success" href="javascript:void(0)" title="Hapus" ><i class="glyphicon glyphicon-envelope"></i> View  </a>
                            <a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" ><i class="glyphicon glyphicon-pencil"></i> Edit  </a>
                            <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" ><i class="glyphicon glyphicon-trash"></i> Delete  </a>
                        </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>

            {!! $userLists->links() !!}
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
</section>

{{--@include('message.ComposeSingleMessage')--}}


@endsection

{{--@push('scripts')--}}
{{--<script>--}}
    {{--$(function() {--}}

        {{--console.log("Came");--}}
        {{--$('#userList').DataTable({--}}

        {{--]--}}

    {{--});--}}
    {{--});--}}
{{--</script>--}}
{{--@endpush--}}
