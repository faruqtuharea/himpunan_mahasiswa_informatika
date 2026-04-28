<nav class="bg-navy text-white fixed w-full z-50 top-0 shadow-lg transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex-shrink-0 flex items-center gap-3 cursor-pointer">
                <img src="{{ asset('logo hmit.png') }}" class="size-8" alt="" />
                <span class="font-bold text-2xl tracking-wider">HMIT</span>
            </div>
            
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="hover:text-orange-500 transition-colors {{ request()->routeIs('home') ? 'text-orange-500 font-semibold' : '' }}">Home</a>
                <a href="{{ route('tentang') }}" class="hover:text-orange-500 transition-colors {{ request()->routeIs('tentang') ? 'text-orange-500 font-semibold' : '' }}">Tentang Kami</a>
                <a href="{{ route('proker') }}" class="hover:text-orange-500 transition-colors {{ request()->routeIs('proker') ? 'text-orange-500 font-semibold' : '' }}">Program Kerja</a>
                <a href="{{ route('berita') }}" class="hover:text-orange-500 transition-colors {{ request()->routeIs('berita') ? 'text-orange-500 font-semibold' : '' }}">Berita</a>
                <a href="{{ route('aspirasi') }}" class="hover:text-orange-500 transition-colors {{ request()->routeIs('aspirasi') ? 'text-orange-500 font-semibold' : '' }}">Aspirasi</a>
                <a href="{{ route('daftar') }}" class="hover:text-orange-500 transition-colors {{ request()->routeIs('daftar') ? 'text-orange-500 font-semibold' : '' }}">Daftar</a>
                <a href="{{ route('kontak') }}" class="bg-orange-500 hover:bg-orange-600 text-white px-5 py-2 rounded-full font-semibold transition-all shadow-md">Hubungi Kami</a>
            </div>
        </div>
    </div>
</nav>