@extends('admin.adminLayout.admin_design')
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
   <div class="col-12">
       <div class="card shadow-sm" style="border-radius:10px!important;">
           <div class="card-body">
               @if(session('success'))
                   <div class="alert alert-success">
                       {{ session('success') }}
                   </div>
               @endif
               <div class="wizard-content">
                   <div class="row">
                       <div class="col-sm-12">
                           <h4 class="card-title">Buat Mentor</h4>
                       </div>
                   </div>
               <form action="{{route('mentor.store')}}" method="post">
               {{csrf_field()}}
                   <section>
                       <div class="form-group row">
                           <div class="col-sm-12 col-md-6">
                               <label for="name">Nama</label>
                               <input id="name" name="name" type="text" class="required form-control">
                           </div>
                           <div class="col-sm-12 col-md-6">
                               <label for="nip">NIP</label>
                               <input id="nip" name="nip" type="number" class="required form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <div class="col-sm-12">
                               <label for="email">Email</label>
                               <input id="email" name="email" type="email" class="required form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <div class="col-sm-12 col-md-6">
                               <label for="divisi_id">Divisi</label>
                                   <select class="select2 form-control custom-select" id="divisi_id" name="divisi_id">
                                       <option></option>
                                       <optgroup label="Divisi">
                                           <option value=1>SDM & Humas</option>
                                           <option value=2>SIS</option>
                                           <option value=3>Keuangan</option>
                                           <option value=4>Managerial Operasi Unit 1 - 4</option>
                                           <option value=5>Managerial Operasi Unit 5 - 7</option>
                                           <option value=6>Managerial Pemeliharaan Unit 1 - 4</option>
                                           <option value=7>Managerial Pemeliharaan Unit 5 - 7</option>
                                       </optgroup>
                                   </select>
                           </div>
                           <div class="col-sm-12 col-md-6">
                               <label for="jabatan">Jabatan</label>
                               <input id="jabatan" name="jabatan" type="text" class="required form-control">
                           </div>
                       </div>
                       <div class="form-group row">
                           <div class="col-sm-12 col-md-6">
                               <label for="password">{{ __('Password') }}</label>
                               <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                               @if ($errors->has('password'))
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                               @endif
                           </div>
                           <div class="col-sm-12 col-md-6">
                               <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                           </div>
                       </div>
                   </section>
                   <div class="row">
                       <div class="col-sm-12" align="right">
                           <button type="submit" class="btn btn-primary">Submit</button>
                       </div>
                   </div>
               </form>
               </div>
           </div>
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
