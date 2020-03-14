@extends('admin.adminLayout.admin_design')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm" style="border-radius:10px!important;">
            <form action="{{url('keuangan/'.$admin->id)}}" method="post" class="form-horizontal">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="card-body">
                    <h4 class="card-title">Edit Keuangan</h4>
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
