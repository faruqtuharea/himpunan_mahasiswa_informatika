@extends('layouts.app')
@section('content')
<div class="py-16 bg-gray-100 min-h-screen">
    <div class="max-w-xl mx-auto px-4">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-navy">Suara <span class="text-orange-500">Informatika</span></h1>
            <p class="text-gray-600 mt-2">Kritik, saran, atau ide inovatif Anda sangat berarti bagi kami.</p>
        </div>
        <form action="{{ route('aspirasi.store') }}" method="POST" class="bg-white p-8 rounded-xl shadow-md border-b-8 border-orange-500">
            @csrf
            <div class="mb-4">
                <label class="block text-navy font-semibold">Subjek Aspirasi</label>
                <input type="text" name="subjek" class="w-full mt-1 p-3 bg-gray-50 border rounded-lg" placeholder="Contoh: Fasilitas Lab, Event, dll">
            </div>
            <div class="mb-4">
                <label class="block text-navy font-semibold">Pesan Anda</label>
                <textarea name="pesan" rows="5" class="w-full mt-1 p-3 bg-gray-50 border rounded-lg" placeholder="Tuliskan aspirasi Anda secara detail..."></textarea>
            </div>
            <div class="flex items-center gap-2 mb-6">
                <input type="checkbox" name="is_anonymous" id="anon" class="w-4 h-4 accent-orange-500">
                <label for="anon" class="text-sm text-gray-500">Kirim sebagai Anonim</label>
            </div>
            <button class="w-full bg-orange-500 text-white font-bold py-3 rounded-lg hover:bg-orange-600 transition">Kirim Suara</button>
        </form>
    </div>
    <div class="grid grid-cols-1 gap-6">
        @forelse($aspirations as $item)
        <div class="bg-white rounded-xl shadow-sm border-l-4 border-orange-500 overflow-hidden hover:shadow-md transition-shadow" data-aos="fade-up">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>                
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
@endsection