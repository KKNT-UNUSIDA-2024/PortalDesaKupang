<x-portal-layout :title="'Dusun'">
    <x-nav-bar></x-nav-bar>

    <main class="fp-wrapper">
        <section class="fp-section">
            <div class="section section-top">
                <div class="container">
                    <h1 class="text-center">Daftar Dusun</h1>
                    <div class="row">
                        @foreach($dusuns as $dusun)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $dusun->nama }}</h5>
                                        <p class="card-text">Jumlah RT: {{ $dusun->jumlah_rt }}</p>
                                        <p class="card-text">Jumlah RW: {{ $dusun->jumlah_rw }}</p>
                                        <p class="card-text">Deskripsi: {{ $dusun->deskripsi }}</p>
                                        <div>
                                            @if($dusun->gambar)
                                                @foreach(json_decode($dusun->gambar) as $image)
                                                    <img src="{{ asset('storage/' . $image) }}" alt="Gambar Dusun" style="width: 100px; height: auto;">
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-portal-layout>