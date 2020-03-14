@component('mail::message')
# Pendaftaran Peserta PKL PT. Indonesia Power UP Suralaya

Selamat {{$pendaftar->name}}, pendaftaran berhasil dilakukan.
Info terkait penerimaan peserta PKL akan diberitahukan melalui email!


@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Klik disini
@endcomponent

Terimakasih,<br>
<b>Manajer SDM & Humas</b>
@endcomponent
