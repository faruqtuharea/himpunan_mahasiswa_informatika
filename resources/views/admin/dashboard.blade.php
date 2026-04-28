<div class="flex min-h-screen bg-gray-200 font-sans">
    <aside class="w-64 bg-navy text-white p-6">
        <h2 class="text-2xl font-bold text-orange-500 mb-10">HMIT ADMIN</h2>
        <nav class="space-y-4">
            <a href="#" class="block p-3 bg-orange-500 rounded-lg">Dashboard</a>
            <a href="{{ route('members.index') }}" class="block p-3 hover:bg-white/10 rounded-lg transition">Data Anggota</a>
            <a href="{{ route('admin.aspirasi') }}" class="block p-3 hover:bg-white/10 rounded-lg transition">Kanal Aspirasi</a>
        </nav>
    </aside>

    <main class="flex-1 p-10">
        <header class="flex justify-between items-center mb-10">
            <h1 class="text-2xl font-bold text-navy">Ringkasan Organisasi</h1>
            <div class="text-navy font-semibold">Halo, Admin!</div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-xl shadow-sm border-l-8 border-navy">
                <p class="text-gray-500">Total Pendaftar</p>
                <h3 class="text-3xl font-bold text-navy">124</h3>
            </div>
            <div class="bg-white p-6 rounded-xl shadow-sm border-l-8 border-orange-500">
                <p class="text-gray-500">Aspirasi Masuk</p>
                <h3 class="text-3xl font-bold text-navy">12</h3>
            </div>
        </div>

        <div class="mt-12 bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6 border-b flex justify-between items-center">
                <h3 class="font-bold text-navy text-lg">Daftar Pendaftar Terbaru</h3>
                <button class="bg-navy text-white px-4 py-2 rounded text-sm">+ Tambah Manual</button>
            </div>
            <table class="w-full text-left">
                <thead class="bg-gray-50 text-gray-400 uppercase text-xs">
                    <tr>
                        <th class="p-4">Nama</th>
                        <th class="p-4">NIM</th>
                        <th class="p-4">Status</th>
                        <th class="p-4">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm">
                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="p-4 font-semibold text-navy">Ahmad Zulkifli</td>
                        <td class="p-4">220101032</td>
                        <td class="p-4"><span class="bg-orange-100 text-orange-600 px-2 py-1 rounded-full text-xs">Pending</span></td>
                        <td class="p-4 flex gap-2">
                            <button class="text-blue-500 hover:underline"><i class="fa-solid fa-edit"></i></button>
                            <button class="text-red-500 hover:underline"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>