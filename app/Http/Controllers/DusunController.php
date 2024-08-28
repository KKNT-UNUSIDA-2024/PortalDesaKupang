<?php

namespace App\Http\Controllers;

use App\Models\Dusun;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DusunController extends Controller
{
    public function index()
    {
        $dusuns = Dusun::all(); // Mengambil semua dusun
        return view('admin.dusun.index', compact('dusuns'));
    }

    public function create()
    {
        return view('admin.dusun.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'jumlah_rt' => 'required|integer',
        'jumlah_rw' => 'required|integer',
        'deskripsi' => 'nullable|string',
        'gambar.*' => 'image|nullable',
    ]);

    $dusun = new Dusun();
    $dusun->nama = $request->nama;
    $dusun->slug = Str::slug($request->nama); // Mengisi slug berdasarkan nama
    $dusun->jumlah_rt = $request->jumlah_rt;
    $dusun->jumlah_rw = $request->jumlah_rw;
    $dusun->deskripsi = $request->deskripsi;

    // Simpan gambar jika ada
    if ($request->hasFile('gambar')) {
        $paths = [];
        foreach ($request->file('gambar') as $file) {
            $paths[] = $file->store('images', 'public');
        }
        $dusun->gambar = json_encode($paths);
    }

    $dusun->save();

    return redirect()->route('admin.dusun.index')->with('success', 'Dusun berhasil ditambahkan.');
}

    public function edit($id)
    {
        $dusun = Dusun::findOrFail($id); // Mengambil dusun berdasarkan ID
        return view('admin.dusun.edit', compact('dusun'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'jumlah_rt' => 'required|integer',
        'jumlah_rw' => 'required|integer',
        'deskripsi' => 'nullable|string',
        'gambar.*' => 'image|nullable',
    ]);

    $dusun = Dusun::findOrFail($id);
    $dusun->nama = $request->nama;
    $dusun->slug = Str::slug($request->nama); // Mengupdate slug berdasarkan nama
    $dusun->jumlah_rt = $request->jumlah_rt;
    $dusun->jumlah_rw = $request->jumlah_rw;
    $dusun->deskripsi = $request->deskripsi;

    // Simpan gambar jika ada
    if ($request->hasFile('gambar')) {
        $paths = [];
        foreach ($request->file('gambar') as $file) {
            $paths[] = $file->store('images', 'public');
        }
        $dusun->gambar = json_encode($paths);
    }

    $dusun->save();

    return redirect()->route('dusun.index')->with('success', 'Dusun berhasil diperbarui.');
}

    public function destroy($id)
    {
        $dusun = Dusun::findOrFail($id);
        $dusun->delete(); // Hapus dusun
        return redirect()->route('admin.dusun.index')->with('success', 'Dusun berhasil dihapus.');
    }

    public function showForVisitors()
    {
        $dusuns = Dusun::all(); // Mengambil semua dusun untuk pengunjung
        return view('dusun.index', compact('dusuns')); // Pastikan Anda membuat view ini
    }

    public function show($slug)
{
    $dusun = Dusun::where('slug', $slug)->firstOrFail(); // Mengambil dusun berdasarkan slug
    return view('dusun.show', compact('dusun')); // Pastikan Anda membuat view ini
}
}