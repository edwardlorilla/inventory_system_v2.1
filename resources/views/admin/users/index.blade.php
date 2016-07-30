@extends('master.layout')
@section('title', ucfirst('Users'))
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
                    {{--<th><h3>Created at</h3></th>--}}
                    {{--<th><h3>Updated at</h3></th>--}}
                </tr>
                </thead>
                <tbody>
                @if($users)
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>

                            <td>{{$user->name}}</td>
                            <td><a href="#" class="button-email" title="{{$user->email}}">{{$user->email}}</a></td>
                            {{--<td>{{$user->created_at->diffForHumans()}}</td>--}}
                            {{--<td>{{$user->updated_at->diffForHumans()}}</td>--}}
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </section>

    </div>
    @include('partials.contact')

@endsection

