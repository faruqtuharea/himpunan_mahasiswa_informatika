@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-gray-100">
    <aside class="w-64 bg-navy text-white hidden md:block shadow-xl">
        <div class="p-6">
            <h2 class="text-2xl font-bold text-orange-500">HMIT Admin</h2>
        </div>
        <nav class="mt-6 px-4 space-y-2">
            <a href="#" class="block py-3 px-4 rounded-lg hover:bg-white/10 transition">Dashboard</a>
            <a href="{{ route('members.index') }}" class="block py-3 px-4 rounded-lg bg-orange-500 font-semibold shadow-lg">Data Anggota</a>
            <a href="#" class="block py-3 px-4 rounded-lg hover:bg-white/10 transition">Kanal Aspirasi</a>
        </nav>
    </aside>

    <main class="flex-1 p-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-center mb-8" data-aos="fade-down">
                <div>
                    <h1 class="text-3xl font-bold text-navy">Data Anggota Himpunan</h1>
                    <p class="text-gray-500 text-sm">Manajemen seluruh data mahasiswa yang terdaftar di HMIT.</p>
                </div>
                <button class="bg-navy hover:bg-[#08152b] text-white px-6 py-2 rounded-lg font-semibold flex items-center gap-2 transition shadow-md">
                    <i class="fa-solid fa-user-plus text-orange-500"></i> Tambah Anggota
                </button>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden" data-aos="fade-up">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50 border-b border-gray-200">
                                <th class="px-6 py-4 text-sm font-bold text-navy uppercase tracking-wider">Nama Lengkap</th>
                                <th class="px-6 py-4 text-sm font-bold text-navy uppercase tracking-wider">NIM</th>
                                <th class="px-6 py-4 text-sm font-bold text-navy uppercase tracking-wider">Angkatan</th>
                                <th class="px-6 py-4 text-sm font-bold text-navy uppercase tracking-wider">Email</th>
                                <th class="px-6 py-4 text-sm font-bold text-navy uppercase tracking-wider text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse($members as $member)
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="font-bold text-navy">{{ $member->nama }}</div>
                                </td>
                                <td class="px-6 py-4">
                                    <span class="bg-navy/5 text-navy px-3 py-1 rounded-md text-sm font-mono">{{ $member->nim }}</span>
                                </td>
                                <td class="px-6 py-4 text-gray-600">
                                    {{ $member->angkatan }}
                                </td>
                                <td class="px-6 py-4 text-gray-600 italic">
                                    {{ $member->email }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-center gap-3">
                                        <a href="#" class="p-2 text-blue-500 hover:bg-blue-50 rounded-lg transition" title="Edit Data">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <form action="{{ route('members.destroy', $member->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition" title="Hapus Data">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="px-6 py-10 text-center text-gray-400">
                                    <i class="fa-solid fa-database text-4xl mb-3 block"></i>
                                    Belum ada data anggota tersimpan.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if($members->count() > 0)
                <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
                    <p class="text-xs text-gray-500">Menampilkan {{ $members->count() }} total anggota terdaftar.</p>
                </div>
                @endif
            </div>
        </div>
    </main>
</div>
@endsection