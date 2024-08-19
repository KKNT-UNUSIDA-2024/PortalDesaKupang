<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\ProfilDesa;

class ProfileComposer
{
    public function compose(View $view)
    {
        // Ambil data profil desa
        $profileDesa = ProfilDesa::first();

        // Bagikan data ke view
        $view->with('profileDesa', $profileDesa);
    }
}