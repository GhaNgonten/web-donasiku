<?php

namespace App\Http\Controllers;
use App\Models\Donasi;
use App\Models\Donatur;
use App\Models\KategoriDonasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function index()
    {
        $daftarDonasi = Donasi::with(['donatur', 'kategori'])
        ->latest()
        ->get();

        return view('beranda', compact('daftarDonasi'));
    }

    public function create()
    {
        $categories = KategoriDonasi::all();

        return view('form_donasi', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_donatur' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:20',
            'kategori_id' => 'required|exists:kategori,id',
            'nominal' => 'required|integer|min:1',
            'pesan' => 'nullable|string',
        ]);

        // Simpan data donatur
        $donatur = Donatur::create([
            'nama_donatur' => $request->nama_donatur,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ]);

        // Simpan data donasi
        Donasi::create([
            'donatur_id' => $donatur->id,
            'kategori_id' => $request->kategori_id,
            'nominal' => $request->nominal,
            'pesan' => $request->pesan,
            'tanggal_donasi' => now(),
        ]);

        return redirect()->route('home')->with('success', 'Donasi berhasil disimpan!');
    }

    public function daftarDonasi()
    {
        $donasi = Donasi::with(['donatur', 'kategori'])->orderBy('tanggal_donasi', 'desc')->get();
        return view('index', compact('donasi'));
    }
}
