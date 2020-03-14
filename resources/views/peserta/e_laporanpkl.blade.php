@extends('peserta.pesertaLayout.peserta_design')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <!-- <div class="container-fluid">
      @if (session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
      @endif -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <link href="{{asset('matrix/assets/libs/jquery-steps/jquery.steps.css')}}" rel="stylesheet">
                <link href="{{asset('matrix/assets/libs/jquery-steps/steps.css')}}" rel="stylesheet">
                <!-- <link href="../../dist/css/style.min.css" rel="stylesheet"> -->
                <div class="card shadow-sm" style="border-radius:.40rem!important;">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Edit Laporan PKL</h4>
                        <h6 class="card-subtitle"></h6>
                        <form action="{{url('lihatlaporan/'.$laporanpkl->id)}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div>
                                <section>
                                    <label for="judul">Judul</label>
                                    <input id="judul" name="judul" type="text" class="required form-control" value="{{$laporanpkl->judul}}" required>
                                    <div class="card">
                                        <div class="card-body">
                                            <div for="laporan" class="card-title">Laporan PKL
                                            <P><input type="file" class="form-control-file" id="laporan" name="laporan" required></P>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('matrix/assets/libs/quill/dist/quill.min.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('matrix/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('matrix/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('matrix/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('matrix/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('matrix/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('matrix/dist/js/custom.min.js')}}"></script>
    <!-- this page js -->
    <script src="{{asset('matrix/assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <!-- <script>
        // Basic Example with form
    // var form = $("#example-form");
    // form.validate({
    //     errorPlacement: function errorPlacement(error, element) { element.before(error); },
    //     rules: {
    //         confirm: {
    //             equalTo: "#password"
    //         }
    //     }
    // });
    //  form.children("div").steps({
    //     headerTag: "h3",
    //     bodyTag: "section",
    //     transitionEffect: "slideLeft",
    //     onStepChanging: function(event, currentIndex, newIndex) {
    //         form.validate().settings.ignore = ":disabled,:hidden";
    //         return form.valid();
    //     },
    //     onFinishing: function(event, currentIndex) {
    //         form.validate().settings.ignore = ":disabled";
    //         return form.valid();
    //     },
    //     onFinished: function(event, currentIndex) {
    //         alert("Submitted!");
    //     }
    // });
    // </script> -->
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->

@endsection
