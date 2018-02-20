@extends('UserLayout')
@section('content')



    <section class="content-header">
        <h1>
            Individual Messege
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
                        <b>&nbsp;&nbsp;COMPOSE MESSAGE</b>
                    </button>
                </h3>


                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button type="button" class="btn btn-default btn-sm "><input type="checkbox" class="icheckbox_flat-blue">
                    </button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>

                    <!-- /.btn-group -->

                </div>

                <div class="table-responsive col-md-12">
                    <table id="singleMsg" class="table table-hover table-striped no-margin">

                    <thead>
                        <tr>
                            <th></th>
                            <th>Sent At</th>
                            <th>Receiver</th>
                            <th>Message</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        {{--<tbody>--}}
                        {{--@foreach ($singleMSgs as $singleMSg)--}}
                            {{--<tr>--}}
                            {{--<td><input class="icheckbox_flat-blue"type="checkbox" ></td>--}}
                            {{--<td>{{ ++$i }}</td>--}}
                            {{--<td >{{$singleMSg->MessageTimeStamp}}</td>--}}
                            {{--<td>{{$singleMSg->MessageReceiver}}</td>--}}
                            {{--<td>{{$singleMSg->SentMessage}}</td>--}}

                                {{--@if($singleMSg->Status.equalToIgnoringCase("Delivered"))--}}
                            {{--<td><span class="label label-primary">Delivered</span></td>--}}
                                    {{--@else--}}
                                    {{--<td><span class="label label-primary">Undelivered</span></td>--}}
                                    {{--@endif--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}

                        {{--</tbody>--}}
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
    </section>

@include('message.ComposeSingleMessage')


@endsection

@push('scripts')
    <script>
        $(function() {

            console.log("Came");
            $('#singleMsg').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('singleMsg.data') !!}',
                columns: [
                    {data: 'checkbox', name: 'checkbox', orderable: false, searchable: false},
                    { data: 'MessageTimeStamp', name: 'MessageTimeStamp' },
                    { data: 'MessageReceiver', name: 'MessageReceiver' },
                    { data: 'SentMessage', name: 'SentMessage' },
                    { data: 'Status', name: 'Status' },
                ]

            });
        });
    </script>
@endpush
