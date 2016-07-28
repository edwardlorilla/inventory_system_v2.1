@extends('master.layout')
@section('title', 'equipments')
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
        <section>
            <table cellpadding="0" cellspacing="0" border="0" id="table" class="tinytable">
                <thead>
                <tr>
                    <th class="nosort"><h3>ID</h3></th>
                    <th><h3>Name</h3></th>
                    <th><h3>Email</h3></th>
                    <th><h3>Action</h3></th>
                    {{--<th><h3>Created at</h3></th>--}}
                    {{--<th><h3>Updated at</h3></th>--}}
                </tr>
                </thead>
                <tbody>
                @if($equipments)
                    @foreach($equipments as $equipment)
                        <tr>
                            <td>{{$equipment->id}}</td>

                            <td>{{$equipment->name}}</td>
                            <td><a href="#" class="button-email" title="{{$equipment->description}}">{{$equipment->description}}</a></td>
                            <td><a data-toggle="modal" href='#borrow-{{$equipment->id}}'>Borrow</a></td>

                            {{--<td>{{$equipment->created_at->diffForHumans()}}</td>--}}
                            {{--<td>{{$equipment->updated_at->diffForHumans()}}</td>--}}
                        </tr>
                        <div class="modal fade" id="borrow-{{$equipment->id}}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Modal title</h4>

                                    </div>
                                    <div class="modal-body">
                                        {!! Form::open(['method'=>'POST', 'action'=>['AdminBorrowsController@postBorrow', $equipment->id ]]) !!}
                                        <div class="form-group has-feedback">
                                            {!! Form::label('name', 'Name') !!}
                                            {!! Form::text('name', null, ['class'=>'form-control'])!!}
                                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        {!! Form::submit('Borrow Item', ['class'=>'btn btn-primary']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    @endforeach
                @endif

                </tbody>
            </table>
        </section>
        <div id="tablefooter">
            <div id="tablenav">
                <div>
                    <img src="images/first.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" />
                    <img src="images/previous.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" />
                    <img src="images/next.gif" width="16" height="16" alt="First Page" onclick="sorter.move(1)" />
                    <img src="images/last.gif" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" />
                </div>
                <div>
                    <select  id="pagedropdown"></select>
                </div>
                <div class="btn-reset"><a class="button blue" href="javascript:sorter.showall()">view all</a>
                </div>
            </div>
            <div id="tablelocation">
                <div>
                    <select onchange="sorter.size(this.value)">
                        <option value="5">5</option>
                        <option value="10" selected="selected">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span class="txt-page">Entries Per Page</span>
                </div>


                <div class="page txt-txt">Page <span id="currentpage"></span> of <span id="totalpages"></span></div>
            </div>
        </div>
    </div>
    @include('partials.contact')

@endsection

