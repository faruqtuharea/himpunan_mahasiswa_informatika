<footer class="bg-navy text-white pt-12 pb-6 border-t-4 border-orange-500">
    <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
        <div>
            <div class="flex items-center gap-3 mb-4">
                <i class="fa-solid fa-code text-orange-500 text-2xl"></i>
                <span class="font-bold text-xl">HMIT</span>
            </div>
            <p class="text-gray-400 text-sm">
                Dari Inisiatif Menjadi Dampak. Wadah kolaborasi dan inovasi mahasiswa Informatika.
            </p>
        </div>
        <div>
            <h4 class="font-bold text-lg mb-4 text-orange-500">Tautan Cepat</h4>
            <ul class="space-y-2 text-gray-400 text-sm">
                <li><a href="{{ route('tentang') }}" class="hover:text-white transition-colors">Tentang Kami</a></li>
                <li><a href="{{ route('proker') }}" class="hover:text-white transition-colors">Program Kerja</a></li>
                <li><a href="{{ route('berita') }}" class="hover:text-white transition-colors">Berita Terkini</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-bold text-lg mb-4 text-orange-500">Sekretariat</h4>
            <p class="text-gray-400 text-sm mb-2"><i class="fa-solid fa-location-dot mr-2"></i> Gedung Fakultas Ilmu Komputer, Ruang HMIT</p>
            <p class="text-gray-400 text-sm mb-4"><i class="fa-solid fa-envelope mr-2"></i> hmit@kampus.ac.id</p>
            <div class="flex gap-4">
                <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-orange-500 transition-colors"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center hover:bg-orange-500 transition-colors"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
    <div class="text-center border-t border-white/10 pt-6 text-gray-500 text-sm">
        &copy; {{ date('Y') }} Himpunan Mahasiswa Informatika. All rights reserved.
    </div>
</footer>