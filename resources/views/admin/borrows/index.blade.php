@extends('master.layout')
@section('title', ucfirst('borrows'))
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
                    <th><h3>Approved by</h3></th>
                    <th><h3>Items</h3></th>
                    <th><h3>Email</h3></th>
                    <th><h3>Equipment borrowed</h3></th>
                    {{--<th><h3>Updated at</h3></th>--}}
                </tr>
                </thead>
                <tbody>
                @if($borrows)
                    @foreach($borrows as $borrow)
                        <tr>
                            <td>{{$borrow->id}}</td>

                            <td>{{$borrow->user->name}}</td>
                            <td>{{$borrow->name}}</td>
                            <td><a href="#" class="button-email" title="{{$borrow->description}}">{{$borrow->description}}</a></td>
                            <td>
                                @foreach($borrow->equipments as $equipment)
                                    <span class="label label-default">{{$equipment->name}}</span>
                                @endforeach
                            </td>

                            {{--<td>{{$borrow->updated_at->diffForHumans()}}</td>--}}
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </section>

    </div>
    @include('partials.contact')

@endsection

