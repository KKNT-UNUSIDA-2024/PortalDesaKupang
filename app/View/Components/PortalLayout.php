<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class PortalLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */


    public function render(View $view)
    {
        // Ambil data profil desa
        $profileDesa = ProfilDesa::first();

        // Bagikan data ke view
        $view->with('layouts.portal', $profileDesa);
    }
}
