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
<div class="row">
    <!-- Mentor -->
    <div class="col-md-6 col-lg-12 col-xlg-">
        <div class="card card-hover" style="background-color: transparent">
            <div class="box bg-success text-center" style="border-radius:10px!important">
                <img src="{{asset('matrix/assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="45">
                <hr>
                <h5 class="text-white">{{ Auth::user()->name }}</h5>
                @foreach($mentor as $mentors)
                <h6 class="text-white">Mentor Divisi {{$mentors->namadivisi}}</h6>
                @endforeach
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
        <div class="card shadow-sm" style="border-radius:10px!important">
            <div class="card-body">
                <div class="table-responsive">
                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="font-weight-bold" style="text-align: center">Detail</h5>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            @foreach($mentor as $mentors)
                            <div class="col-sm-12">
                                <span class="m-b-15 d-block">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td>{{$mentors->email}}</td>
                                            </tr>
                                            <tr>
                                                <td>NIP</td>
                                                <td>:</td>
                                                <td>{{$mentors->nip}}</td>
                                            </tr>
                                            <tr>
                                                <td>Divisi</td>
                                                <td>:</td>
                                                <td>{{$mentors->namadivisi}}</td>
                                            </tr>
                                            <tr>
                                                <td>Jabatan</td>
                                                <td>:</td>
                                                <td>{{$mentors->jabatan}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </span>
                                <div class="comment-footer">
                                    <a href="{{url('m_profile/'.$mentors->id.'/edit')}}" class="btn btn-primary btn-sm">Edit</a>
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
