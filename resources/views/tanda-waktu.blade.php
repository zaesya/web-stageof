<!DOCTYPE html>
<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
 @vite(['resources/css/app.css', 'resources/js/app.js'])
<title>Tanda Waktu - BMKG Stasiun Geofisika Tangerang</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&amp;family=Oswald:wght@500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#0f235cff", // Deep Blue
                        secondary: "#3ba5f6ff", // Bright Blue for accents
                        "background-light": "#f3f4f6", // Cool Gray 100
                        "background-dark": "#0f172a", // Slate 900
                        "surface-light": "#ffffff",
                        "surface-dark": "#1e293b", // Slate 800
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                        display: ["Oswald", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                    },
                },
            },
        };
    </script>
<style>
        .hero-pattern {
            background-color: #1e3a8a;
            background-image: url(https://lh3.googleusercontent.com/aida-public/AB6AXuAe_CGOSF75Ky1iEBlRttZRAILrS1fQdKgVyhjCmRzVWlxENSTTrmzWt6EDbjYHFp8F9CCLem3eM_DUPx6OuDDW4UyHlEgGRYlAD_ZQss0FlA_R3S3CQGPn1WkpBD4RJSX5FeewFlK4lvQxZDDCpwWhqTmh_qj6QNcZyUf_OGwMIAV_9ozmf5jinGSx-TOi1uF-svi_iWavnMtmfdFLi-DpbZf4wzV0S8q8xs4jmq0Sd5Cv1nfZ9aP2vVDV7NXs51KHh_lP-SwU_ig)
        }
        .group:hover .group-hover\:visible {
            visibility: visible;
        }
        .group:hover .group-hover\:opacity-100 {
            opacity: 1;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200 font-sans transition-colors duration-300">
@include('partials.navbar')

<div class="relative bg-primary h-[300px] overflow-hidden">
<div class="absolute inset-0 bg-primary mix-blend-multiply opacity-80"></div>
<div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
<img alt="Background" class="absolute inset-0 w-full h-full object-cover opacity-30 mix-blend-luminosity" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKi0_nkKvXM6RI5rZN4suP9Oob311ci4cuQE64CVWNNgfb-Mzier_6_z36dYFP-gnYUjTBFvem-KKePkI2rE5I8_-gCKbK60UYKolAcCPYv56xPnwMRf2-vCznlxKEVbKiNtjsX_5OCVlE5wrq8gDBADBlpfmg3VnfbEGRBSRSt8mSGU_l8nTy8JzFSLQdL5NUN0BN5aGDJn5U9KfIcRPl2XH_EaW-VkSfVl5tJowd9UVzJwBZGWgLvCa5xOgK7LCwVy9K5GCc4hM"/>
<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
<h1 class="text-3xl md:text-5xl font-display font-bold text-white mb-2 tracking-wider uppercase drop-shadow-sm">
                Tanda Waktu
            </h1>
<div class="flex items-center gap-2 text-blue-200 text-sm">
<a class="hover:text-white transition" href="#">Beranda</a>
<span class="material-symbols-outlined text-xs">chevron_right</span>
<span class="text-white">Tanda Waktu</span>
</div>
</div>
</div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<div class="lg:col-span-2 space-y-8">
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 p-6 md:p-8">
<h2 class="text-2xl font-display font-bold text-primary dark:text-blue-400 mb-4 flex items-center gap-3">
<span class="material-symbols-outlined text-3xl">schedule</span>
                        Layanan Tanda Waktu
                    </h2>
<p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                        BMKG Stasiun Geofisika Tangerang menyediakan informasi tanda waktu yang meliputi pengamatan hilal untuk penentuan awal bulan Hijriah, pengamatan gerhana matahari dan bulan, serta data terbit terbenam matahari dan bulan. Informasi ini penting untuk mendukung kebutuhan masyarakat, kementerian agama, dan instansi terkait.
                    </p>
</div>
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 overflow-hidden">
<div class="bg-gray-50 dark:bg-gray-700/50 px-6 py-4 border-b border-gray-100 dark:border-gray-700">
<h3 class="font-bold text-gray-800 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-secondary">dark_mode</span>
                            Pengamatan Hilal &amp; Gerhana
                        </h3>
</div>
<div class="p-6 grid md:grid-cols-2 gap-6">
<div class="group border border-gray-200 dark:border-gray-600 rounded-lg overflow-hidden hover:shadow-md transition">
<div class="h-40 bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
<img alt="Hilal" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" src="{{ asset('images/ilal.png') }}"/>
<div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition"></div>
</div>
<div class="p-4">
<h4 class="font-bold text-gray-900 dark:text-white mb-2">Laporan Rukyatul Hilal</h4>
<p class="text-sm text-gray-600 dark:text-gray-300 mb-4 line-clamp-2">Hasil pengamatan hilal penentuan awal bulan Ramadhan 1445 H di Tanjung Pasir.</p>
<a class="text-sm text-primary dark:text-blue-400 font-medium hover:underline flex items-center gap-1" href="#">Baca Laporan <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
</div>
</div>
<div class="group border border-gray-200 dark:border-gray-600 rounded-lg overflow-hidden hover:shadow-md transition">
<div class="h-40 bg-gray-200 dark:bg-gray-700 relative overflow-hidden">
        <img alt="Gerhana" class="w-full h-full object-cover group-hover:scale-105 transition duration-500 opacity-80" src="{{ asset('images/gerhana.png') }}"/>
        <div class="absolute inset-0 bg-blue-900/30"></div>
</div>
<div class="p-4">
<h4 class="font-bold text-gray-900 dark:text-white mb-2">Informasi Gerhana 2024</h4>
<p class="text-sm text-gray-600 dark:text-gray-300 mb-4 line-clamp-2">Peta visibilitas dan jadwal gerhana matahari dan bulan yang akan melintasi wilayah Indonesia.</p>
<a class="text-sm text-primary dark:text-blue-400 font-medium hover:underline flex items-center gap-1" href="#">Lihat Jadwal <span class="material-symbols-outlined text-sm">arrow_forward</span></a>
</div>
</div>
</div>
</div>
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 overflow-hidden">
<div class="bg-gray-50 dark:bg-gray-700/50 px-6 py-4 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center flex-wrap gap-2">
<h3 class="font-bold text-gray-800 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-secondary">wb_twilight</span>
                            Terbit Terbenam Matahari - Tangerang
                        </h3>
<span class="text-xs font-medium text-gray-500 bg-white dark:bg-gray-600 px-2 py-1 rounded border border-gray-200 dark:border-gray-500">November 2023</span>
</div>
<div class="overflow-x-auto">
<table class="w-full text-sm text-left text-gray-600 dark:text-gray-300">
<thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-200">
<tr>
<th class="px-6 py-3" scope="col">Tanggal</th>
<th class="px-6 py-3" scope="col">Terbit</th>
<th class="px-6 py-3" scope="col">Transit</th>
<th class="px-6 py-3" scope="col">Terbenam</th>
</tr>
</thead>
<tbody>
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white">01 Nov</td>
<td class="px-6 py-4">05:32 WIB</td>
<td class="px-6 py-4">11:45 WIB</td>
<td class="px-6 py-4">17:58 WIB</td>
</tr>
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white">02 Nov</td>
<td class="px-6 py-4">05:32 WIB</td>
<td class="px-6 py-4">11:45 WIB</td>
<td class="px-6 py-4">17:58 WIB</td>
</tr>
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white">03 Nov</td>
<td class="px-6 py-4">05:31 WIB</td>
<td class="px-6 py-4">11:45 WIB</td>
<td class="px-6 py-4">17:58 WIB</td>
</tr>
<tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white">04 Nov</td>
<td class="px-6 py-4">05:31 WIB</td>
<td class="px-6 py-4">11:45 WIB</td>
<td class="px-6 py-4">17:59 WIB</td>
</tr>
</tbody>
</table>
</div>
<div class="p-4 border-t border-gray-100 dark:border-gray-700 bg-gray-50 dark:bg-gray-800 flex justify-center">
<a class="text-sm text-primary dark:text-blue-400 font-medium hover:underline" href="#">Unduh Data Lengkap (PDF)</a>
</div>
</div>
</div>
<div class="space-y-8">
<div class="bg-primary text-white rounded-xl shadow-lg p-6 relative overflow-hidden">
<div class="absolute -right-4 -top-4 opacity-10">
<span class="material-symbols-outlined text-[150px]">sunny</span>
</div>
<h3 class="font-display font-bold text-lg mb-6 relative z-10">Informasi Hari Ini</h3>
<div class="space-y-4 relative z-10">
<div class="flex justify-between items-center border-b border-white/20 pb-2">
<span class="text-blue-200 text-sm">Tanggal</span>
<span class="font-bold">12 Nov 2023</span>
</div>
<div class="flex justify-between items-center border-b border-white/20 pb-2">
<span class="text-blue-200 text-sm">Terbit Matahari</span>
<span class="font-bold">05:30 WIB</span>
</div>
<div class="flex justify-between items-center border-b border-white/20 pb-2">
<span class="text-blue-200 text-sm">Terbenam Matahari</span>
<span class="font-bold">17:59 WIB</span>
</div>
<div class="flex justify-between items-center pt-2">
<span class="text-blue-200 text-sm">Fase Bulan</span>
<span class="font-bold flex items-center gap-2"><span class="material-symbols-outlined text-yellow-400 text-sm">brightness_3</span> Sabit Akhir</span>
</div>
</div>
</div>
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm border border-gray-100 dark:border-gray-700 p-6">
<h3 class="font-bold text-gray-800 dark:text-white mb-4">Layanan Lainnya</h3>
<ul class="space-y-2">
<li>
<a class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition text-gray-700 dark:text-gray-300" href="#">
<div class="bg-blue-100 dark:bg-blue-900/50 p-2 rounded text-primary dark:text-blue-300">
<span class="material-symbols-outlined text-sm">calendar_month</span>
</div>
<span class="text-sm font-medium">Kalender Hijriah</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition text-gray-700 dark:text-gray-300" href="#">
<div class="bg-blue-100 dark:bg-blue-900/50 p-2 rounded text-primary dark:text-blue-300">
<span class="material-symbols-outlined text-sm">my_location</span>
</div>
<span class="text-sm font-medium">Arah Kiblat</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition text-gray-700 dark:text-gray-300" href="#">
<div class="bg-blue-100 dark:bg-blue-900/50 p-2 rounded text-primary dark:text-blue-300">
<span class="material-symbols-outlined text-sm">biotech</span>
</div>
<span class="text-sm font-medium">Peralatan Pengamatan</span>
</a>
</li>
</ul>
</div>
<div class="bg-gradient-to-br from-gray-800 to-gray-900 text-white rounded-xl shadow-sm p-6">
<h3 class="font-bold text-lg mb-2">Butuh Data Khusus?</h3>
<p class="text-gray-300 text-sm mb-4">Kami melayani permintaan data tanda waktu untuk keperluan penelitian dan instansi.</p>
<a class="block text-center bg-white text-gray-900 py-2 rounded font-medium text-sm hover:bg-gray-100 transition" href="#">Hubungi Kami</a>
</div>
</div>
</div>
</div>

@include('partials.footer')
</body></html>