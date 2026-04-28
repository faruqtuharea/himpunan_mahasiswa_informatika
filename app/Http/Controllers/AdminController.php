<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Aspiration;

class AdminController extends Controller
{
    public function index()
    {
        // Mengambil data untuk statistik dashboard
        $totalMembers = Member::count();
        $pendingMembers = Member::where('status', 'pending')->count();
        $totalAspirations = Aspiration::count();
        
        // Mengambil pendaftar terbaru untuk tabel di dashboard
        $recentMembers = Member::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalMembers', 
            'pendingMembers', 
            'totalAspirations', 
            'recentMembers'
        ));
    }
}
