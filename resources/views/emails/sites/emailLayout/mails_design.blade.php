<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('welcome/images/logowebip.ico')}}">
    <title>SIMPKL</title>
    <!-- Custom CSS -->
    <link href="{{asset('matrix/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body onload="cetakSuratKeterangan()">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" >
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    @include('emails.sites.emailLayout.mails_header')
    <div class="page-wrapper" style="margin-left: 0px">
        <div class="container-fluid">
            @yield('content')
        </div>
        @include('emails.sites.emailLayout.mails_footer')
    </div>
</div>
<script src="{{asset('matrix/assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('matrix/dist/js/custom.min.js')}}"></script>
<script type="text/javascript">
    setTimeout(function cetakSuratKeterangan() {window.print();},500);
    window.onfocus = function ()  {
        setTimeout(function cetakSuratKeterangan() {
            window.close();},500);
    }
</script>
</body>
</html>

