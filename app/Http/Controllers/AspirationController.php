<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspiration;

class AspirationController extends Controller
{
    // Form Aspirasi (User)
    public function create()
    {
        $aspirations = Aspiration::latest()->get();
        return view('pages.aspirasi', compact('aspirations'));
    }

    // Simpan Aspirasi (User)
    public function store(Request $request)
    {
        $request->validate([
            'subjek' => 'required|max:100',
            'pesan' => 'required'
        ]);

        Aspiration::create([
            'subjek' => $request->subjek,
            'pesan' => $request->pesan,
            'is_anonymous' => $request->has('is_anonymous'),
            'nama_pengirim' => $request->has('is_anonymous') ? 'Anonim' : $request->nama_pengirim,
        ]);

        return redirect()->back()->with('success', 'Terima kasih atas aspirasi Anda!');
    }

    // Lihat Semua Aspirasi (Admin)
    public function index()
    {
        $aspirations = Aspiration::latest()->get();
        return view('admin.aspirations', compact('aspirations'));
    }

    // Hapus Aspirasi (Admin)
    public function destroy($id)
    {
        Aspiration::destroy($id);
        return redirect()->back()->with('success', 'Aspirasi telah diarsipkan/dihapus.');
    }
}
