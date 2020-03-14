<!DOCTYPE html>
<!-- Template by Quackit.com -->
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license.
Although you can use them, for a more unique website, replace these images with your own. -->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>SIMPKL</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('welcome/images/logowebip.ico')}}">

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('welcome/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="{{asset('welcome/css/custom.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('matrix/assets/libs/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('matrix/assets/libs/jquery-minicolors/jquery.minicolors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('matrix/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('matrix/assets/libs/quill/dist/quill.snow.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>

    <!-- Navigation -->
    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                  <img src="{{asset('welcome/images/logoIP.png')}}" alt="" width="50%">
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{route('login')}}" ><b>Login Pekerja</b></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{ route('peserta-login') }}" ><b>Login PKL</b></a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

	<!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <a href="{{route('peserta.register')}}" class="btn btn-danger btn-lg align-content-center">Daftar!</a>
            </div>
        </div>
    </header>



</body>


	<!-- Footer -->


<!-- jQuery -->
    <script src="{{asset('welcome/js/jquery-1.11.3.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('welcome/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('welcome/js/jquery.easing.min.js')}}"></script>

    <!-- Custom Javascript -->
    <script src="{{asset('welcome/js/custom.js')}}"></script>
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('matrix/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('matrix/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('matrix/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('matrix/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('matrix/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('matrix/dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{asset('matrix/assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('matrix/dist/js/pages/chart/chart-page-init.js')}}"></script>

    <!-- table -->
    <script src="{{asset('matrix/assets/extra-libs/multicheck/datatable-checkbox-init.js')}}"></script>
    <script src="{{asset('matrix/assets/extra-libs/multicheck/jquery.multicheck.js')}}"></script>
    <script src="{{asset('matrix/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

    <!-- Forms -->
    <script src="{{asset('matrix/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
    <script src="{{asset('matrix/dist/js/pages/mask/mask.init.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/select2/dist/js/select2.min.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/jquery-asColor/dist/jquery-asColor.min.js')}}"></script>
    <script src="{{asset('/assets/libs/jquery-asGradient/dist/jquery-asGradient.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/jquery-minicolors/jquery.minicolors.min.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/quill/dist/quill.min.js')}}"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
            //
            // Dear reader, it's actually very easy to initialize MiniColors. For example:
            //
            //  $(selector).minicolors();
            //
            // The way I've done it below is just for the demo, so don't get confused
            // by it. Also, data- attributes aren't supported at this time...they're
            // only used for this demo.
            //
            $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
    <!-- START SCRIPTS table-->
    <!-- START PLUGINS -->
    <script type="text/javascript" src="{{asset('joli/js/plugins/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('joli/js/plugins/jquery/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('joli/js/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <!-- END PLUGINS -->

    <!-- START THIS PAGE PLUGINS-->
    <script type="text/javascript" src="{{asset('joli/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('joli/js/demo_tables.js')}}"></script>
    <!-- END THIS PAGE PLUGINS-->

    <!-- START TEMPLATE -->

    <script type="text/javascript" src="{{asset('joli/js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('joli/js/actions.js')}}"></script>
    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->


</html>
