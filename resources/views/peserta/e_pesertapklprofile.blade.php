@extends('peserta.pesertaLayout.peserta_design')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm" style="border-radius:.40rem!important;">
            <form action="{{url('p_profile/'.$pesertapkl->id)}}" method="post" class="form-horizontal">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="card-body">
                    <h4 class="card-title">Edit Profile</h4>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name Here" value="{{$pesertapkl->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Here" value="{{$pesertapkl->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nim" class="col-sm-3 text-right control-label col-form-label">NIP</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="nim" name="nim" placeholder="Full Name Here" value="{{$pesertapkl->nim}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sekolah" class="col-sm-3 text-right control-label col-form-label">Instansi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="sekolah" name="sekolah" placeholder="Full Name Here" value="{{$pesertapkl->sekolah}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fakultas" class="col-sm-3 text-right control-label col-form-label">Fakultas</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="Full Name Here" value="{{$pesertapkl->fakultas}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jurusan" class="col-sm-3 text-right control-label col-form-label">Jurusan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Full Name Here" value="{{$pesertapkl->jurusan}}">
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
@endsection
