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
<div class="row">
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-cyan text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                <h6 class="text-white">User</h6>
                <h6 class="text-white"></h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-success text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                <h6 class="text-white">Admin</h6>
                <h6 class="text-white"></h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-warning text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                <h6 class="text-white">Evaluator</h6>
                <h6 class="text-white"></h6>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-md-6 col-lg-3">
        <div class="card card-hover">
            <div class="box bg-danger text-center">
                <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                <h6 class="text-white">Inovator</h6>
                <h6 class="text-white"></h6>
            </div>
        </div>
    </div>
</div>
<div class="row">
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title m-b-0">Profile</h4>
            </div>
            <div class="comment-widgets scrollable">
                <!-- Comment Row -->
                @foreach($admin as $admins)
                <div class="d-flex flex-row comment-row m-t-0">
                    <div class="p-2"><img src="{{asset('matrix/assets/images/users/1.jpg')}}" alt="user" width="50" class="rounded-circle"></div>
                    <div class="comment-text w-100">
                        <h5 class="font-weight-bold">{{$admins->name}}
                            <badge class="badge badge-success badge-sm">{{$admins->status}}</badge>
                        </h5>
                        <span class="m-b-15 d-block">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>{{$admins->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>NIP</td>
                                        <td>:</td>
                                        <td>{{$admins->nip}}</td>
                                    </tr>
                                    <tr>
                                        <td>Divisi</td>
                                        <td>:</td>
                                        <td>{{$admins->namadivisi}}</td>
                                    </tr>
                                    <tr>
                                        <td>Jabatan</td>
                                        <td>:</td>
                                        <td>{{$admins->jabatan}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </span>
                        <div class="comment-footer">
                            <a href="{{url('a_profile/'.$admins->id.'/edit')}}" class="btn btn-primary btn-sm">Edit</a>
                            <button type="button" class="btn btn-warning btn-sm">Ganti password</button>
                            {{csrf_field()}}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->

@endsection
