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
    <div class="col-md-6 col-lg-12 col-xlg-3">
        <div class="card card-hover" style="background-color: transparent">
            <div class="box bg-success text-center" style="border-radius:10px!important">
                <h1 class="font-light text-white"><i class="mdi mdi-account-check"></i></h1>
                <h5 class="text-white">Data Peserta PKL</h5>
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
    <div class="col-12">
        <div class="card shadow-sm" style="border-radius:10px!important">
            <div class="card-body">
                <div class="table-responsive">
                    <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <h5 class="card-title m-b-0">Data Peserta PKL</h5>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="zero_config_filter" class="dataTables_filter">
                                    <input id="myInput" type="search" class="form-control form-control-sm" placeholder="search..." aria-controls="zero_config">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"><b>NO</b></th>
                                            <th scope="col"><b>Name</b></th>
                                            <th scope="col"><b>Email</b></th>
                                            <th scope="col"><b>NIM</b></th>
                                            <th scope="col"><b>Sekolah</b></th>
                                            <th scope="col"><b>Fakultas</b></th>
                                            <th scope="col"><b>Jurusan</b></th>
                                            <th scope="col"><b>Divisi</b></th>
                                            <th scope="col"><b>Status</b></th>
                                            <th scope="col"><b>Action</b>
                                                {{--<!-- <a href="{{route('admin.create')}}" class="btn btn-primary">Create</a> -->--}}
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        @if(count($admin) != 0)
                                        @foreach($admin as $key => $user)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->nim}}</td>
                                            <td>{{$user->sekolah}}</td>
                                            <td>{{$user->fakultas}}</td>
                                            <td>{{$user->jurusan}}</td>
                                            <td>{{$user->namadivisi}}</td>
                                            <td>
                                                @if($user->status_id == 1)
                                                    <i class="mdi mdi-check-circle" style="color: mediumseagreen">Aktif</i>
                                                    @elseif($user->status_id == 2)
                                                        <i class="mdi mdi-close-circle" style="color: red">Tidak Aktif</i>
                                                        @endif
                                            </td>
                                            <td>
                                                <div class="card-title m-b-1">
                                                    <form action="{{url('a_peserta/'.$user->id)}}" method="post">
                                                        <div class="btn-group btn-group-justified btn-group-vertical">
                                                            <a href="{{url('a_peserta/'.$user->id).'/edit'}}" class="btn btn-outline-info btn-sm">Edit</a>
                                                            <a href="{{route('idcard.show', $user->id)}}" class="btn btn-outline-primary btn-sm" target="_blank">Cetak ID Card</a>
                                                            <a href="{{route('sertifikat.show', $user->id)}}" class="btn btn-outline-success btn-sm" target="_blank">Cetak Sertifikat</a>
                                                            {{-- <a href="{{route('penerimaanPeserta.show', $user->id)}}" class="btn btn-outline-success btn-sm" target="_blank" >Surat Balasan</a>--}}
                                                            {{--<a href="{{url('resetpassword/'.$user->id).'/edit'}}" class="btn btn-primary btn-sm">Reset Password</a>--}}
                                                            {{csrf_field()}}
                                                            {{method_field('DELETE')}}
                                                            <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus Peserta PKL?');">Delete</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <h1>EMPTY</h1>
                                        @endif
                                    </tbody>
                                </table>
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
