<!-- resources/views/index.blade.php -->

@extends('layouts.portal')

@section('content')

<style>
    /* CSS untuk mengatur tampilan elemen "isi" */
    .isi {
        position: relative; /* Konten tetap berada di atas video */
        color: white; /* Warna teks putih agar terlihat jelas di atas video */
        z-index: 1; /* Z-index untuk konten agar berada di atas video */
        padding: 20px; /* Padding untuk jarak antara konten dan tepi */
        margin-top: 20vh; /* Margin atas 20% dari tinggi viewport */
    max-width: 800px; /* Maksimal lebar konten */
    margin-left: 20px; /* Jarak kiri jika diinginkan */
    margin-right: 20px; /* Jarak kanan jika diinginkan */
    }

    /* CSS untuk mengatur video menjadi latar belakang */
    .video-container {
        position: fixed; /* Memastikan video menutupi seluruh layar */
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden; /* Memastikan video tidak keluar dari container */
        z-index: -1; /* Video berada di belakang konten .isi */
        pointer-events: none; /* Memastikan video tidak mengganggu interaksi pengguna dengan elemen lain */
    }

    #background-video {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Pastikan video menutupi seluruh container tanpa distorsi */
    }
</style>

<div class="video-container">
    <video autoplay muted loop id="background-video">
        <source src="{{ asset('video/MVI_9830.mp4') }}" type="video/mp4">
    </video>
</div>

<div class="isi">
    <ul>
        <li><p>Selamat Datang Di Portal</p></li>
        <li><h1>Pemdes Kupang</h1></li>
        <br>
        <br>
        <li>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et lacinia hendrerit, mi metus euismod arcu, in tempus elit risus eu ligula. Curabitur vel libero eu erat tincidunt posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse potenti. Nullam dapibus dolor et ex vestibulum, non consequat odio egestas.</p>
        </li>
    </ul>
</div>

@endsection
