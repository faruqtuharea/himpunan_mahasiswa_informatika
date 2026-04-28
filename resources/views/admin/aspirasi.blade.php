@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-gray-100">
    <aside class="w-64 bg-navy text-white hidden md:block shadow-xl">
        <div class="p-6">
            <h2 class="text-2xl font-bold text-orange-500">HMIT Admin</h2>
        </div>
        <nav class="mt-6 px-4 space-y-2">
            <a href="{{ route('admin.dashboard') }}" class="block py-3 px-4 rounded-lg hover:bg-white/10 transition">Dashboard</a>
            <a href="{{ route('members.index') }}" class="block py-3 px-4 rounded-lg hover:bg-white/10 transition">Data Anggota</a>
            <a href="#" class="block py-3 px-4 rounded-lg bg-orange-500 font-semibold shadow-lg">Kanal Aspirasi</a>
        </nav>
    </aside>

    <main class="flex-1 p-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-center mb-8" data-aos="fade-down">
                <div>
                    <h1 class="text-3xl font-bold text-navy">Kanal Aspirasi</h1>
                    <p class="text-gray-500 text-sm">Suara dan masukan dari mahasiswa Informatika.</p>
                </div>
                <div class="bg-white px-4 py-2 rounded-lg shadow-sm border border-gray-200">
                    <span class="text-navy font-bold">{{ $aspirations->count() }}</span>
                    <span class="text-gray-500 text-sm"> Pesan Masuk</span>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-6">
                @forelse($aspirations as $item)
                <div class="bg-white rounded-xl shadow-sm border-l-4 border-orange-500 overflow-hidden hover:shadow-md transition-shadow" data-aos="fade-up">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-wider text-orange-600 bg-orange-50 px-2 py-1 rounded">
                                    {{ $item->SUBJEK }}
                                </span>
                                <h3 class="text-xl font-bold text-navy mt-2">{{ $item->SUBJEK }}</h3>
                            </div>
                            <div class="text-right">
                                <p class="text-xs text-gray-400 italic">{{ $item->created_at->diffForHumans() }}</p>
                                <span class="text-sm font-semibold text-navy">
                                    <i class="fa-solid fa-user-pen mr-1 text-orange-500"></i> 
                                    {{ $item->is_anonymous ? 'Anonim' : $item->NAMA_PENGIRIM }}
                                </span>
                            </div>
                        </div>
                        
                        <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                            <p class="text-gray-700 leading-relaxed italic">
                                "{{ $item->PESAN }}"
                            </p>
                        </div>

                        <div class="mt-4 flex justify-end">
                            <form action="{{ route('admin.aspirasi.delete', $item->id) }}" method="POST" onsubmit="return confirm('Hapus aspirasi ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 text-sm font-semibold flex items-center gap-1 transition">
                                    <i class="fa-solid fa-trash-can"></i> Hapus Aspirasi
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @empty
                <div class="bg-white py-20 rounded-xl shadow-sm text-center border-2 border-dashed border-gray-200">
                    <i class="fa-solid fa-comment-slash text-5xl text-gray-200 mb-4"></i>
                    <p class="text-gray-400 font-medium">Belum ada aspirasi yang masuk saat ini.</p>
                </div>
                @endforelse
            </div>
        </div>
    </main>
</div>
@endsection