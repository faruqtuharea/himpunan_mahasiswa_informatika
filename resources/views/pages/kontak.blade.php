@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        
        <div class="text-center mb-12" data-aos="fade-up">
            <h1 class="text-4xl font-bold text-navy">Hubungi Kami</h1>
            <div class="w-24 h-1 bg-orange-500 mx-auto mt-4 rounded"></div>
            <p class="text-gray-500 mt-4">Punya pertanyaan, ide, atau ingin berkolaborasi? Jangan ragu untuk menghubungi kami.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <div data-aos="fade-right">
                <div class="bg-white p-8 rounded-xl shadow-md border-t-4 border-navy mb-8">
                    <h3 class="text-2xl font-bold text-navy mb-6">Informasi Kontak</h3>
                    
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-location-dot text-orange-500 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-navy">Sekretariat HMIT</h4>
                            <p class="text-gray-600 text-sm mt-1">Gedung Fakultas Ilmu Komputer Lt. 1, Ruang Kemahasiswaan, Kampus Utama.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fa-solid fa-envelope text-orange-500 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-navy">Email Organisasi</h4>
                            <p class="text-gray-600 text-sm mt-1">halo@hmit-kampus.ac.id</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fa-brands fa-instagram text-orange-500 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-navy">Media Sosial</h4>
                            <p class="text-gray-600 text-sm mt-1">@hmit_official</p>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left">
                <div class="bg-white p-8 rounded-xl shadow-md border-t-4 border-orange-500">
                    <h3 class="text-2xl font-bold text-navy mb-6">Kirim Pesan</h3>
                    <form action="#" method="POST">
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" id="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-shadow" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-shadow" placeholder="email@contoh.com">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Pesan</label>
                            <textarea id="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-shadow" placeholder="Tuliskan pesan Anda di sini..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-navy hover:bg-[#08152b] text-white font-bold py-3 px-4 rounded-lg transition-colors flex items-center justify-center gap-2">
                            Kirim Pesan <i class="fa-regular fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection