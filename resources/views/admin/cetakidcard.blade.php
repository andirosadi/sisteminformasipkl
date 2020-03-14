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
        @font-face
        {font-family:"Circular Std Book";
            panose-1:2 11 6 4 2 1 1 2 1 2;}
        /* Style Definitions */
        p.MsoNormal, li.MsoNormal, div.MsoNormal
        {margin-top:0cm;
            margin-right:0cm;
            margin-bottom:8.0pt;

            line-height:107%;
            font-size:11.0pt;
            font-family:"Calibri",sans-serif;}
        .MsoChpDefault
        {font-family:"Calibri",sans-serif;}
        .MsoPapDefault
        {margin-bottom:8.0pt;
            line-height:107%;}
        @page WordSection1
        {size:595.3pt 841.9pt;
            margin:72.0pt 72.0pt 72.0pt 72.0pt;}
        div.WordSection1
        {page:WordSection1;}
        -->
    </style>

</head>

<body lang=EN-ID >

<div class=WordSection1>

        <br><br><br><br>


    <p class=MsoNormal style="margin-left: 2.6cm"><img  width=282 height=88 id="Picture 1" src="https://www.indonesiapower.co.id/SiteAssets/logo.png"></p>
    <p class=MsoNormal style="margin-left: 3.3cm"><span style='font-size:34.0pt;line-height:107%;font-family:"Circular Std Black",sans-serif;
color:black'><b>I D C A R D</b></span></p>
    <p class=MsoNormal style="margin-left: 2.45cm"><span style='font-size:15.0pt;line-height:107%;font-family:
"Circular Std Black",sans-serif;color:black'><b>Peserta Praktik Kerja Lapangan</b></span></p>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <p class=MsoNormal style="margin-left: 2.45cm"><span>
            @foreach($idcard as $idcards)
            <table style='font-size:15.0pt;line-height:107%;font-family:"Circular Std Black",sans-serif;color:black' border="0">
                <tbody>
                <tr>
                    <td><b>Nama</b></td>
                    <td><b>:</b></td>
                    <td><b>{{$idcards->name}}</b></td>
                </tr>
                <tr>
                    <td><b>NIM</b></td>
                    <td><b>:</b></td>
                    <td><b>{{$idcards->nim}}</b></td>
                </tr>
                </tbody>
            </table>
                @endforeach
        </span></p>
</div>
