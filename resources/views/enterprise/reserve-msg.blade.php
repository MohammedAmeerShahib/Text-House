@extends('AdminLayout')
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

    <!-- Main content -->
    <section style="background-color:white" class="content container-fluid">

        <div class="row">
            <div class="modal-header">
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                {{-- <h3 class="modal-title">Enterprise Form</h3>--}}
            </div>
            <form  class="form-horizontal" method="POST" action="{{ route('enterprise.updateBalance') }}">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="modal-body edit-content form">



                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Enterprise Name</label>
                            <div class="col-md-9">
                                <label  for="EnterpriseName" class="form-control" >{{$enterprise->EnterpriseName}}</label>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Dialog</label>
                            <div class="col-md-9">
                                <input id="dialog" name="dialog" placeholder="Dialog" class="form-control" type="text" required>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Mobitel</label>
                            <div class="col-md-9">
                                <input type ="text" id="mobitel" name="mobitel" placeholder="Mobitel" class="form-control" required>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Airtel</label>
                            <div class="col-md-9">
                                <input type ="text" id="airtel" name="airtel"  placeholder="Airtel" class="form-control"  required>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Etisalat</label>
                            <div class="col-md-9">
                                <input type ="text" id="etisalat" name="etisalat"  placeholder="Etisalat" class="form-control"  required>
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit"  class="btn btn-primary">Reserve</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>

                </div>

            </form>


        </div>
    </section>
@endsection



