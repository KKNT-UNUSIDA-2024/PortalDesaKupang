@extends('layouts.portal')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold">{{ $katalog->nama_wisata }}</h1>
        <p class="mt-2">{{ $katalog->description }}</p>
        @if ($katalog->image)
            <img src="{{ asset('storage/' . $katalog->image) }}" alt="{{ $katalog->nama_wisata }}" class="mt-4">
        @endif
    </div>
@endsection
