<div id="tablefooter">
    <div id="tablenav">
        <div>
            <img src="{{URL::asset('images/first.gif')}}" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" />
            <img src="{{URL::asset('images/previous.gif')}}" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" />
            <img src="{{URL::asset('images/next.gif')}}" width="16" height="16" alt="First Page" onclick="sorter.move(1)" />
            <img src="{{URL::asset('images/last.gif')}}" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" />
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
 {!! Html::script('js/script.js') !!}
    <script type="text/javascript">
        var sorter = new TINY.table.sorter('sorter','table',{
            headclass:'head',
            ascclass:'asc',
            descclass:'desc',
            evenclass:'evenrow',
            oddclass:'oddrow',
            evenselclass:'evenselected',
            oddselclass:'oddselected',
            paginate:true,
            size:10,
            colddid:'columns',
            currentid:'currentpage',
            totalid:'totalpages',
            startingrecid:'startrecord',
            endingrecid:'endrecord',
            totalrecid:'totalrecords',
            hoverid:'selectedrow',
            pageddid:'pagedropdown',
            navid:'tablenav',
            sortcolumn:1,
            sortdir:1,
            columns:[{index:7, format:'%', decimals:1},{index:8, format:'$', decimals:0}],
            init:true
        });
    </script>
    <!--Script Open Pannel--->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    {!! Html::script('js/jquery.reveal.js') !!}

    <script type="text/javascript">
        $(document).ready(function () {
            $('.button-email').click(function (e) { // Button which will activate our modal
                var title = $(this).attr('title');
                var title2 = $('.name').attr('title');
                document.getElementById("email").innerHTML = title.toString();
                $('#modal').reveal({ // The item which will be opened with reveal
                    animation: 'fade',                   // fade, fadeAndPop, none
                    animationspeed: 600,                       // how fast animtions are
                    closeonbackgroundclick: true,              // if you click background will modal close?
                    dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
                });
                return false;
            });
        });
    </script>
