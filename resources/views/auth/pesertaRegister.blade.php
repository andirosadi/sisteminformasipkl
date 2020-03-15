@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header" align="center"><b>Kuota Peserta PKL</b></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table ">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">
                                                <b>
                                                    @foreach($kuotahumas as $kuota_humas)
                                                    {{$kuota_humas->namadivisi}}
                                                    @endforeach
                                                </b>
                                            </th>
                                            <th scope="col">
                                                <b>
                                                    @foreach($kuotasis as $kuotasisteminformasi)
                                                    {{$kuotasisteminformasi->namadivisi}}
                                                    @endforeach
                                                </b>
                                            </th>
                                            <th scope="col">
                                                <b>
                                                    @foreach($kuotakeuangan as $kuota_keuangan)
                                                    {{$kuota_keuangan->namadivisi}}
                                                    @endforeach
                                                </b>
                                            </th>
                                            <th scope="col">
                                                <b>
                                                    @foreach($kuotamou1 as $kuota_mou1)
                                                    {{$kuota_mou1->namadivisi}}
                                                    @endforeach
                                                </b>
                                            </th>
                                            <th scope="col">
                                                <b>
                                                    @foreach($kuotamou5 as $kuota_mou5)
                                                    {{$kuota_mou5->namadivisi}}
                                                    @endforeach
                                                </b>
                                            </th>
                                            <th scope="col">
                                                <b>
                                                    @foreach($kuotampu1 as $kuota_mpu1)
                                                    {{$kuota_mpu1->namadivisi}}
                                                    @endforeach
                                                </b>
                                            </th>
                                            <th scope="col">
                                                <b>
                                                    @foreach($kuotampu5 as $kuota_mpu5)
                                                    {{$kuota_mpu5->namadivisi}}
                                                    @endforeach
                                                </b>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td bgcolor="#4682b4" style="color: white" align="center">
                                                <b>Total Kuota:
                                                    @foreach($kuotahumas as $kuota_humas)
                                                    {{$kuota_humas->jumlahkuota}}
                                                    @endforeach
                                                </b>
                                            </td>
                                            <td bgcolor="#4682b4" style="color: white" align="center">
                                                <b>Total Kuota:
                                                    @foreach($kuotasis as $kuotasisteminformasi)
                                                    {{$kuotasisteminformasi->jumlahkuota}}
                                                    @endforeach
                                                </b>
                                            </td>
                                            <td bgcolor="#4682b4" style="color: white" align="center">
                                                <b>Total Kuota:
                                                    @foreach($kuotakeuangan as $kuota_keuangan)
                                                    {{$kuota_keuangan->jumlahkuota}}
                                                    @endforeach
                                                </b>
                                            </td>
                                            <td bgcolor="#4682b4" style="color: white" align="center">
                                                <b>Total Kuota:
                                                    @foreach($kuotamou1 as $kuota_mou1)
                                                    {{$kuota_mou1->jumlahkuota}}
                                                    @endforeach
                                                </b>
                                            </td>
                                            <td bgcolor="#4682b4" style="color: white" align="center">
                                                <b>Total Kuota:
                                                    @foreach($kuotamou5 as $kuota_mou5)
                                                    {{$kuota_mou5->jumlahkuota}}
                                                    @endforeach
                                                </b>
                                            </td>
                                            <td bgcolor="#4682b4" style="color: white" align="center">
                                                <b>Total Kuota:
                                                    @foreach($kuotampu1 as $kuota_mpu1)
                                                    {{$kuota_mpu1->jumlahkuota}}
                                                    @endforeach
                                                </b>
                                            </td>
                                            <td bgcolor="#4682b4" style="color: white" align="center">
                                                <b>Total Kuota:
                                                    @foreach($kuotampu5 as $kuota_mpu5)
                                                    {{$kuota_mpu5->jumlahkuota}}
                                                    @endforeach
                                                </b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#ffa07a" style="color: white" align="center">
                                                <b>Terpakai<br>{{$humascount->count()}}</b>
                                            </td>
                                            <td bgcolor="#ffa07a" style="color: white" align="center">
                                                <b>Terpakai<br>{{$siscount->count()}}</b>
                                            </td>
                                            <td bgcolor="#ffa07a" style="color: white" align="center">
                                                <b>Terpakai<br>{{$keuangancount->count()}}</b>
                                            </td>
                                            <td bgcolor="#ffa07a" style="color: white" align="center">
                                                <b>Terpakai<br>{{$mou1count->count()}}</b>
                                            </td>
                                            <td bgcolor="#ffa07a" style="color: white" align="center">
                                                <b>Terpakai<br>{{$mou5count->count()}}</b>
                                            </td>
                                            <td bgcolor="#ffa07a" style="color: white" align="center">
                                                <b>Terpakai<br>{{$mpu1count->count()}}</b>
                                            </td>
                                            <td bgcolor="#ffa07a" style="color: white" align="center">
                                                <b>Terpakai<br>{{$mpu5count->count()}}</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td bgcolor="#3cb371" style="color: white" align="center">
                                                <b>
                                                    Kuota Tersedia:
                                                    @foreach($kuotahumas as $kuota_humas)
                                                    {{($kuota_humas->jumlahkuota)-($humascount->count())}}
                                                    @endforeach
                                                </b>
                                            </td>
                                            <td bgcolor="#3cb371" style="color: white" align="center">
                                                <b>
                                                    Kuota Tersedia:
                                                    @foreach($kuotasis as $kuotasisteminformasi)
                                                    {{($kuotasisteminformasi->jumlahkuota)-($siscount->count())}}
                                                    @endforeach
                                                </b>
                                            </td>
                                            <td bgcolor="#3cb371" style="color: white" align="center">
                                                <b>
                                                    Kuota Tersedia:
                                                    @foreach($kuotakeuangan as $kuota_keuangan)
                                                    {{($kuota_keuangan->jumlahkuota)-($keuangancount->count())}}
                                                    @endforeach
                                                </b>
                                            </td>
                                            <td bgcolor="#3cb371" style="color: white" align="center">
                                                <b>
                                                    Kuota Tersedia:
                                                    @foreach($kuotamou1 as $kuota_mou1)
                                                    {{($kuota_mou1->jumlahkuota)-($mou1count->count())}}
                                                    @endforeach
                                                </b>
                                            </td>
                                            <td bgcolor="#3cb371" style="color: white" align="center">
                                                <b>
                                                    Kuota Tersedia:
                                                    @foreach($kuotamou5 as $kuota_mou5)
                                                    {{($kuota_mou5->jumlahkuota)-($mou5count->count())}}
                                                    @endforeach
                                                </b>
                                            </td>
                                            <td bgcolor="#3cb371" style="color: white" align="center">
                                                <b>
                                                    Kuota Tersedia:
                                                    @foreach($kuotampu1 as $kuota_mpu1)
                                                    {{($kuota_mpu1->jumlahkuota)-($mpu1count->count())}}
                                                    @endforeach
                                                </b>
                                            </td>
                                            <td bgcolor="#3cb371" style="color: white" align="center">
                                                <b>
                                                    Kuota Tersedia:
                                                    @foreach($kuotampu5 as $kuota_mpu5)
                                                    {{($kuota_mpu5->jumlahkuota)-($mpu5count->count())}}
                                                    @endforeach
                                                </b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Registrasi Peserta PKL Periode {{\Carbon\Carbon::now()->format('F Y')}}</b></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('peserta.register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Sekolah/Universitas') }}</label>

                            <div class="col-md-6">
                                <input id="sekolah" type="text" class="form-control{{ $errors->has('sekolah') ? ' is-invalid' : '' }}" name="sekolah" value="{{ old('sekolah') }}" required autofocus>

                                @if ($errors->has('sekolah'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('sekolah') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nip" class="col-md-4 col-form-label text-md-right">{{ __('NIM') }}</label>

                            <div class="col-md-6">
                                <input id="nim" type="number" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required autocomplete="nip" autofocus>

                                @error('nim')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Fakultas') }}</label>

                            <div class="col-md-6">
                                <input id="fakultas" type="text" class="form-control{{ $errors->has('fakultas') ? ' is-invalid' : '' }}" name="fakultas" value="{{ old('fakultas') }}" required autofocus>

                                @if ($errors->has('fakultas'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('fakultas') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jurusan" class="col-md-4 col-form-label text-md-right">{{ __('Jurusan') }}</label>

                            <div class="col-md-6">
                                <input id="jurusan" type="text" class="form-control{{ $errors->has('jurusan') ? ' is-invalid' : '' }}" name="jurusan" value="{{ old('jurusan') }}" required autofocus>

                                @if ($errors->has('jurusan'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('jurusan') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="suratpermohonan" class="col-md-4 col-form-label text-md-right">{{ __('Surat Permohonan') }}</label>
                            <div class="col-md-6">
                                <input type="file" class="form-control-file" id="suratpermohonan" name="suratpermohonan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('extra-content')
<script src="{{asset('js/highcharts.js')}}"></script>
<script>
    Highcharts.chart('chartKuota', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Kuota'
        },
        xAxis: {
            categories: [ <
                blade foreach($kuotahumas / > as $kuota_humas) {
                    !!json_encode($kuota_humas - > namadivisi) !!
                } <
                blade endforeach / > , <
                blade foreach($kuotasis / > as $kuotasisteminformasi) {
                    !!json_encode($kuotasisteminformasi - > namadivisi) !!
                } <
                blade endforeach / > , <
                blade foreach($kuotakeuangan / > as $kuota_keuangan) {
                    !!json_encode($kuota_keuangan - > namadivisi) !!
                } <
                blade endforeach / > , <
                blade foreach($kuotamou1 / > as $kuota_mou1) {
                    !!json_encode($kuota_mou1 - > namadivisi) !!
                } <
                blade endforeach / > , <
                blade foreach($kuotamou5 / > as $kuota_mou5) {
                    !!json_encode($kuota_mou5 - > namadivisi) !!
                } <
                blade endforeach / > , <
                blade foreach($kuotampu1 / > as $kuota_mpu1) {
                    !!json_encode($kuota_mpu1 - > namadivisi) !!
                } <
                blade endforeach / > , <
                blade foreach($kuotampu5 / > as $kuota_mpu5) {
                    !!json_encode($kuota_mpu5 - > namadivisi) !!
                } <
                blade endforeach / >
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Kuota'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Total Kuota',
            data: [ <
                blade foreach($kuotahumas / > as $kuota_humas) {
                    !!json_encode($kuota_humas - > jumlahkuota) !!
                } <
                blade endforeach / > , <
                blade foreach($kuotasis / > as $kuotasisteminformasi) {
                    !!json_encode($kuotasisteminformasi - > jumlahkuota) !!
                } <
                blade endforeach / > , <
                blade foreach($kuotakeuangan / > as $kuota_keuangan) {
                    !!json_encode($kuota_keuangan - > jumlahkuota) !!
                } <
                blade endforeach / > , <
                blade foreach($kuotamou1 / > as $kuota_mou1) {
                    !!json_encode($kuota_mou1 - > jumlahkuota) !!
                } <
                blade endforeach / > , <
                blade foreach($kuotamou5 / > as $kuota_mou5) {
                    !!json_encode($kuota_mou5 - > jumlahkuota) !!
                } <
                blade endforeach / > , <
                blade foreach($kuotampu1 / > as $kuota_mpu1) {
                    !!json_encode($kuota_mpu1 - > jumlahkuota) !!
                } <
                blade endforeach / > , <
                blade foreach($kuotampu5 / > as $kuota_mpu5) {
                    !!json_encode($kuota_mpu5 - > jumlahkuota) !!
                } <
                blade endforeach / >
            ]
        }, {
            name: 'Kuota Terpakai',
            data: [{
                    {
                        $humascount - > count()
                    }
                },
                {
                    {
                        $siscount - > count()
                    }
                },
                {
                    {
                        $keuangancount - > count()
                    }
                },
                {
                    {
                        $mou1count - > count()
                    }
                },
                {
                    {
                        $mou5count - > count()
                    }
                },
                {
                    {
                        $mpu1count - > count()
                    }
                },
                {
                    {
                        $mpu5count - > count()
                    }
                }
            ]
        }, {
            name: 'Sisa Kuota',
            data: [ <
                blade foreach($kuotahumas / > as $kuota_humas) {
                    !!json_encode(($kuota_humas - > jumlahkuota) - ($humascount - > count())) !!
                } <
                blade endforeach, /> <
                blade foreach($kuotasis / > as $kuotasisteminformasi) {
                    !!json_encode(($kuotasisteminformasi - > jumlahkuota) - ($siscount - > count())) !!
                } <
                blade endforeach, /> <
                blade foreach($kuotakeuangan / > as $kuota_keuangan) {
                    !!json_encode(($kuota_keuangan - > jumlahkuota) - ($keuangancount - > count())) !!
                } <
                blade endforeach, /> <
                blade foreach($kuotamou1 / > as $kuota_mou1) {
                    !!json_encode(($kuota_mou1 - > jumlahkuota) - ($mou1count - > count())) !!
                } <
                blade endforeach, /> <
                blade foreach($kuotamou5 / > as $kuota_mou5) {
                    !!json_encode(($kuota_mou5 - > jumlahkuota) - ($mou5count - > count())) !!
                } <
                blade endforeach, /> <
                blade foreach($kuotampu1 / > as $kuota_mpu1) {
                    !!json_encode(($kuota_mpu1 - > jumlahkuota) - ($mpu1count - > count())) !!
                } <
                blade endforeach, /> <
                blade foreach($kuotampu5 / > as $kuota_mpu5) {
                    !!json_encode(($kuota_mpu5 - > jumlahkuota) - ($mpu5count - > count())) !!
                } <
                blade endforeach / >
            ]
        }]
    });
</script>
@endsection
