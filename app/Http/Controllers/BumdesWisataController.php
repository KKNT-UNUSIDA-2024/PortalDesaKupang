<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BumdesWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BumdesWisataExport;
use PDF;

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
        $bumdesWisata = BumdesWisata::all();

        $kategoris = BumdesWisata::select('kategori')->distinct()->get(); // Ambil kategori yang unik
        return view('admin.bumdes-wisata.create',compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_bumdes_wisata' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:255',
            'kategori_baru' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal_awal_peminjaman' => 'required|date',
            'jatuh_tempo_peminjaman' => 'nullable|date',
            'biaya_penyewaan' => 'required|string',
            'nama_penyewa' => 'required|string|max:255',
        ]);

        // Simpan data baru
        $bumdesWisata = new BumdesWisata();
        $bumdesWisata->nama_bumdes_wisata = $request->nama_bumdes_wisata;
        $bumdesWisata->kategori = $request->kategori ?: $request->kategori_baru;
        $bumdesWisata->description = $request->description;
        if ($request->hasFile('image')) {
            $bumdesWisata->image = $request->file('image')->store('images', 'public');
        }
        $bumdesWisata->tanggal_awal_peminjaman = $request->tanggal_awal_peminjaman;
        $bumdesWisata->jatuh_tempo_peminjaman = $request->jatuh_tempo_peminjaman;
        $bumdesWisata->biaya_penyewaan = str_replace('.', '', $request->biaya_penyewaan); // Menghapus titik
        $bumdesWisata->nama_penyewa = $request->nama_penyewa;
        $bumdesWisata->save();

        return redirect()->route('admin.bumdes-wisata.index')->with('success', 'Bumdes & Wisata created successfully.');
    }

    public function edit($id)
    {
        $bumdesWisata = BumdesWisata::findOrFail($id);

        // Ambil semua kategori dari kolom kategori di tabel bumdes_wisata
        $kategoris = BumdesWisata::select('kategori')->distinct()->get(); // Ambil kategori yang unik

        return view('admin.bumdes-wisata.edit', compact('bumdesWisata', 'kategoris'));
    }

    public function update(Request $request, $id)
{
    // Validasi input
    $validated = $request->validate([
        'nama_bumdes_wisata' => 'required|string|max:255',
        'kategori' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'tanggal_awal_peminjaman' => 'required|date', // Pastikan ini diisi
        'jatuh_tempo_peminjaman' => 'required|date', // Ini bisa diisi atau tidak
        'biaya_penyewaan' => 'required|numeric', // Pastikan ini diisi
        'nama_penyewa' => 'required|string|max:255', // Pastikan ini diisi
    ]);

    // Temukan data BumdesWisata berdasarkan ID
    $bumdesWisata = BumdesWisata::findOrFail($id);

    // Update data BumdesWisata
    $bumdesWisata->nama_bumdes_wisata = $validated['nama_bumdes_wisata'];
    $bumdesWisata->kategori = $validated['kategori'];
    $bumdesWisata->description = $validated['description'];
    $bumdesWisata->tanggal_awal_peminjaman = $validated['tanggal_awal_peminjaman']; // Update tanggal awal peminjaman
    $bumdesWisata->jatuh_tempo_peminjaman = $validated['jatuh_tempo_peminjaman']; // Update jatuh tempo peminjaman
    $bumdesWisata->biaya_penyewaan = $validated['biaya_penyewaan']; // Update biaya penyewaan
    $bumdesWisata->nama_penyewa = $validated['nama_penyewa']; // Update nama penyewa

    // Tangani upload gambar
    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if ($bumdesWisata->image) {
            Storage::disk('public')->delete($bumdesWisata->image);
        }
        // Simpan gambar baru
        $bumdesWisata->image = $request->file('image')->store('bumdes_wisata_images', 'public');
    }

    $bumdesWisata->save(); // Simpan perubahan pada BumdesWisata

    return redirect()->route('admin.bumdes-wisata.index')->with('success', 'Bumdes & Wisata updated successfully.');
    }


    public function destroy($id)
    {
        $item = BumdesWisata::find($id);
        if ($item) {
            $item->delete();
            return redirect()->route('admin.bumdes-wisata.index')->with('success', 'Data berhasil dihapus.');
        }
        return redirect()->route('admin.bumdes-wisata.index')->with('error', 'Data tidak ditemukan.');
    }

public function downloadPDF()
{
    $data = BumdesWisata::all(); // Ambil data dari model
    $pdf = PDF::loadView('admin.bumdes-wisata.pdf', compact('data')); // Pastikan view ini ada
    return $pdf->download('bumdes_wisata.pdf');
}

public function downloadExcel()
{
    return Excel::download(new BumdesWisataExport, 'bumdes_wisata.xlsx'); // Proses download
    // Redirect ke halaman index dengan notifikasi
    return redirect()->route('admin.bumdes-wisata.index')->with('success', 'Excel berhasil diunduh.');
}

}
