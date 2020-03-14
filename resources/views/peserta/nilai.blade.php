@extends('peserta.pesertaLayout.peserta_design')
@section('content')
    @if(count($nilai) == 0)
    <div class="row">
        <div class="col-md-6 col-lg-12 col-xlg-">
            <div class="card card-hover" style="background-color: transparent">
                <div class="box bg-danger text-center" style="border-radius:.40rem!important">
                    <h1 class="font-light text-white"><i class="mdi mdi-alert-circle-outline"></i></h1>
                    <h5 class="text-white" style="text-transform: uppercase">NILAI {{Auth::guard('pendaftar')->user()->name}} BELUM TERBIT</h5>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="row" >
        <!-- Nilai PKL -->
        <div class="col-md-6 col-lg-12 col-xlg-">
            <div class="card card-hover" style="background-color: transparent">
                <div class="box bg-info text-center" style="border-radius:.40rem!important">
                    @foreach($nilai as $nilais)
                    <h1 class="font-light text-white"><i class="mdi mdi-file-multiple"></i></h1>
                    <h5 class="text-white">BERITA ACARA PENILAIAN PELAKSANAAN DAN PRESENTASI PROGRAM PENELITIAN / PRAKTIK KERJA MAHASISWA *D3/S1</h5>
                    <hr>
                    <h6 class="text-white text-left m-b-0">Nama&ensp;&ensp;&ensp;&ensp;&emsp;&nbsp;: {{$nilais->name}}</h6>
                    <h6 class="text-white text-left m-b-0">NIM&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;: {{$nilais->nim}}</h6>
                    <h6 class="text-white text-left m-b-0">Jurusan&ensp;&ensp;&ensp;&ensp;&nbsp;: {{$nilais->jurusan}}</h6>
                    <h6 class="text-white text-left m-b-0">Institusi&ensp;&ensp;&ensp;&ensp;&nbsp;: {{$nilais->sekolah}}</h6>
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
            <div class="card shadow-sm card-hover" style="border-radius:.40rem!important">
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <h6>Dengan hasil/ Nilai berdasarkan Evaluasi menyeluruh sebagai berikut:</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col"><b>No</b></th>
                                            <th scope="col"><b>Unsur Penilaian</b></th>
                                            <th scope="col"><b>Nilai Angka</b></th>
                                            <th scope="col"><b>Nilai Huruf</b></th>
                                            <th scope="col"><b>Keterangan</b></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><b>A</b></td>
                                            <td><b>ASPEK TEKNIS</b></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Penulisan Laporan</td>
                                            <td>{{$nilais->penulisanlaporan}}</td>
                                            <td>
                                                @if($nilais->penulisanlaporan >= 96 && $nilais->penulisanlaporan <=100)
                                                    <echo>A</echo>
                                                @elseif($nilais->penulisanlaporan >= 86 && $nilais->penulisanlaporan <=95)
                                                    <echo>B</echo>
                                                @elseif($nilais->penulisanlaporan >= 71 && $nilais->penulisanlaporan <=85)
                                                    <echo>C</echo>
                                                @elseif($nilais->penulisanlaporan >= 56 && $nilais->penulisanlaporan <=70)
                                                    <echo>D</echo>
                                                @else
                                                    <echo>E</echo>
                                                @endif
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Penguasaan Materi</td>
                                            <td>{{$nilais->penguasaanmateri}}</td>
                                            <td>
                                                @if($nilais->penguasaanmateri >= 96 && $nilais->penguasaanmateri <=100)
                                                    <echo>A</echo>
                                                @elseif($nilais->penguasaanmateri >= 86 && $nilais->penguasaanmateri <=95)
                                                    <echo>B</echo>
                                                @elseif($nilais->penguasaanmateri >= 71 && $nilais->penguasaanmateri <=85)
                                                    <echo>C</echo>
                                                @elseif($nilais->penguasaanmateri >= 56 && $nilais->penguasaanmateri <=70)
                                                    <echo>D</echo>
                                                @else
                                                    <echo>E</echo>
                                                @endif
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Penyelesaian Makalah</td>
                                            <td>{{$nilais->penyelesaianmakalah}}</td>
                                            <td>
                                                @if($nilais->penyelesaianmakalah >= 96 && $nilais->penyelesaianmakalah <=100)
                                                    <echo>A</echo>
                                                @elseif($nilais->penyelesaianmakalah >= 86 && $nilais->penyelesaianmakalah <=95)
                                                    <echo>B</echo>
                                                @elseif($nilais->penyelesaianmakalah >= 71 && $nilais->penyelesaianmakalah <=85)
                                                    <echo>C</echo>
                                                @elseif($nilais->penyelesaianmakalah >= 56 && $nilais->penyelesaianmakalah <=70)
                                                    <echo>D</echo>
                                                @else
                                                    <echo>E</echo>
                                                @endif
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Kemampuan Analisa</td>
                                            <td>{{$nilais->kemampuananalisa}}</td>
                                            <td>
                                                @if($nilais->kemampuananalisa >= 96 && $nilais->kemampuananalisa <=100)
                                                    <echo>A</echo>
                                                @elseif($nilais->kemampuananalisa >= 86 && $nilais->kemampuananalisa <=95)
                                                    <echo>B</echo>
                                                @elseif($nilais->kemampuananalisa >= 71 && $nilais->kemampuananalisa <=85)
                                                    <echo>C</echo>
                                                @elseif($nilais->kemampuananalisa >= 56 && $nilais->kemampuananalisa <=70)
                                                    <echo>D</echo>
                                                @else
                                                    <echo>E</echo>
                                                @endif
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><b>B</b></td>
                                            <td><b>ASPEK NON TEKNIS</b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Disiplin/Tanggung Jawab</td>
                                            <td>{{$nilais->tanggungjawab}}</td>
                                            <td>
                                                @if($nilais->tanggungjawab >= 96 && $nilais->tanggungjawab <=100)
                                                    <echo>A</echo>
                                                @elseif($nilais->tanggungjawab >= 86 && $nilais->tanggungjawab <=95)
                                                    <echo>B</echo>
                                                @elseif($nilais->tanggungjawab >= 71 && $nilais->tanggungjawab <=85)
                                                    <echo>C</echo>
                                                @elseif($nilais->tanggungjawab >= 56 && $nilais->tanggungjawab <=70)
                                                    <echo>D</echo>
                                                @else
                                                    <echo>E</echo>
                                                @endif
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Kehadiran</td>
                                            <td>{{$nilais->kehadiran}}</td>
                                            <td>
                                                @if($nilais->kehadiran >= 96 && $nilais->kehadiran <=100)
                                                    <echo>A</echo>
                                                @elseif($nilais->kehadiran >= 86 && $nilais->kehadiran <=95)
                                                    <echo>B</echo>
                                                @elseif($nilais->kehadiran >= 71 && $nilais->kehadiran <=85)
                                                    <echo>C</echo>
                                                @elseif($nilais->kehadiran >= 56 && $nilais->kehadiran <=70)
                                                    <echo>D</echo>
                                                @else
                                                    <echo>E</echo>
                                                @endif
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sikap</td>
                                            <td>{{$nilais->sikap}}</td>
                                            <td>
                                                @if($nilais->sikap >= 96 && $nilais->sikap <=100)
                                                    <echo>A</echo>
                                                @elseif($nilais->sikap >= 86 && $nilais->sikap <=95)
                                                    <echo>B</echo>
                                                @elseif($nilais->sikap >= 71 && $nilais->sikap <=85)
                                                    <echo>C</echo>
                                                @elseif($nilais->sikap >= 56 && $nilais->sikap <=70)
                                                    <echo>D</echo>
                                                @else
                                                    <echo>E</echo>
                                                @endif
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Pengetahuan</td>
                                            <td>{{$nilais->pengetahuan}}</td>
                                            <td>
                                                @if($nilais->pengetahuan >= 96 && $nilais->pengetahuan <=100)
                                                    <echo>A</echo>
                                                @elseif($nilais->pengetahuan >= 86 && $nilais->pengetahuan <=95)
                                                    <echo>B</echo>
                                                @elseif($nilais->pengetahuan >= 71 && $nilais->pengetahuan <=85)
                                                    <echo>C</echo>
                                                @elseif($nilais->pengetahuan >= 56 && $nilais->pengetahuan <=70)
                                                    <echo>D</echo>
                                                @else
                                                    <echo>E</echo>
                                                @endif
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Inisiatif</td>
                                            <td>{{$nilais->inisiatif}}</td>
                                            <td>
                                                @if($nilais->inisiatif >= 96 && $nilais->inisiatif <=100)
                                                    <echo>A</echo>
                                                @elseif($nilais->inisiatif >= 86 && $nilais->inisiatif <=95)
                                                    <echo>B</echo>
                                                @elseif($nilais->inisiatif >= 71 && $nilais->inisiatif <=85)
                                                    <echo>C</echo>
                                                @elseif($nilais->inisiatif >= 56 && $nilais->inisiatif <=70)
                                                    <echo>D</echo>
                                                @else
                                                    <echo>E</echo>
                                                @endif
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Kerjasama</td>
                                            <td>{{$nilais->kerjasama}}</td>
                                            <td>
                                                @if($nilais->kerjasama >= 96 && $nilais->kerjasama <=100)
                                                    <echo>A</echo>
                                                @elseif($nilais->kerjasama >= 86 && $nilais->kerjasama <=95)
                                                    <echo>B</echo>
                                                @elseif($nilais->kerjasama >= 71 && $nilais->kerjasama <=85)
                                                    <echo>C</echo>
                                                @elseif($nilais->kerjasama >= 56 && $nilais->kerjasama <=70)
                                                    <echo>D</echo>
                                                @else
                                                    <echo>E</echo>
                                                @endif
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Kepemimpinan</td>
                                            <td>{{$nilais->kepemimpinan}}</td>
                                            <td>
                                                @if($nilais->kepemimpinan >= 96 && $nilais->kepemimpinan <=100)
                                                    <echo>A</echo>
                                                @elseif($nilais->kepemimpinan >= 86 && $nilais->kepemimpinan <=95)
                                                    <echo>B</echo>
                                                @elseif($nilais->kepemimpinan >= 71 && $nilais->kepemimpinan <=85)
                                                    <echo>C</echo>
                                                @elseif($nilais->kepemimpinan >= 56 && $nilais->kepemimpinan <=70)
                                                    <echo>D</echo>
                                                @else
                                                    <echo>E</echo>
                                                @endif
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Potensi Berkembang</td>
                                            <td>{{$nilais->potensi}}</td>
                                            <td>
                                                @if($nilais->potensi >= 96 && $nilais->potensi <=100)
                                                    <echo>A</echo>
                                                @elseif($nilais->potensi >= 86 && $nilais->potensi <=95)
                                                    <echo>B</echo>
                                                @elseif($nilais->potensi >= 71 && $nilais->potensi <=85)
                                                    <echo>C</echo>
                                                @elseif($nilais->potensi >= 56 && $nilais->potensi <=70)
                                                    <echo>D</echo>
                                                @else
                                                    <echo>E</echo>
                                                @endif
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>JUMLAH NILAI</b></td>
                                            <td><b>{{array_sum([$nilais->penulisanlaporan, $nilais->penguasaanmateri, $nilais->penyelesaianmakalah, $nilais->kemampuananalisa, $nilais->tanggungjawab, $nilais->kehadiran, $nilais->sikap, $nilais->pengetahuan, $nilais->inisiatif, $nilais->kerjasama, $nilais->kepemimpinan, $nilais->potensi])}}</b></td>
                                            <td></td>
                                            <td><b>{{array_sum([$nilais->penulisanlaporan, $nilais->penguasaanmateri, $nilais->penyelesaianmakalah, $nilais->kemampuananalisa, $nilais->tanggungjawab, $nilais->kehadiran, $nilais->sikap, $nilais->pengetahuan, $nilais->inisiatif, $nilais->kerjasama, $nilais->kepemimpinan, $nilais->potensi])}}</b></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><b>NILAI RATA-RATA</b></td>
                                            <td>
                                                <b>{{array_sum([$nilais->penulisanlaporan, $nilais->penguasaanmateri, $nilais->penyelesaianmakalah, $nilais->kemampuananalisa, $nilais->tanggungjawab, $nilais->kehadiran, $nilais->sikap, $nilais->pengetahuan, $nilais->inisiatif, $nilais->kerjasama, $nilais->kepemimpinan, $nilais->potensi])}}
                                                    : 12 = {{array_sum([$nilais->penulisanlaporan, $nilais->penguasaanmateri, $nilais->penyelesaianmakalah, $nilais->kemampuananalisa, $nilais->tanggungjawab, $nilais->kehadiran, $nilais->sikap, $nilais->pengetahuan, $nilais->inisiatif, $nilais->kerjasama, $nilais->kepemimpinan, $nilais->potensi])/12}}</b>
                                            </td>
                                            <td></td>
                                            <td>
                                                @if(array_sum([$nilais->penulisanlaporan, $nilais->penguasaanmateri, $nilais->penyelesaianmakalah, $nilais->kemampuananalisa, $nilais->tanggungjawab, $nilais->kehadiran, $nilais->sikap, $nilais->pengetahuan, $nilais->inisiatif, $nilais->kerjasama, $nilais->kepemimpinan, $nilais->potensi])/12 >= 96
                                                       &&
                                                       array_sum([$nilais->penulisanlaporan, $nilais->penguasaanmateri, $nilais->penyelesaianmakalah, $nilais->kemampuananalisa, $nilais->tanggungjawab, $nilais->kehadiran, $nilais->sikap, $nilais->pengetahuan, $nilais->inisiatif, $nilais->kerjasama, $nilais->kepemimpinan, $nilais->potensi])/12 <=100)
                                                    <echo><b>MEMUASKAN</b></echo>
                                                @elseif(array_sum([$nilais->penulisanlaporan, $nilais->penguasaanmateri, $nilais->penyelesaianmakalah, $nilais->kemampuananalisa, $nilais->tanggungjawab, $nilais->kehadiran, $nilais->sikap, $nilais->pengetahuan, $nilais->inisiatif, $nilais->kerjasama, $nilais->kepemimpinan, $nilais->potensi])/12 >= 86
                                                       &&
                                                       array_sum([$nilais->penulisanlaporan, $nilais->penguasaanmateri, $nilais->penyelesaianmakalah, $nilais->kemampuananalisa, $nilais->tanggungjawab, $nilais->kehadiran, $nilais->sikap, $nilais->pengetahuan, $nilais->inisiatif, $nilais->kerjasama, $nilais->kepemimpinan, $nilais->potensi])/12 <=95)
                                                    <echo><b>BAIK SEKALI</b></echo>
                                                @elseif(array_sum([$nilais->penulisanlaporan, $nilais->penguasaanmateri, $nilais->penyelesaianmakalah, $nilais->kemampuananalisa, $nilais->tanggungjawab, $nilais->kehadiran, $nilais->sikap, $nilais->pengetahuan, $nilais->inisiatif, $nilais->kerjasama, $nilais->kepemimpinan, $nilais->potensi])/12 >= 71
                                                       &&
                                                       array_sum([$nilais->penulisanlaporan, $nilais->penguasaanmateri, $nilais->penyelesaianmakalah, $nilais->kemampuananalisa, $nilais->tanggungjawab, $nilais->kehadiran, $nilais->sikap, $nilais->pengetahuan, $nilais->inisiatif, $nilais->kerjasama, $nilais->kepemimpinan, $nilais->potensi])/12 <=85)
                                                    <echo><b>BAIK</b></echo>
                                                @elseif(array_sum([$nilais->penulisanlaporan, $nilais->penguasaanmateri, $nilais->penyelesaianmakalah, $nilais->kemampuananalisa, $nilais->tanggungjawab, $nilais->kehadiran, $nilais->sikap, $nilais->pengetahuan, $nilais->inisiatif, $nilais->kerjasama, $nilais->kepemimpinan, $nilais->potensi])/12 >= 56
                                                       &&
                                                       array_sum([$nilais->penulisanlaporan, $nilais->penguasaanmateri, $nilais->penyelesaianmakalah, $nilais->kemampuananalisa, $nilais->tanggungjawab, $nilais->kehadiran, $nilais->sikap, $nilais->pengetahuan, $nilais->inisiatif, $nilais->kerjasama, $nilais->kepemimpinan, $nilais->potensi])/12 <=70)
                                                    <echo><b>CUKUP</b></echo>
                                                @else
                                                    <echo><b>KURANG</b></echo>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <div class="card-title m-b-0">
                                                    <div class="btn-group btn-group-justified ">
                                                        <a type="" href="{{url('nilai/cetak')}}" class="btn btn-warning btn-md" target="_blank">Cetak</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="col-sm-12">
                                        <div class="alert alert-warning shadow-sm" role="alert" style="border-radius:.40rem!important">
                                            <h5 class="alert-heading">Keterangan</h5>
                                            <hr>
                                            <div class="col text-center">
                                                <div class="btn-group btn-group-justified">
                                                    <a class="btn btn-success "><h6 class="text-white">A = Memuaskan (96-100)</h6></a>
                                                    <a class="btn btn-info"><h6 class="text-white">B = Baik Sekali (86-95)</h6></a>
                                                    <a class="btn btn-primary"><h6 class="text-white">C = Baik (71-85)</h6></a>
                                                    <a class="btn btn-warning"><h6 class="text-white">D = Cukup (56-70)</h6></a>
                                                    <a class="btn btn-danger"><h6 class="text-white">E = Kurang (41-55)</h6></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection
