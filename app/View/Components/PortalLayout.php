<?php

namespace App\View\Components;

use App\Models\Dusun; 
use Illuminate\View\Component;
use Illuminate\View\View;

class PortalLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */

    public function render(): View
    {
        $dusuns = Dusun::all();
        return view('layouts.portal', compact('dusuns'));
    }
}
