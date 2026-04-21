@extends('layouts.app')

@section('content')
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        
        <div class="text-center mb-12" data-aos="fade-up">
            <h1 class="text-4xl font-bold text-navy">Berita & Kegiatan</h1>
            <div class="w-24 h-1 bg-orange-500 mx-auto mt-4 rounded"></div>
            <p class="text-gray-500 mt-4">Update terbaru seputar acara, prestasi, dan dokumentasi HMIT.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-xl shadow-md overflow-hidden group cursor-pointer" data-aos="zoom-in">
                <div class="h-48 bg-gray-300 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1540317580384-e5d43867caa6?w=600&q=80" alt="Kegiatan" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 left-4 bg-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full">Berita</div>
                </div>
                <div class="p-6">
                    <p class="text-sm text-gray-400 mb-2"><i class="fa-regular fa-clock mr-1"></i> 12 April 2026</p>
                    <h3 class="text-lg font-bold text-navy mb-3 group-hover:text-orange-500 transition-colors">Sukses Gelar IT Bootcamp, Puluhan Mahasiswa Siap Jadi Developer</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Departemen Pengembangan Wawasan & TI sukses menyelenggarakan IT Bootcamp selama 3 hari berturut-turut...</p>
                    <a href="#" class="text-orange-500 font-semibold text-sm flex items-center">Baca Selengkapnya <i class="fa-solid fa-arrow-right ml-2 text-xs"></i></a>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden group cursor-pointer" data-aos="zoom-in" data-aos-delay="100">
                <div class="h-48 bg-gray-300 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1511516024976-5cbab245d81b?w=600&q=80" alt="Kegiatan" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute top-4 left-4 bg-navy text-white text-xs font-bold px-3 py-1 rounded-full">Dokumentasi</div>
                </div>
                <div class="p-6">
                    <p class="text-sm text-gray-400 mb-2"><i class="fa-regular fa-clock mr-1"></i> 05 April 2026</p>
                    <h3 class="text-lg font-bold text-navy mb-3 group-hover:text-orange-500 transition-colors">Keseruan HMIT Go To School di SMA Negeri 1</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">Melihat kembali senyum antusiasme siswa/i saat belajar dasar-dasar pemrograman web bersam tim Sosmas HMIT...</p>
                    <a href="#" class="text-orange-500 font-semibold text-sm flex items-center">Lihat Galeri <i class="fa-solid fa-arrow-right ml-2 text-xs"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection