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
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <button type="button" id="listBtn" class="btn btn-block btn-success" data-toggle="collapse"
                            data-target="#list">
                        <i class="glyphicon glyphicon-plus"></i>
                        <b>&nbsp;&nbsp;CREATE LIST</b>
                    </button>


                </h3>

                <div id="list" class="collapse" style="padding-top: 1%">

                    <form class="form-horizontal" method="POST" action="{{ route('user-list.store') }}">
                        {{ csrf_field() }}

                        <div class="form-body">

                            <div class="form-group{{ $errors->has('ListName') ? ' has-error' : '' }}">

                                <div class="col-md-3">
                                    <input id="ListName" type="text" class="form-control" name="ListName"
                                           value="{{ old('ListName') }}" placeholder="Enter List Name" required>

                                    @if ($errors->has('ListName'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('ListName') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">Save</button>

                            </div>

                        </div>

                    </form>
                </div>
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
                                <td>{{$userList->ListName}}</td>
                                <td>{{$userList->created_at}}</td>
                                <td>{{$userList->updated_at}}</td>
                                <td>{{$userList->ListSize}}</td>
                                <td>
                                    <button class="btn btn-sm btn-success vwmodal" data-toggle="modal"
                                            data-id={{$userList->ListId}} ><i class="glyphicon glyphicon-envelope"></i>
                                        View
                                    </button>
                                    <a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit"><i
                                                class="glyphicon glyphicon-pencil"></i> Edit </a>
                                    <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus"><i
                                                class="glyphicon glyphicon-trash"></i> Delete </a>
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

    @include('userList.viewList')


@endsection

@push('scripts')

    <script>

        $(function ($) {

            @if ($errors->any())
            $('#listBtn').click();
            @endif

            $(".vwmodal").click(function () { // Click to only happen on announce links
               $("#listId").val($(this).data('id'));

                var id =$(this).data('id');
                // var id2 = $('#NLNumber').val();
                var url='{!! route('number-list.show',':id') !!}';
                url = url.replace(':id', id);
                console.log(id);
                $.ajax({
                    type: "GET",
                    url: url,
                    success: function (response) {

                        for (var i = 0; i < response.length; i++) {
                            console.log(response[i].NLNumber);

                            $('<li class = "list-group-item" > ' + response[i].NLNumber +
                                '<span class="badge">5</span>' +
                                '</li>').appendTo('#contactsList');

                        }
                    },
                    error: function (response) {
                        alert('Error' + response);
                    }
                });

                $('.listModal').modal('show');
            });


        })

    </script>
@endpush



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
