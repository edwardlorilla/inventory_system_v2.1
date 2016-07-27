<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->


    {!! Html::script('js/modernizr.custom.63321.js') !!}
    {!! Html::style('css/styleResp.css') !!}
    {!! Html::style('css/stylesContact.css') !!}

    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('dist/css/AdminLTE.min.css') !!}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    {!! Html::script('js/bootstrap.min.js') !!}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
{!! Html::style('dist/css/skins/skin-blue.min.css') !!}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!--
        BODY TAG OPTIONS:
                =================
                        Apply one or more of the following classes to get the
                                desired effect
                                        |---------------------------------------------------------|
                                                | SKINS         | skin-blue                               |
                                                        |               | skin-black                              |
                                                                |               | skin-purple                             |
                                                                        |               | skin-yellow                             |
                                                                                |               | skin-red                                |
                                                                                        |               | skin-green                              |
                                                                                                |---------------------------------------------------------|
                                                                                                        |LAYOUT OPTIONS | fixed                                   |
                                                                                                                |               | layout-boxed                            |
                                                                                                                        |               | layout-top-nav                          |
                                                                                                                                |               | sidebar-collapse                        |
                                                                                                                                        |               | sidebar-mini                            |
                                                                                                                                                |---------------------------------------------------------|
                                                                                                                                                        -->
<body class="hold-transition skin-blue sidebar-mini">
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Inventory System</a>
        </div>
        <ul class="nav navbar-nav">


            <li class="{{ Request::is('admin/users') ? 'active' : '' }}"><a href="{{route('admin.users..index')}}">Users</a></li>
            <li class="{{ Request::is('admin/equipments') ? 'active' : '' }}"><a href="{{route('admin.equipments..index')}}">Equipments</a></li>
            <li class="{{ Request::is('admin/borrows') ? 'active' : '' }}"><a href="{{route('admin.borrows.index')}}">Borrows</a></li>
        </ul>
    </div>
</nav>
<section class="content">

            @yield('content')
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

        </section><!-- /.content -->

<!-- REQUIRED JS SCRIPTS -->
{!! Html::script('plugins/jQuery/jQuery-2.1.4.min.js') !!}
{!! Html::script('dist/js/app.min.js') !!}
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
@yield('script')
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
</body>
</html>
