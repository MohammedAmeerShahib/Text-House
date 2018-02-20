@extends('UserLayout')
@section('content')

    <section class="content-header">
        <h1>
            Sub-User Accounts
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
                    <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target=".bs-modal-cu">
                        <i class="glyphicon glyphicon-plus"></i>
                        <b>&nbsp;&nbsp;CREATE USER</b>
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

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($subUsers as $subUser)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td >{{$subUser->SubUserName}}</td>
                                <td >{{$subUser->created_at}}</td>
                                <td>{{$subUser->updated_at}}</td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                {!! $subUsers->links() !!}
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

    @include('user.createUser')


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
