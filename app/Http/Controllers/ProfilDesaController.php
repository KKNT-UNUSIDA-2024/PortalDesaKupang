<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilDesa;

class ProfilDesaController extends Controller
{
    // Show the edit form for the single profile desa
    public function edit()
    {
        // Fetch the single entry. Assuming there is always one entry
        $profileDesa = ProfilDesa::first();
        
        // Return the edit view with the profile desa data
        return view('admin.profildesa.edit', compact('profileDesa'));
    }

    // Update the single profile desa entry
    public function update(Request $request)
    {
        // Validate the input
        $validated = $request->validate([
            'logo_desa' => 'nullable|image', // Validate the file if uploaded
            'alamat_desa' => 'required|string|max:255',
            'nama_desa' => 'required|string|max:255',
            'visi_desa' => 'required|string',
            'misi_desa' => 'required|string',
            'struktur_pemerintahan' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'struktur_bpd' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sejarah_desa' => 'required|string',
            'gambar_sejarah_desa' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'peta_lokasi_desa' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'luas_desa' => 'required|numeric',
            'jumlah_penduduk_desa' => 'required|integer',
        ]);

        // Fetch the single profile desa entry
        $profileDesa = ProfilDesa::first();

        // Update the profile desa entry with the validated data
        $profileDesa->update($validated);

        // Handle file uploads if present

        if ($request->hasFile('logo_desa')) {
            $profileDesa->logo_desa = $request->file('logo_desa')->store('profile_desa_images', 'public');

        }
        if ($request->hasFile('struktur_pemerintahan')) {
            $profileDesa->struktur_pemerintahan = $request->file('struktur_pemerintahan')->store('profile_desa_images', 'public');
        }

        if ($request->hasFile('struktur_bpd')) {
            $profileDesa->struktur_bpd = $request->file('struktur_bpd')->store('profile_desa_images', 'public');
        }

        if ($request->hasFile('gambar_sejarah_desa')) {
            $profileDesa->gambar_sejarah_desa = $request->file('gambar_sejarah_desa')->store('profile_desa_images', 'public');
        }

        if ($request->hasFile('peta_lokasi_desa')) {
            $profileDesa->peta_lokasi_desa = $request->file('peta_lokasi_desa')->store('profile_desa_images', 'public');
        }

        // Save the updated entry
        $profileDesa->save();

        // Redirect back with a success message
        return redirect()->route('admin.profildesa.edit')->with('success', 'Profile Desa updated successfully.');
    }



    // Front End Function
        // Show the profile desa data for the front end
        public function show()
        {
            // Fetch the single profile desa entry
            $profileDesa = ProfilDesa::first();
        
            // Check if data exists
            if (!$profileDesa) {
                abort(404, 'Profile Desa not found');
            }
        
            // Return the view with the profile desa data
            return view('profile-desa.show', compact('profileDesa'));
        }
        
    };