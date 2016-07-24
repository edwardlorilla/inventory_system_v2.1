<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    {!! Html::script('js/modernizr.custom.63321.js') !!}
    {!! Html::style('css/styleResp.css') !!}
    {!! Html::style('css/stylesContact.css') !!}
</head>
<body>

@yield('content')
<!--- Pannel Contact-->
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
<!---End Pannel Contact-->
@yield('script')
</body>
</html>