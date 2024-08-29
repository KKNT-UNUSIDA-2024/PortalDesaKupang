<x-portal-layout :title="'Dusun'">
    <x-nav-bar-light></x-nav-bar-light>

    <main class="fp-wrapper">
        <section class="fp-section">
            <div class="section section-top">
                <div class="container">
                    <h1 class="text-center mb-5">Daftar Dusun</h1>

                    @foreach($dusuns as $index => $dusun)
                        <div class="row align-items-center {{ $index % 2 == 0 ? '' : 'flex-row-reverse' }} mb-5">
                            <div class="col-md-6 {{ $index % 2 == 0 ? 'pr-md-5' : 'pl-md-5' }}">
                                @if($dusun->gambar)
                                    @php
                                        $images = json_decode($dusun->gambar);
                                        $firstImage = $images[0] ?? null;
                                    @endphp
                                    @if($firstImage)
                                        <img src="{{ asset('storage/' . $firstImage) }}" class="img-fluid rounded shadow" alt="Gambar {{ $dusun->nama }}">
                                    @endif
                                @endif
                            </div>
                            <div class="col-md-6 {{ $index % 2 == 0 ? 'pl-md-5' : 'pr-md-5' }}">
                                <h2 class="text-success mb-3">{{ $dusun->nama }}</h2>
                                <p class="font-weight-bold text-dark mb-3">
                                    Jumlah RT: {{ $dusun->jumlah_rt }}, Jumlah RW: {{ $dusun->jumlah_rw }}
                                </p>
                                <p class="text-muted mb-4">
                                    {{ $dusun->deskripsi }}
                                </p>
                                <a href="{{ route('dusun.show', $dusun->slug) }}" class="btn btn-outline-primary">Selengkapnya</a>
                            </div>
                        </div>
                        @if(!$loop->last)
                            <hr class="my-5">
                        @endif
                    @endforeach

                </div>
            </div>
        </section>
    </main>

    <style>
    .fp-section {
        padding: 4rem 0;
    }
    
    .row {
        margin-bottom: 4rem;
    }
    
    .img-fluid {
        transition: transform 0.3s ease-in-out;
    }
    
    .img-fluid:hover {
        transform: scale(1.05);
    }
    
    @media (max-width: 767px) {
        .row {
            flex-direction: column-reverse !important;
        }
        
        .col-md-6 {
            margin-bottom: 2rem;
        }
    }
</style>

    <x-footer>
        <!-- Footer content -->
    </x-footer>
</x-portal-layout>