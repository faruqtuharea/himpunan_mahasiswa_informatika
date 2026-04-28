<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member; // Pastikan model Member sudah dibuat

class MemberController extends Controller
{
    // Form Pendaftaran (User)
    public function create()
    {
        $members = member::latest()->get();
        return view('pages.daftar', compact('members'));
    }

    // Proses Simpan Pendaftaran (User)
    public function store(Request $request)
    {
        $request->validate([
            'NAMA' => 'required|string|max:255',
            'NIM' => 'required|unique:members',
            'EMAIL' => 'required',
            'ANGKATAN' => 'required'
        ]);

        Member::create([
            'NAMA'=> $request->NAMA,
            'NIM'=> $request->NIM,
            'EMAIL'=> $request->EMAIL,
            'ANGKATAN' => $request->ANGKATAN,
            'STATUS' =>'pending',
        ]);

        return redirect()->back()->with('success', 'Pendaftaran berhasil dikirim');
    }

    // List Anggota (Admin)
    public function index()
    {
        $members = Member::latest()->get();
        return view('admin.members.index', compact('members'));
    }

    // Update Status/Data Anggota (Admin)
    public function update(Request $request, $id)
    {
        $member = Member::findOrFail($id);
        $member->update($request->all());
        return redirect()->back()->with('success', 'Data anggota berhasil diperbarui.');
    }

    // Hapus Anggota (Admin)
    public function destroy($id)
    {
        Member::destroy($id);
        return redirect()->back()->with('success', 'Anggota berhasil dihapus.');
    }
}
