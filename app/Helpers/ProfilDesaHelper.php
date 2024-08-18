<?php

namespace App\Helpers;

use App\Models\ProfilDesa;

class ProfilDesaHelper
{
    public static function getProfilDesa()
    {
        return ProfilDesa::first(); // Assuming you have only one record
    }

    public static function getLogoDesa()
    {
        $profileDesa = \App\Models\ProfilDesa::first();
        if ($profilDesa && $profilDesa->logo_desa) {
            // Menghasilkan URL untuk file di storage
            return Storage::url($profilDesa->logo_desa);
        }
        return null;
    }

    public static function getAlamatDesa()
    {
        $profile = self::getProfilDesa();
        return $profile ? $profile->alamat_desa : null;
    }

    // Repeat for all fields you need
}
