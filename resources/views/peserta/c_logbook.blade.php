@extends('peserta.pesertaLayout.peserta_design')
@section('content')
<div class="container-fluid">
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <div class="card shadow-sm" style="border-radius:10px!important;">
        <div class="card-body">
            <h4 class="card-title">Buat Logbook</h4>
            <form action="{{route('logbook.store')}}" method="post">
                {{csrf_field()}}
                <label for="lokasi">Lokasi</label>
                <input id="lokasi" name="lokasi" type="text" class="required form-control" required>
                <label class="m-t-15">Tanggal</label>
                <div class="input-group">
                    <input type="text" name="tanggal" class="form-control" id="datepicker-autoclose" placeholder="YYYY / mm /dd" required>
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                </div>
                <label for="uraian">Uraian</label>
                <input id="uraian" name="uraian" type="text" class="required form-control" required>
                <div class="border-top">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary">Tambah</button>
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

    <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->

    @endsection
