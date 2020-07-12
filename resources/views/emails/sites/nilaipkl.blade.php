@component('mail::message')
# Nilai Peserta PKL PT. Indonesia Power UP Suralaya

Nilai {{ $pendaftar->name }} telah terbit.
Silahkan login untuk melihat nilai!


@component('mail::button', ['url' => 'http://127.0.0.1:8000/peserta-login'])
Login
@endcomponent

Terimakasih,<br>
<b>Manajer SDM & Humas</b>
@endcomponent
