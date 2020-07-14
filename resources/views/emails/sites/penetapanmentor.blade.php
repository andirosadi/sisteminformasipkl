@component('mail::message')
# Penetapan Mentor PKL PT. Indonesia Power UP Suralaya

Selamat {{ $user->name }}, anda ditetapkan menjadi mentor.
Silahkan login dengan email : {{ $user->email }} dan password : {{ $user->nip }}


@component('mail::button', ['url' => 'http://127.0.0.1:8000/login'])
Login
@endcomponent

Terimakasih,<br>
<b>Manajer SDM & Humas</b>
@endcomponent
