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

    h1 {
    font-size: 7rem; /* Ukuran font besar untuk judul */
    margin: 0;
    }

    p {
        font-size: 2rem; /* Ukuran font untuk teks */
        margin: 0;
    }

    /* animasi isi */
@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(20px); /* Elemen mulai sedikit di bawah */
    }
    100% {
        opacity: 1;
        transform: translateY(0); /* Elemen bergerak ke posisi aslinya */
    }
}

/* Animasi untuk kelas .satu */
.satu {
    opacity: 0; /* Mulai tidak terlihat */
    animation: fadeInUp 2s ease forwards 0s; /* Fade-in tanpa delay */
}

/* Animasi untuk kelas .dua */
.dua {
    opacity: 0; /* Mulai tidak terlihat */
    animation: fadeInUp 2s ease forwards 0.5s; /* Fade-in setelah 2 detik */
}

/* Animasi untuk kelas .tiga */
.tiga {
    opacity: 0; /* Mulai tidak terlihat */
    animation: fadeInUp 2s ease forwards 0.8s; /* Fade-in setelah 4 detik */
}



</style>

<div class="video-container">
    <video autoplay muted loop id="background-video">
        <source src="{{ asset('video/0819.mp4') }}" type="video/mp4">
    </video>
</div>

<div class="isi">
    <ul>
        <li><p class="satu">Selamat Datang Di Portal</p></li>
        <li><h1 class="dua">Pemdes Kupang</h1></li>
        <br>
        <br>
        <li>
            <p class="tiga">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et lacinia hendrerit, mi metus euismod arcu, in tempus elit risus eu ligula. Curabitur vel libero eu erat tincidunt posuere. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Suspendisse potenti. Nullam dapibus dolor et ex vestibulum, non consequat odio egestas.</p>
        </li>
    </ul>
</div>

@endsection
