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
	{font-family:"Circular Std Black";
	panose-1:2 11 10 4 2 1 1 1 1 2;}
@font-face
	{font-family:"Product Sans";
	panose-1:2 11 4 3 3 5 2 4 2 3;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
 /* Page Definitions */
 @page WordSection1
	{size:419.55pt 595.3pt;
	margin:14.2pt 14.2pt 14.2pt 14.2pt;}
div.WordSection1
	{page:WordSection1;}
-->
</style>

</head>

<body lang=EN-ID>

<div class=WordSection1>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:17.0pt;line-height:107%'>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:17.0pt;line-height:107%'>&nbsp;</span></p>

<p class=MsoNormal align=center style='text-align:center'><span
style='font-size:29.0pt;line-height:107%'><img width=234 height=74
id="Picture 1" src="https://www.indonesiapower.co.id/SiteAssets/logo.png"></span></p>
    <br><br>
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center'><b><span style='font-size:46.0pt;line-height:107%;
font-family:"Circular Std Black",sans-serif;color:#1F3864'>I D  C A R D</span></b></p>

    <br>
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center'><span style='font-size:23.0pt;line-height:107%;font-family:
"Product Sans",sans-serif;color:#1F3864'>Peserta Praktik Kerja Lapangan</span></p>

    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>
@foreach($idcard as $idcards)
<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:21.3pt;margin-bottom:.0001pt'><span style='font-size:27.0pt;
line-height:107%;font-family:"Product Sans",sans-serif;color:#1F3864'>Nama   : {{$idcards->name}}</span></p>

<p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;
margin-left:21.3pt;margin-bottom:.0001pt'><span style='font-size:27.0pt;
line-height:107%;font-family:"Product Sans",sans-serif;color:#1F3864'>Divisi : {{$idcards->namadivisi}}</span></p>
@endforeach
</div>

</body>

</html>
