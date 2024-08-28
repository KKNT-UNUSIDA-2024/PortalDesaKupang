<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}">
    <title>{{ $dusun->nama }}</title>
</head>
<body>

    <nav class="navbar navbar-expand-xl navbar-dark navbar-togglable fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Incline</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('dusun.visitors') }}">Dusun</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="mb-4">{{ $dusun->nama }}</h1>
        <img src="{{ asset(json_decode($dusun->gambar)[0] ?? 'default.jpg') }}" class="img-fluid mb-4" alt="{{ $dusun->nama }}">
        <p><strong>Jumlah RT:</strong> {{ $dusun->jumlah_rt }}</p>
        <p><strong>Jumlah RW:</strong> {{ $dusun->jumlah_rw }}</p>
        <a href="{{ route('dusun.visitors') }}" class="btn btn-secondary">Kembali</a>
    </div>

    <footer class="section bg-dark">
        <div class="container">
            <p class="text-white text-center mb-0">&copy; {{ date('Y') }} Incline. All rights reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>