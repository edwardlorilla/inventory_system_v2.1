@extends('master.layout')
@section('title', ucfirst('equipments'))
@section('style')
    {!! Html::style('css/select2.min.css') !!}
@endsection
@section('content')



    <div id="tablewrapper" >
        <div id="tableheader">
            <div class="search">
                <select id="columns" onchange="sorter.search('query')"></select>
                <input type="text" id="query" onkeyup="sorter.search('query')" />
            </div>
            <span class="details">
                <div>Records <span id="startrecord"></span>-<span id="endrecord"></span> of <span id="totalrecords"></span></div>
                <div class="btn-reset"><a class="button blue" href="javascript:sorter.reset()">reset</a></div>
        	</span>
        </div>

        {{--Multiple Delete--}}
        {{--{!! Form::open(['id'=>'delete_form', 'method'=>'DELETE', 'route' => ['admin.equipment.delete'] ]) !!}--}}
        {{--<button type="submit" class="btn btn-danger" style="margin-bottom: 20px; margin-left: 20px;">Delete</button>--}}
        {{--{!! Form::close() !!}--}}

        <a data-toggle="modal" id="demo" href='#borrow' onclick="showSelectedValues();">Borrow</a>



        <div class="modal fade" id="borrow">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Modal title</h4>

                    </div>
                    <div class="modal-body">
                        {!! Form::open(['id'=>'delete_form', 'method'=>'POST',]) !!}

                        <div class="form-group has-feedback">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, ['class'=>'form-control'])!!}
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                            {{--{!! Form::select('borrows', $equipmentdrop , null , ['class' => 'select2-multi form-control', 'multiple'=>'multiple']) !!}--}}


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        {!! Form::submit('Borrow Item', ['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        {{--End Multiple Delete--}}
        <section>
            <table cellpadding="0" cellspacing="0" border="0" id="table" class="tinytable">
                <thead>
                <tr>
                    {{--checkbox for multiple delete--}}
                    <th class="nosort"><h3><input type="checkbox" id="checkAll"></h3></th>
                    {{--end checkbox for multiple delete--}}
                    <th class="nosort"><h3>ID</h3></th>
                    <th><h3>Name</h3></th>
                    <th><h3>Email</h3></th>
                    {{--<th><h3>Created at</h3></th>--}}
                    {{--<th><h3>Updated at</h3></th>--}}
                </tr>
                </thead>
                <tbody>
                @if($equipments)
                    @foreach($equipments as $equipment)



                        <tr>

                            <td><input type="checkbox" id="checkbox" class="checkboxs" name="borrows[]" value="{{$equipment->id}}" form="delete_form"></td>
                            <td>{{$equipment->id}}</td>

                            <td>{{$equipment->name}}</td>
                            <td><a href="#" class="button-email" title="{{$equipment->description}}">{{$equipment->description}}</a></td>

                            {{--<td>{{$equipment->created_at->diffForHumans()}}</td>--}}
                            {{--<td>{{$equipment->updated_at->diffForHumans()}}</td>--}}
                        </tr>


                    @endforeach
                @endif

                </tbody>
            </table>
        </section>

    </div>

    @include('partials.contact')

@endsection
@section('script')
    {{--{!! Html::script('js/select2.min.js') !!}--}}
    {{--<script type="text/javascript">--}}
        {{--$('.select2-multi').select2();--}}
{{--//        var checkedValue = $('[name="borrows[]"]:checked').val();--}}
{{--//        $(document).ready(function() {--}}
{{--//            $('[name="borrows[]"]').click(function() {--}}
{{--//                if ($('[name="borrows[]"]').is(":checked") > 0) {--}}
{{--//                    var checkedValue = $('[name="borrows[]"]:checked').val();--}}
{{--//--}}
{{--//                    $('.select2-multi').select2().val(checkedValue).trigger('change');--}}
{{--//--}}
{{--//                } else {--}}
{{--//                    alert("Checkbox is not checked");--}}
{{--//                }--}}
{{--//            });--}}
{{--//        });--}}

{{--$(document).ready(function () {--}}
    {{--$("#borrow").click(function(){--}}
        {{--var selectedLanguage = new Array();--}}
        {{--$('input[name="borrows[]"]:checked').each(function() {--}}
            {{--selectedLanguage.push(this.value);--}}
        {{--});--}}
        {{----}}

        {{--$('.select2-multi').select2().val(selectedLanguage).trigger('change');--}}
        {{--//alert("Number of selected Languages: "+selectedLanguage.length+"\n"+"And, they are: "+selectedLanguage);--}}
    {{--});--}}
{{--});--}}

    {{--</script>--}}

@endsection
