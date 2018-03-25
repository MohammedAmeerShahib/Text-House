<!-- Bootstrap modal -->
<div class="modal fade listModal"  role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Quick View</h3>
                <div class="row" style="padding-left:2%">
                <button type="button" id="btnAdd"  class="fa fa-plus col-sm-1"  data-toggle="collapse" data-target="#contact"></button>

                <div id="contact" class="collapse" >


                                <div class="col-sm-3">
                                    <input id="NLNumber" type="text" class="form-control" name="NLNumber"  placeholder="Enter Number" required>

                                </div>

                                <button id="add-list" type="button"  class="btn btn-primary pull-left">Add</button>

                </div>
                    <div>
                        <form id="fr"  method="POST" action="{{ route('number-list.store') }}">
                            {{ csrf_field() }}
                    <input type="hidden" id="listId" name="listId">

                    <ul id="addList" class="list-group col-sm-offset-6 "  style="padding-right: 2%"></ul>
                            <button type="submit"  class="btn btn-primary ">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-body ">
                <div class="box box-primary">

                    <ul id="contactsList" class="list-group">
                    </ul>

                </div>

                </div>
            <div class="modal-footer">

                {{--<button type="button" id="btnSave" class="fa fa-plus pull-left" data-toggle="collapse" data-target="#contact"></button>--}}

                {{--<div id="contact" class="collapse" >--}}

                    {{--<form  class="form-horizontal" method="POST" action="{{ route('user-list.store') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-body">--}}

                            {{--<div class="form-group{{ $errors->has('NLNumber') ? ' has-error' : '' }}">--}}

                                {{--<div class="col-md-3">--}}
                                    {{--<input id="NLNumber" type="text" class="form-control" name="NLNumber" value="{{ old('NLNumber') }}" placeholder="Enter Number" required>--}}

                                    {{--@if ($errors->has('NLNumber'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('NLNumber') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}

                                {{--<button type="submit"  class="btn btn-primary pull-left">Save</button>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</form>--}}
                {{--</div>--}}
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->
@push('scripts')
<script>
$(function() {

    {{--var id =$('#NLNumber').val();--}}

    {{--$.ajax({--}}
        {{--type: "GET",--}}
        {{--url: '{!! route('number-list.show',6) !!}',--}}
        {{--success: function(response){--}}

            {{--for (var i = 0; i < response.length; i++) {--}}
                {{--console.log(response[i].NLNumber );--}}

                {{--$('<li class = "list-group-item" > ' + response[i].NLNumber +--}}
                    {{--'<span class="badge">5</span>'+--}}
                    {{--'</li>').appendTo('#contactsList');--}}

            {{--}--}}
        {{--},--}}
        {{--error: function(response){--}}
            {{--alert('Error'+response);--}}
        {{--}--}}
    {{--});--}}

    $("#add-list").click(function(){

         var input=$('#NLNumber').val();

         if(input) {
             $('<li class = "list-group-item" > ' + input +
                 '<input type="hidden" name="contacts[]" value="' + input + '" />'+
                 '</li>').appendTo('#addList');
             $('#NLNumber').val('');
         }
    });
});
</script>
@endpush




