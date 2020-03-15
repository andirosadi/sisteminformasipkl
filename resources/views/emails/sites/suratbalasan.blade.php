@extends('emails.sites.emailLayout.mails_design')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-body printableArea">
            <img width=141 height=44 src="https://www.indonesiapower.co.id/SiteAssets/logo.png">
            <p class="text-black-50 m-l-5">
                Komplek PLTU Suralaya, Kotak Pos 15 Merak 42439, Serang – Banten
                <br />Telepon : (0254) 571230, 571240, 571243, Facsimile : (0254) 571235
                <br />Email : suralaya
                @indonesiapower.co.id
            </p>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="fa-pull-right">
                        <p class="text-black-50 m-l-5">
                            Suralaya, {{\Carbon\Carbon::now()->format('j F Y')}}
                        </p>
                    </div>
                    <div class="pull-left">
                        <p class="text-black-50 m-l-5">Nomor: 1234567
                            <br /> Lampiran: -
                            <br /> Perihal: Persetujuan Kerja Praktek/PKL
                        </p>
                    </div>
                </div>
                @foreach($suratpernyataan as $spditerima)
                <div class="col-md-12">
                    <div class="fa-pull-right text-left">
                        <h4 class="font-bold" style="text-transform: uppercase">
                            KEPADA
                            <br />{{$spditerima->sekolah}}
                            <br />DI
                            <br />MALANG
                        </h4>
                        <p class="text-muted">
                            Jln. Veteran No. 8
                            <br /> Telp/Fax: (02341) 577911/577911
                            <br /> Email: jtif
                            @ub.ac.id
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="fa-pull-left">
                        <p class="text-black-50 m-l-5">
                            Up.Ketua
                            <br />Menjawab Surat Permohonan yang diterima pada Tanggal 11 Mei 2018 Perihal Permohonan Praktek Kerja Lapangan (PKL), dengan ini disampaikan bahwa:
                            <br />a.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Permohonan tersebut dapat diterima dan dilaksanakan mulai tanggal
                            {{\Carbon\Carbon::parse($spditerima->created_at)->addMonths(1)->firstOfMonth(1)->startOfWeek()->format('j F Y')}} s/d
                            {{\Carbon\Carbon::parse($spditerima->created_at)->addMonths(1)->endOfMonth()->endOfWeek()->subDays(2)->format('j F Y')}} dengan peserta sebagai berikut:
                        </p>
                    </div>
                    <div class="table-responsive m-t-40">
                        <table class="table table-bordered table-responsive-sm">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Jurusan</th>
                                    <th>Divisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>{{$spditerima->name}}</td>
                                    <td>{{$spditerima->nim}}</td>
                                    <td>{{$spditerima->jurusan}}</td>
                                    <td>{{$spditerima->namadivisi}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                @endforeach
                <div class="col-md-12">
                    <div class="fa-pull-left">
                        <p class="text-black-50 m-l-5">
                            b.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Calon peserta PKL agar hadir di PT. Indonesia Power Unit Pembangkitan Suralaya dengan membawa pas foto 2 lembar ukuran 2X3.
                            <br />c.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Calon peserta PKL diwajibkan memakai Safety Shoes, dan Almamater selama mengikuti kegiatan Job Training di perusahaan
                            <br />d.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Calon peserta PKL tidak merokok, sesuai Kepdir PLN No. 514.K/DIR/2010.
                            <br />e.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selama melaksanakan PKL di PT. Indonesia Power Unit Pembangkitan Suralaya, calon peserta tidak mendapat fasilitas apapun dan akan mentaati tata tertib yang
                            berlaku.
                            <br />f.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Calon peserta PKL tidak diperkenankan kaos, jeans, dan, celana ketat, setiap jumat harus mengikuti senam pagi serta memakai seragam training lengkap.
                            <br />g.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Calon peserta PKL diharuskan hadir opening sesuai dengan tanggal pemanggilan PKL.
                            <br />h.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagi calon peserta PKL, apabila calon peserta tidak hadir dalam 2 kali 24 jam berarti dianggap telah MENGUNDURKAN DIRI
                            <br />i.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Calon peserta PKL diharuskan mengikuti closing sesuai dengan ketentuan management UP Suralaya.
                            <br />j.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Setelah closing PKL, Helm dikembalikan ke Divisi Humas.
                            <br />Demikian disampaikan atas perhatiannya diucapkan terimakasih
                        </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="fa-pull-right">
                        <P class="text-black-50 text-left m-1-5">
                            Terimakasih,
                        </P>
                        @foreach($humas as $penanggungjawab)
                        <h6 class="font-bold">
                            {{$penanggungjawab->jabatan}} {{$penanggungjawab->namadivisi}}
                            <br><br><br><br><br><br>
                            {{$penanggungjawab->name}}
                        </h6>
                        <div class="clearfix"></div>
                        <hr>
                        NIP: {{$penanggungjawab->nip}}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
