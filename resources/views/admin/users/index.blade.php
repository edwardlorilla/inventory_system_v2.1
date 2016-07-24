@extends('master.layout')
@section('title', 'Users')
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
    <div id="modal">
        <div id="heading" class="heading-color">
            For more info send me an email
        </div>

        <div id="content">
            <div class="txt-subject">
                <p style="margin-left:10px;">Subject: </p></div>
            <div class="content-subject">
                <input type="text"/></div>
            <div class="txt-email">
                <p style="margin-left:10px;">Email: </p></div>
            <div class="content-email">
                <p id="email" style=" color:#464747; font:12px;"></p></div>
            <div class="txt-message"><p>Message: </p></div>
            <div class="content-message">
                <textarea style="width:100%;background-color:#f7fbfe; margin-left:10px; height:100px;"></textarea></div>
            <div class="contact-img"><img src="images/email.png" class="img-contact" alt=""/></div>

            <div style="margin: 0 0 0 10px;"><a href="#" class="button blue position">Send</a></div>
        </div>
    </div>
@endsection

