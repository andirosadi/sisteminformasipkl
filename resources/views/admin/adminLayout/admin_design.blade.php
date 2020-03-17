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
    <link href="{{asset('matrix/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('matrix/dist/css/style.min.css')}}" rel="stylesheet">
    <!-- For table-->
    <link rel="stylesheet" type="text/css" href="{{asset('matrix/assets/extra-libs/multicheck/multicheck.css')}}">
    <link href="{{asset('matrix/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!-- for forms -->
    <link rel="stylesheet" type="text/css" href="{{asset('matrix/assets/libs/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('matrix/assets/libs/jquery-minicolors/jquery.minicolors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('matrix/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('matrix/assets/libs/quill/dist/quill.snow.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <link rel="stylesheet" href="{{asset('matrix/assets/libs/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper" style="font-family: 'Product Sans'">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('admin.adminLayout.admin_header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('admin.adminLayout.admin_sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                </div>
            </div>
            <div class="container-fluid">
                @yield('content')
            </div>
            @include('admin.adminLayout.admin_footer')
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->

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
    <script>
        $('#exampleModalCenter3').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('eventid')
            var modal = $(this)
            modal.find('.modal-body #eventid').val(id)
        })
    </script>
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

    <script src="{{asset('matrix/assets/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script>
        $(function() {
            $('#datetimepicker-autoclose').datetimepicker({
                useCurrent: true,
                collapse: true,
                format: 'YYYY/MM/DD HH:mm'
            });
        });
    </script>
</body>

</html>
