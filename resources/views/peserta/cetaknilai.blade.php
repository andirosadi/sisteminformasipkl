<html>

<head>
    <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
    <meta name=Generator content="Microsoft Word 15 (filtered)">
    <style>
        <!--
        /* Font Definitions */
        @font-face
        {font-family:"Cambria Math";
            panose-1:2 4 5 3 5 4 6 3 2 4;}
        @font-face
        {font-family:Calibri;
            panose-1:2 15 5 2 2 2 4 3 2 4;}
        @font-face
        {font-family:"Product Sans";
            panose-1:2 11 4 3 3 5 2 4 2 3;}
        @font-face
        {font-family:"Circular Std Black";
            panose-1:2 11 10 4 2 1 1 1 1 2;}
        /* Style Definitions */
        p.MsoNormal, li.MsoNormal, div.MsoNormal
        {margin-top:0cm;
            margin-right:0cm;
            margin-bottom:8.0pt;
            margin-left:0cm;
            line-height:107%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;}
        p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
        {margin-top:0cm;
            margin-right:0cm;
            margin-bottom:8.0pt;
            margin-left:36.0pt;
            line-height:107%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;}
        p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
        {margin-top:0cm;
            margin-right:0cm;
            margin-bottom:0cm;
            margin-left:36.0pt;
            margin-bottom:.0001pt;
            line-height:107%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;}
        p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
        {margin-top:0cm;
            margin-right:0cm;
            margin-bottom:0cm;
            margin-left:36.0pt;
            margin-bottom:.0001pt;
            line-height:107%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;}
        p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
        {margin-top:0cm;
            margin-right:0cm;
            margin-bottom:8.0pt;
            margin-left:36.0pt;
            line-height:107%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;}
        .MsoChpDefault
        {font-size:10.0pt;
            font-family:"Calibri",sans-serif;}
        @page WordSection1
        {size:595.3pt 841.9pt;
            margin:36.0pt 36.0pt 36.0pt 36.0pt;}
        div.WordSection1
        {page:WordSection1;}
        /* List Definitions */
        ol
        {margin-bottom:0cm;}
        ul
        {margin-bottom:0cm;}
        -->
    </style>

</head>

<body lang=EN-ID>

<div class=WordSection1>
    @foreach($nilai as $nilais)
    <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><img
            width=141 height=44 src="https://www.indonesiapower.co.id/SiteAssets/logo.png"></p>

    <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><b><span
                style='font-family:"Product Sans",sans-serif'>&nbsp;</span></b></p>

    <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center'><span style='font-size:14.0pt;line-height:107%;font-family:
"Circular Std Black",sans-serif'><b>BERITA ACARA PENILAIAN PELAKSANAAN DAN PRESENTASI</b></span></p>

    <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center'><span style='font-size:14.0pt;line-height:107%;font-family:
"Circular Std Black",sans-serif'><b>PROGRAM PENELITIAN / PRAKTIK KERJA MAHASISWA *D3/S1</b></span></p>

    <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center'><span style='font-size:10.0pt;line-height:107%;font-family:
"Circular Std Black",sans-serif'>&nbsp;</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify;line-height:115%'><span
            style='font-family:"Product Sans",sans-serif'>Pada hari ini, {{\Carbon\Carbon::now()->format('d F Y')}}
telah dilaksanakan penilaian atas berkas-berkas administrasi pelaksanaan PKL.
Laporan PKL dan Presentasi Akhir, atas nama:</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify;line-height:115%'><span
            style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify;line-height:115%'><span
            style='font-family:"Product Sans",sans-serif'>Nama             : {{$nilais->name}}</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify;line-height:115%'><span
            style='font-family:"Product Sans",sans-serif'>NIM                 : {{$nilais->nim}}</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify;line-height:115%'><span
            style='font-family:"Product Sans",sans-serif'>Jurusan        : {{$nilais->jurusan}}</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify;line-height:115%'><span
            style='font-family:"Product Sans",sans-serif'>Institusi         : {{$nilais->sekolah}}</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify;line-height:115%'><span
            style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify;line-height:115%'><span
            style='font-family:"Product Sans",sans-serif'>Dengan hasil / Nilai berdasarkan
