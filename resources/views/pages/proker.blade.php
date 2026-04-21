@extends('layouts.app')

@section('content')
<section class="bg-navy py-16 text-center border-b-4 border-orange-500">
    <div class="max-w-7xl mx-auto px-4" data-aos="fade-down">
        <h1 class="text-4xl font-bold text-white mb-4">Program Kerja HMIT</h1>
        <p class="text-gray-300 max-w-2xl mx-auto">Menghadirkan inisiatif nyata melalui program kerja yang inovatif dan berdampak bagi mahasiswa dan masyarakat.</p>
    </div>
</section>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow border border-gray-100" data-aos="fade-up">
                <div class="bg-orange-500 px-6 py-2 text-white font-semibold flex justify-between items-center">
                    <span>Pengembangan Wawasan & TI</span>
                    <i class="fa-solid fa-code"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-navy mb-2">IT Bootcamp</h3>
                    <p class="text-gray-600 mb-4 text-sm">Pelatihan intensif seputar Web Development, Data Science, dan UI/UX Design untuk meningkatkan hard skill mahasiswa Informatika.</p>
                    <div class="flex items-center text-sm font-semibold text-orange-500">
                        <i class="fa-regular fa-calendar mr-2"></i> Semester Ganjil (Oktober)
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-navy px-6 py-2 text-white font-semibold flex justify-between items-center">
                    <span>Kesenian & Olahraga</span>
                    <i class="fa-solid fa-futbol"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-navy mb-2">Futsal Cup HMIT</h3>
                    <p class="text-gray-600 mb-4 text-sm">Turnamen futsal antar angkatan dan antar jurusan untuk mempererat tali persaudaraan dan sportivitas mahasiswa.</p>
                    <div class="flex items-center text-sm font-semibold text-navy">
                        <i class="fa-regular fa-calendar mr-2"></i> Semester Genap (Maret)
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow border border-gray-100" data-aos="fade-up">
                <div class="bg-navy px-6 py-2 text-white font-semibold flex justify-between items-center">
                    <span>Sosial Masyarakat</span>
                    <i class="fa-solid fa-hands-holding-child"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-navy mb-2">Go To School (GTS)</h3>
                    <p class="text-gray-600 mb-4 text-sm">Kegiatan pengabdian masyarakat dengan memberikan edukasi literasi digital dan pengenalan dunia IT ke sekolah-sekolah.</p>
                    <div class="flex items-center text-sm font-semibold text-navy">
                        <i class="fa-regular fa-calendar mr-2"></i> Libur Semester (Juli)
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow border border-gray-100" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-orange-500 px-6 py-2 text-white font-semibold flex justify-between items-center">
                    <span>Pengembangan SDM</span>
                    <i class="fa-solid fa-users-gear"></i>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-navy mb-2">Orientasi Jurusan (Osjur)</h3>
                    <p class="text-gray-600 mb-4 text-sm">Program pengenalan budaya kampus, himpunan, dan dunia informatika bagi mahasiswa baru agar lebih solid dan adaptif.</p>
                    <div class="flex items-center text-sm font-semibold text-orange-500">
                        <i class="fa-regular fa-calendar mr-2"></i> Awal Semester Ganjil (Agustus)
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection