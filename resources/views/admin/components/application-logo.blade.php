@if(App\Helpers\ProfilDesaHelper::getLogoDesa())
    <img src="{{ App\Helpers\ProfilDesaHelper::getLogoDesa() }}" alt="Logo Desa" {{ $attributes }}>
@else
    <!-- Fallback logo SVG -->
    <svg viewBox="0 0 316 316" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
        <!-- SVG Path here -->
    </svg>
@endif
