<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Periksa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    public function dashboard()
    {
        $pasien = Auth::user(); // Ambil data user yang sedang login
        return view('pasien.dashboard', compact('pasien'));
    }

    public function periksaForm()
    {
        // Ambil semua user yang rolenya dokter
        $dokters = User::where('role', 'dokter')->get();
        return view('pasien.periksa', compact('dokters'));
    }

    public function periksaStore(Request $request)
    {
        $request->validate([
            'id_dokter' => 'required|exists:users,id',
        ]);

        Periksa::create([
            'id_pasien' => Auth::id(),
            'id_dokter' => $request->id_dokter,
            'tgl_periksa' => now(),
            'catatan' => $request->catatan,
            'biaya_periksa' => 0
        ]);

        return redirect()->route('pasien.riwayat')->with('success', 'Berhasil membuat periksa baru.');
    }

    public function riwayat()
    {
        $riwayats = Periksa::with('dokter')
                    ->where('id_pasien', Auth::id())
                    ->latest()
                    ->get();

        return view('pasien.riwayat', compact('riwayats'));
    }
}
