@extends('layouts.app')

@section('content')
<div class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4">
        
        <div class="text-center mb-16" data-aos="fade-up">
            <h1 class="text-4xl font-bold text-navy">Struktur Organisasi HMIT</h1>
            <div class="w-24 h-1 bg-orange-500 mx-auto mt-4 rounded"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16" data-aos="fade-up" data-aos-delay="100">
            <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-navy text-center hover:-translate-y-2 transition-transform">
                <div class="w-20 h-20 bg-gray-200 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <i class="fa-solid fa-user-tie text-2xl text-navy"></i>
                </div>
                <h3 class="font-bold text-lg text-navy">Ketua Himpunan</h3>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-navy text-center hover:-translate-y-2 transition-transform">
                <div class="w-20 h-20 bg-gray-200 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <i class="fa-solid fa-user-tie text-2xl text-navy"></i>
                </div>
                <h3 class="font-bold text-lg text-navy">Wakil Ketua</h3>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-orange-500 text-center hover:-translate-y-2 transition-transform">
                <div class="w-20 h-20 bg-gray-200 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <i class="fa-solid fa-file-signature text-2xl text-orange-500"></i>
                </div>
                <h3 class="font-bold text-lg text-navy">Sekretaris</h3>
                <p class="text-sm text-gray-500 mt-2">Notulasi & Administrasi</p>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-md border-t-4 border-orange-500 text-center hover:-translate-y-2 transition-transform">
                <div class="w-20 h-20 bg-gray-200 rounded-full mx-auto mb-4 flex items-center justify-center">
                    <i class="fa-solid fa-wallet text-2xl text-orange-500"></i>
                </div>
                <h3 class="font-bold text-lg text-navy">Bendahara</h3>
                <p class="text-sm text-gray-500 mt-2">Keuangan Himpunan</p>
            </div>
        </div>

        <h2 class="text-2xl font-bold text-center text-navy mb-8">Departemen Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6" data-aos="fade-up" data-aos-delay="200">
            @php
                $departments = [
                    ['name' => 'Pengembangan Wawasan & TI', 'icon' => 'fa-code', 'proker' => 'IT Bootcamp'],
                    ['name' => 'Kesenian & Olahraga', 'icon' => 'fa-futbol', 'proker' => 'Futsal Cup'],
                    ['name' => 'Media', 'icon' => 'fa-camera', 'proker' => 'Publikasi & Desain'],
                    ['name' => 'Sosial Masyarakat', 'icon' => 'fa-hands-holding-child', 'proker' => 'Go to School'],
                    ['name' => 'Pengembangan SDM', 'icon' => 'fa-users-gear', 'proker' => 'Osjur'],
                    ['name' => 'Kewirausahaan', 'icon' => 'fa-store', 'proker' => 'HMIT PDH'],
                ];
            @endphp

            @foreach($departments as $dept)
            <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-lg transition-shadow border border-gray-100 flex items-start gap-4">
                <div class="bg-navy p-3 rounded-lg text-white">
                    <i class="fa-solid {{ $dept['icon'] }} text-xl w-6 text-center"></i>
                </div>
                <div>
                    <h4 class="font-bold text-navy leading-tight">{{ $dept['name'] }}</h4>
                    <p class="text-sm text-orange-500 mt-1 font-medium"><i class="fa-solid fa-star text-xs"></i> {{ $dept['proker'] }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection