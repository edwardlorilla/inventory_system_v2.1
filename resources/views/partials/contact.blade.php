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
