<?php

namespace App\Http\Controllers;

use App\Models\ProfilDesa;

class WebController extends Controller
{
    public function index()
    {
        // Ambil data profil desa
        $profileDesa = ProfilDesa::first();

        // Kirim data ke view
        return view('layouts.portal', compact('profileDesa'));
    }
}