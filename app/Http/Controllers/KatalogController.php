<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Katalog;
use App\Models\BumdesWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KatalogController extends Controller
{
    public function index()
    {
        $katalogs = Katalog::all();
        return view('admin.katalog.index', compact('katalogs'));
    }

    public function create()
    {
        return view('admin.katalog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_wisata' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $katalog = new Katalog();
        $katalog->nama_wisata = $validated['nama_wisata'];
        $katalog->description = $validated['description'] ?? null;

        if ($request->hasFile('image')) {
            $katalog->image = $request->file('image')->store('katalog_images', 'public');
        }

        $katalog->save();

        return redirect()->route('admin.katalog.index')->with('success', 'Item created successfully.');
    }

    public function show(Katalog $katalog)
    {
        return view('admin.katalog.show', compact('katalog'));
    }

    public function edit(Katalog $katalog)
    {
        return view('admin.katalog.edit', compact('katalog'));
    }

    public function update(Request $request, Katalog $katalog)
    {
        $validated = $request->validate([
            'nama_wisata' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $katalog->nama_wisata = $validated['nama_wisata'];
        $katalog->description = $validated['description'] ?? null;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($katalog->image) {
                Storage::disk('public')->delete($katalog->image);
            }
            $katalog->image = $request->file('image')->store('katalog_images', 'public');
        }

        $katalog->save();

        return redirect()->route('admin.katalog.index')->with('success', 'Item updated successfully.');
    }


    public function destroy(Katalog $katalog)
    {
        $katalog->delete();
        return redirect()->route('admin.katalog.index')->with('success', 'Item deleted successfully.');
    }

    public function publicIndex()
    {
        $katalogs = Katalog::all(); // Atau sesuaikan dengan query yang Anda inginkan
        $bumdesWisata = BumdesWisata::all();
        return view('katalog.index', compact('katalogs','bumdesWisata'));
    }


    public function publicShow(Katalog $katalog)
    {
        return view('katalog.show', compact('katalog'));
    }
}
