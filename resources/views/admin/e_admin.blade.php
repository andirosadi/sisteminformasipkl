@extends('admin.adminLayout.admin_design')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm" style="border-radius:10px!important;">
            <form action="{{url('admin/'.$admin->id)}}" method="post" class="form-horizontal">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="card-body">
                    <h4 class="card-title">Edit Admin</h4>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name Here" value="{{$admin->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nip" class="col-sm-3 text-right control-label col-form-label">NIP</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nip" name="nip" placeholder="Full Name Here" value="{{$admin->nip}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan" class="col-sm-3 text-right control-label col-form-label">Jabatan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Full Name Here" value="{{$admin->jabatan}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Here" value="{{$admin->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="divisi" class="col-sm-3 text-right control-label col-form-label">Divisi</label>
                        <div class="col-md-9">
                            <select class="select2 form-control custom-select" id="divisi" name="divisi_id" value="{{$admin->divisi_id}}" style="width: 100%; height:36px;">
                                <option>{{$admin->divisi_id}}</option>
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
