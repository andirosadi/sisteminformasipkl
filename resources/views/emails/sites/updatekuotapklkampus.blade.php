@component('mail::message')
# Pembaruan Kuota Peserta PKL PT. Indonesia Power UP Suralaya

Terdapat pembaruan kuota PKL dengan jumlah {{ $kuota }}.
Silahkan cek pada halaman pendaftaran berikut!


@component('mail::button', ['url' => 'http://127.0.0.1:8000/peserta-register'])
Klik disini
@endcomponent

Terimakasih,<br>
<b>Manajer SDM & Humas</b>
@endcomponent