Evaluasi menyeluruh sebagai berikut:</span></p>

    <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=576
           style='width:431.95pt;margin-left:14.2pt;border-collapse:collapse;border:none'>
        <tr>
            <td width=47 valign=top style='width:35.2pt;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><b><span style='font-family:"Product Sans",sans-serif'>NO</span></b></p>
            </td>
            <td width=189 valign=top style='width:141.6pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><b><span style='font-family:"Product Sans",sans-serif'>UNSUR
  PENILAIAN</span></b></p>
            </td>
            <td width=113 valign=top style='width:3.0cm;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><b><span style='font-family:"Product Sans",sans-serif'>NILAI
  ANGKA</span></b></p>
            </td>
            <td width=104 valign=top style='width:77.95pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><b><span style='font-family:"Product Sans",sans-serif'>NILAI
  HURUF</span></b></p>
            </td>
            <td width=123 valign=top style='width:92.15pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><b><span style='font-family:"Product Sans",sans-serif'>KETERANGAN</span></b></p>
            </td>
        </tr>
        <tr>
            <td width=576 colspan=5 valign=top style='width:431.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:
  -18.0pt;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>A.<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
                        style='font-family:"Product Sans",sans-serif'>ASPEK TEKNIS</span></p>
            </td>
        </tr>
        <tr>
            <td width=47 valign=top style='width:35.2pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>1</span></p>
            </td>
            <td width=189 valign=top style='width:141.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>Penulisan Laporan</span></p>
            </td>
            <td width=113 valign=top style='width:3.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>{{$nilais->penulisanlaporan}}</span></p>
            </td>
            <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>
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
                    </span></p>
            </td>
            <td width=123 valign=top style='width:92.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td width=47 valign=top style='width:35.2pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>2</span></p>
            </td>
            <td width=189 valign=top style='width:141.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>Penguasaan Materi</span></p>
            </td>
            <td width=113 valign=top style='width:3.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>{{$nilais->penguasaanmateri}}</span></p>
            </td>
            <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>
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
                    </span></p>
            </td>
            <td width=123 valign=top style='width:92.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td width=47 valign=top style='width:35.2pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>3</span></p>
            </td>
            <td width=189 valign=top style='width:141.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>Penyelesaian Makalah</span></p>
            </td>
            <td width=113 valign=top style='width:3.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>{{$nilais->penyelesaianmakalah}}</span></p>
            </td>
            <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>
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
                    </span></p>
            </td>
            <td width=123 valign=top style='width:92.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td width=47 valign=top style='width:35.2pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>4</span></p>
            </td>
            <td width=189 valign=top style='width:141.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>Kemampuan Analisa</span></p>
            </td>
            <td width=113 valign=top style='width:3.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>{{$nilais->kemampuananalisa}}</span></p>
            </td>
            <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>
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
                    </span></p>
            </td>
            <td width=123 valign=top style='width:92.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td width=576 colspan=5 valign=top style='width:431.95pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoListParagraph style='margin-top:0cm;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.0pt;margin-bottom:.0001pt;text-align:justify;text-indent:
  -18.0pt;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>B.<span
                            style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span><span
                        style='font-family:"Product Sans",sans-serif'>ASPEK NON TEKNIS</span></p>
            </td>
        </tr>
        <tr>
            <td width=47 valign=top style='width:35.2pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>1</span></p>
            </td>
            <td width=189 valign=top style='width:141.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>Disiplin / Tanggung Jawab</span></p>
            </td>
            <td width=113 valign=top style='width:3.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>{{$nilais->tanggungjawab}}</span></p>
            </td>
            <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>
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
                    </span></p>
            </td>
            <td width=123 valign=top style='width:92.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td width=47 valign=top style='width:35.2pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>2</span></p>
            </td>
            <td width=189 valign=top style='width:141.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>Kehadiran</span></p>
            </td>
            <td width=113 valign=top style='width:3.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>{{$nilais->kehadiran}}</span></p>
            </td>
            <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>
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
                    </span></p>
            </td>
            <td width=123 valign=top style='width:92.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td width=47 valign=top style='width:35.2pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>3</span></p>
            </td>
            <td width=189 valign=top style='width:141.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>Sikap</span></p>
            </td>
            <td width=113 valign=top style='width:3.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>{{$nilais->sikap}}</span></p>
            </td>
            <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>
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
                    </span></p>
            </td>
            <td width=123 valign=top style='width:92.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td width=47 valign=top style='width:35.2pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>4</span></p>
            </td>
            <td width=189 valign=top style='width:141.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>Pengetahuan</span></p>
            </td>
            <td width=113 valign=top style='width:3.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>{{$nilais->pengetahuan}}</span></p>
            </td>
            <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>
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
                    </span></p>
            </td>
            <td width=123 valign=top style='width:92.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td width=47 valign=top style='width:35.2pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>5</span></p>
            </td>
            <td width=189 valign=top style='width:141.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>Inisiatif</span></p>
            </td>
            <td width=113 valign=top style='width:3.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>{{$nilais->inisiatif}}</span></p>
            </td>
            <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>
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
                    </span></p>
            </td>
            <td width=123 valign=top style='width:92.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td width=47 valign=top style='width:35.2pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>6</span></p>
            </td>
            <td width=189 valign=top style='width:141.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>Kerjasama</span></p>
            </td>
            <td width=113 valign=top style='width:3.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>{{$nilais->kerjasama}}</span></p>
            </td>
            <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>
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
                    </span></p>
            </td>
            <td width=123 valign=top style='width:92.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td width=47 valign=top style='width:35.2pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>7</span></p>
            </td>
            <td width=189 valign=top style='width:141.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>Kepemimpinan</span></p>
            </td>
            <td width=113 valign=top style='width:3.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>{{$nilais->kepemimpinan}}</span></p>
            </td>
            <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>
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
                    </span></p>
            </td>
            <td width=123 valign=top style='width:92.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td width=47 valign=top style='width:35.2pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>8</span></p>
            </td>
            <td width=189 valign=top style='width:141.6pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>Potensi
  Berkembang</span></p>
            </td>
            <td width=113 valign=top style='width:3.0cm;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>{{$nilais->potensi}}</span></p>
            </td>
            <td width=104 valign=top style='width:77.95pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>
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
                    </span></p>
            </td>
            <td width=123 valign=top style='width:92.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td width=236 colspan=2 valign=top style='width:176.8pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><b><span style='font-family:"Product Sans",sans-serif'>JUMLAH
  NILAI</span></b></p>
            </td>
            <td width=217 colspan=2 valign=top style='width:163.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><b><span style='font-family:"Product Sans",sans-serif'>{{array_sum([$nilais->penulisanlaporan, $nilais->penguasaanmateri, $nilais->penyelesaianmakalah, $nilais->kemampuananalisa, $nilais->tanggungjawab, $nilais->kehadiran, $nilais->sikap, $nilais->pengetahuan, $nilais->inisiatif, $nilais->kerjasama, $nilais->kepemimpinan, $nilais->potensi])}}</span></b></p>
            </td>
            <td width=123 valign=top style='width:92.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><b><span style='font-family:"Product Sans",sans-serif'>{{array_sum([$nilais->penulisanlaporan, $nilais->penguasaanmateri, $nilais->penyelesaianmakalah, $nilais->kemampuananalisa, $nilais->tanggungjawab, $nilais->kehadiran, $nilais->sikap, $nilais->pengetahuan, $nilais->inisiatif, $nilais->kerjasama, $nilais->kepemimpinan, $nilais->potensi])}}</span></b></p>
            </td>
        </tr>
        <tr>
            <td width=236 colspan=2 valign=top style='width:176.8pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><b><span style='font-family:"Product Sans",sans-serif'>NILAI
  RATA-RATA</span></b></p>
            </td>
            <td width=217 colspan=2 valign=top style='width:163.0pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><b><span style='font-family:"Product Sans",sans-serif'>{{array_sum([$nilais->penulisanlaporan, $nilais->penguasaanmateri, $nilais->penyelesaianmakalah, $nilais->kemampuananalisa, $nilais->tanggungjawab, $nilais->kehadiran, $nilais->sikap, $nilais->pengetahuan, $nilais->inisiatif, $nilais->kerjasama, $nilais->kepemimpinan, $nilais->potensi])}}
  : 12 = {{array_sum([$nilais->penulisanlaporan, $nilais->penguasaanmateri, $nilais->penyelesaianmakalah, $nilais->kemampuananalisa, $nilais->tanggungjawab, $nilais->kehadiran, $nilais->sikap, $nilais->pengetahuan, $nilais->inisiatif, $nilais->kerjasama, $nilais->kepemimpinan, $nilais->potensi])/12}}</span></b></p>
            </td>
            <td width=123 valign=top style='width:92.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
                <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify;line-height:115%'><b><span style='font-family:"Product Sans",sans-serif'>
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
                        </span></b></p>
            </td>
        </tr>
    </table>

    <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:115%'><span style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>

    <p class=MsoNormal align=center style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:360.0pt;margin-bottom:.0001pt;text-align:center;
