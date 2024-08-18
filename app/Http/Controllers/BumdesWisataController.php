<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BumdesWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BumdesWisataController extends Controller
{
    public function index()
    {
        $bumdesWisata = BumdesWisata::all();
        return view('admin.bumdes-wisata.index', compact('bumdesWisata'));
    }

    public function show($id)
{
    $bumdesWisata = BumdesWisata::findOrFail($id);
    return view('admin.bumdes-wisata.show', compact('bumdesWisata'));
}

    public function create()
    {
        return view('admin.bumdes-wisata.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_bumdes_wisata' => 'required|string|max:255',
            'kategori' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal_awal_peminjaman' => 'nullable|date',
            'jatuh_tempo_peminjaman' => 'nullable|date',
        ]);

        $bumdesWisata = new BumdesWisata($validated);

        if ($request->hasFile('image')) {
            $bumdesWisata->image = $request->file('image')->store('bumdes_wisata_images', 'public');
        }

        $bumdesWisata->save();

        return redirect()->route('admin.bumdes-wisata.index')->with('success', 'Bumdes & Wisata created successfully.');
    }

    public function edit($id)
    {
        $bumdesWisata = BumdesWisata::findOrFail($id);
        return view('admin.bumdes-wisata.edit', compact('bumdesWisata'));
    }

    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'nama_bumdes_wisata' => 'required|string|max:255',
        'kategori' => 'required|string',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'tanggal_awal_peminjaman' => 'nullable|date',
        'jatuh_tempo_peminjaman' => 'nullable|date',
    ]);

    $bumdesWisata = BumdesWisata::findOrFail($id);
    $bumdesWisata->update($validated);

    if ($request->hasFile('image')) {
        $bumdesWisata->image = $request->file('image')->store('bumdes_wisata_images', 'public');
    }

    $bumdesWisata->save();

    return redirect()->route('admin.bumdes-wisata.index')->with('success', 'Bumdes & Wisata updated successfully.');
}
    

    public function destroy(BumdesWisata $bumdesWisata)
    {
        $bumdesWisata->delete();
        return redirect()->route('admin.bumdes-wisata.index')->with('success', 'Bumdes & Wisata deleted successfully.');
    }
}
