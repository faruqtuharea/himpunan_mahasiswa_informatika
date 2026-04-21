@extends('layouts.app')

@section('content')
<section class="bg-navy text-white relative overflow-hidden py-32 lg:py-48">
    <div class="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')] bg-cover bg-center"></div>
    <div class="max-w-7xl mx-auto px-4 relative z-10 text-center" data-aos="fade-up">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 leading-tight">
            Himpunan Mahasiswa <span class="text-orange-500">Informatika</span>
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 mb-8 italic">
            
        </p>
        <p class="max-w-2xl mx-auto text-gray-400 mb-10">
            Wadah kolaborasi, inovasi, dan pengembangan diri bagi seluruh mahasiswa Informatika untuk menciptakan teknologi yang berdampak bagi masyarakat.
        </p>
        <div class="flex justify-center gap-4">
            <a href="{{ route('tentang') }}" class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-full font-semibold transition-all">Kenali Kami</a>
            <a href="{{ route('proker') }}" class="border border-orange-500 text-orange-500 hover:bg-orange-500 hover:text-white px-8 py-3 rounded-full font-semibold transition-all">Program Kerja</a>
        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-12 items-center">
        <div data-aos="fade-right">
            <h2 class="text-3xl font-bold text-navy mb-6"><i class="fa-solid fa-bullseye text-orange-500 mr-2"></i> Visi Kami</h2>
            <p class="text-gray-600 leading-relaxed text-lg border-l-4 border-orange-500 pl-4 bg-gray-50 py-4 rounded-r-lg">
                Mewujudkan Himpunan Mahasiswa Informatika yang progresif, kolaboratif, dan berdampak melalui inisiatif-inisiatif inovatif yang relevan dengan perkembangan teknologi dan kebutuhan mahasiswa.
            </p>
        </div>
        <div data-aos="fade-left" class="grid grid-cols-2 gap-4 text-center">
            <div class="p-6 bg-navy text-white rounded-xl shadow-lg">
                <i class="fa-solid fa-laptop-code text-4xl text-orange-500 mb-4"></i>
                <h3 class="font-semibold">Teknologi Relevan</h3>
            </div>
            <div class="p-6 bg-orange-500 text-white rounded-xl shadow-lg">
                <i class="fa-solid fa-users text-4xl mb-4"></i>
                <h3 class="font-semibold">Kolaborasi Solid</h3>
            </div>
        </div>
    </div>
</section>
@endsection