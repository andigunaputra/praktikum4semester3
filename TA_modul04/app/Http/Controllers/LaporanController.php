<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function form()
    {
        return view('laporan.form');
    }

    public function simpan(Request $request)
    {
        $validated = $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tinggi_genangan' => 'required|integer|min:10|max:150',
            'tanggal_kejadian' => 'required|date',
        ]);

        Laporan::create($validated);

        return view('laporan.konfirmasi', [
            'message' => 'Laporan banjir berhasil disimpan!',
        ]);
    }

    public function index()
    {
        $laporan = Laporan::all();

        return view('laporan.index', compact('laporan'));
    }
}
