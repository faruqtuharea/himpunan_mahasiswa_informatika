@extends('layouts.app')
@section('content')
<section class="py-16 bg-navy min-h-screen flex flex-col items-center">
    <div class="max-w-3xl mx-auto px-4 w-full">
        <div class="bg-white rounded-2xl shadow-2xl overflow-hidden" data-aos="zoom-in">
            @if (session('success'))
            <h1 class="bg-green-400 text-green-600">
                {{ session('success') }}
            </h1>
            @endif
            <div class="bg-orange-500 p-6 text-white text-center">
                <h2 class="text-2xl font-bold">Form Pendaftaran Anggota</h2>
                <p class="text-sm opacity-90">Bergabunglah dan berikan dampak bagi Informatika!</p>
            </div>
            <form action="{{ route('daftar.store') }}" method="POST" class="p-8 space-y-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-bold text-navy">Nama Lengkap</label>
                        <input type="text" name="NAMA" class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-orange-500 outline-none" required>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-navy">NIM</label>
                        <input type="text" name="NIM" class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-orange-500 outline-none" required>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-bold text-navy">Angkatan</label>
                        <input type="text" name="ANGKATAN" class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-orange-500 outline-none" required>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-navy">Email</label>
                        <input type="email" name="EMAIL" class="w-full mt-1 p-3 border rounded-lg focus:ring-2 focus:ring-orange-500 outline-none" required>
                    </div>
                </div>
                <button type="submit" class="w-full bg-navy text-white font-bold py-3 rounded-lg hover:bg-opacity-90 transition shadow-lg">Kirim Pendaftaran</button>
            </form>
        </div>
    </div>

    <!--  -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse bg-white ">
            <thead>
                <tr class="border-b border-gray-200">
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
                        <div class="font-bold text-navy">{{ $member->NAMA }}</div>
                    </td>
                    <td class="px-6 py-4">
                        <span class="bg-navy/5 text-navy px-3 py-1 rounded-md text-sm font-mono">{{ $member->NIM }}</span>
                    </td>
                    <td class="px-6 py-4 text-gray-600">
                        {{ $member->ANGKATAN }}
                    </td>
                    <td class="px-6 py-4 text-gray-600 italic">
                        {{ $member->EMAIL }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex justify-center gap-3">
                            <a href="#" class="p-2 text-blue-500 hover:bg-blue-50 rounded-lg transition" title="Edit Data">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            {{-- <form action="{{ route('members.destroy', $member->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition" title="Hapus Data">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                            </form> --}}
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
</section>
@endsection