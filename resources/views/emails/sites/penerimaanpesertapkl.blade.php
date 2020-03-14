@component('mail::message')
# Penerimaan Peserta PKL PT. Indonesia Power UP Suralaya

Selamat {{$pendaftar->name}}, anda dinyatakan diterima menjadi peserta PKL di PT. Indonesia Power UP Suralaya. Anda dapat mendownload surat keterangan diterima menjadi peserta PKL. Anda juga dapat melakukan login ke dalam sistem menggunakan email dan password yang telah didaftarkan.



@component('mail::button', ['url' => 'http://127.0.0.1:8000/penerimaanPeserta/'.$pendaftar->id])
    Download Surat Keterangan
@endcomponent

@component('mail::button', ['url' => 'http://127.0.0.1:8000/peserta-login'])
    Login
@endcomponent

Terimakasih,<br>
<b>Manajer SDM & Humas</b>
@endcomponent
