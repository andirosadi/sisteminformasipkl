@extends('admin.adminLayout.admin_design')
@section('content')
<div class="row">
    <div class="container-fluid">
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    </div>
    <div class="col-md-6 col-lg-12">
        <div class="card card-hover" style="background-color: transparent">
            <div class="box bg-info text-center" style="border-radius:10px!important">
                <h1 class="font-light text-white"><i class="mdi mdi-account-card-details"></i></h1>
                <h5 class="text-white">Buat Mentor</h5>
                <h6 class="text-white"></h6>
            </div>
        </div>
    </div>
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
                                    <input id="name" name="name" type="text" class="required form-control" value="{{old('name')}}">
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="nip">NIP</label>
                                    <input id="nip" name="nip" type="number" class="required form-control" value="{{old('nip')}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="email" class="required form-control" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 col-md-6">
                                    <label for="divisi_id">Divisi</label>
                                    <select class="select2 form-control custom-select{{ $errors->has('divisi_id') ? ' is-invalid' : '' }}" id="divisi_id" name="divisi_id" value="{{old('divisi_id')}}">
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
                                    @if ($errors->has('divisi_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Divisi sudah memiliki mentor</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="jabatan">Jabatan</label>
                                    <input id="jabatan" name="jabatan" type="text" class="required form-control" value="{{old('jabatan')}}">
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
    @endsection
