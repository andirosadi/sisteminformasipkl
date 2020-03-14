@extends('mentor.mentorLayout.mentor_design')
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
                <!-- <link href="../../dist/css/style.min.css" rel="stylesheet"> -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm" style="border-radius: .40rem!important">
                <form action="{{url('m_logbook/'.$logbook->id)}}" method="post" class="form-horizontal">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="card-body">
                        <h4 class="card-title">Status Logbook</h4>
                        <div class="form-group row">
                            <label for="lokasi" class="col-sm-3 text-right control-label col-form-label">Lokasi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="lokasi" name="lokasi"  value="{{$logbook->lokasi}}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal" class="col-sm-3 text-right control-label col-form-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="tanggal" name="tanggal" value="{{$logbook->tanggal}}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="uraian" class="col-sm-3 text-right control-label col-form-label">Uraian</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="uraian" name="uraian" value="{{$logbook->uraian}}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="status" class="col-sm-3 text-right control-label col-form-label">Status Logbook</label>
                            <div class="col-md-9">
                                <select class="select2 form-control custom-select" id="status" name="status" value="{{$logbook->status}}" style="width: 100%; height:36px;">
                                    <option>{{$logbook->status}}</option>
                                    <optgroup label="Hak Akses">
                                        <option value=1>Disetujui</option>
                                        <option value=2>Ditolak</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
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

        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->

@endsection