line-height:115%'><span style='font-family:"Product Sans",sans-serif'><br><br>Suralaya, {{\Carbon\Carbon::now()->format('d F Y')}}</span></p>

    <p class=MsoNormal align=center style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:360.0pt;margin-bottom:.0001pt;text-align:center;
line-height:115%'><span style='font-family:"Product Sans",sans-serif'>Mentor {{$nilais->namadivisi}}</span></p>

    <p class=MsoNormal align=center style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:360.0pt;margin-bottom:.0001pt;text-align:center;
line-height:115%'><span style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>

    <p class=MsoNormal align=center style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:360.0pt;margin-bottom:.0001pt;text-align:center;
line-height:115%'><span style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>

    <p class=MsoNormal align=center style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:360.0pt;margin-bottom:.0001pt;text-align:center;
line-height:115%'><span style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>

    <p class=MsoNormal align=center style='margin-top:0cm;margin-right:0cm;
margin-bottom:0cm;margin-left:360.0pt;margin-bottom:.0001pt;text-align:center;
line-height:115%'><b><span style='font-family:"Product Sans",sans-serif'><br>NAMA</span></b></p>
    @endforeach
    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify;line-height:115%'><span
            style='font-family:"Product Sans",sans-serif'>&nbsp;</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify;line-height:115%'><span
            style='font-family:"Product Sans",sans-serif'>Keterangan :</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify;line-height:115%'><span
            style='font-family:"Product Sans",sans-serif'>A = Memuaskan           (96 - 100)</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify;line-height:115%'><span
            style='font-family:"Product Sans",sans-serif'>B = Baik Sekali            (86 -
95)</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify;line-height:115%'><span
            style='font-family:"Product Sans",sans-serif'>C = Baik                        (71
- 85)</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify;line-height:115%'><span
            style='font-family:"Product Sans",sans-serif'>D = Cukup                   (56 -
70)</span></p>

    <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:14.2pt;margin-bottom:.0001pt;text-align:justify;line-height:115%'><span
            style='font-family:"Product Sans",sans-serif'>E = Kurang                  (41 -
55)</span></p>

    <p class=MsoNormal>&nbsp;</p>

</div>

</body>

</html>
