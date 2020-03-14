@extends('admin.adminLayout.admin_design')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm" style="border-radius:10px!important;">
            <form action="{{url('a_peserta/'.$peserta->id)}}" method="post" class="form-horizontal">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="card-body">
                    <h5 class="card-title">Edit Peserta PKL</h5>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name Here" value="{{$peserta->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nim" class="col-sm-3 text-right control-label col-form-label">NIM</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="Full Name Here" value="{{$peserta->nim}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Here" value="{{$peserta->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sekolah" class="col-sm-3 text-right control-label col-form-label">Sekolah/Universitas</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="sekolah" name="sekolah" placeholder="Sekolah/Universitas" value="{{$peserta->sekolah}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fakultas" class="col-sm-3 text-right control-label col-form-label">Fakultas</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="Fakultas" value="{{$peserta->fakultas}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jurusan" class="col-sm-3 text-right control-label col-form-label">Jurusan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan" value="{{$peserta->jurusan}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="divisi" class="col-sm-3 text-right control-label col-form-label">Divisi</label>
                        <div class="col-md-9">
                            <select class="select2 form-control custom-select" id="divisi" name="divisi_id" value="{{$peserta->divisi_id}}" style="width: 100%; height:36px;">
                                <option>{{$peserta->divisi_id}}</option>
                                <optgroup label="Hak Akses">
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
