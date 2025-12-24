<!DOCTYPE html>
<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
 @vite(['resources/css/app.css', 'resources/js/app.js'])
<title>Gempa Bumi - BMKG Stasiun Geofisika Tangerang</title>
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

<div class="relative bg-gray-900 h-[300px] overflow-hidden flex items-center justify-center">
<img alt="Background Pattern" class="absolute inset-0 w-full h-full object-cover opacity-30" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKi0_nkKvXM6RI5rZN4suP9Oob311ci4cuQE64CVWNNgfb-Mzier_6_z36dYFP-gnYUjTBFvem-KKePkI2rE5I8_-gCKbK60UYKolAcCPYv56xPnwMRf2-vCznlxKEVbKiNtjsX_5OCVlE5wrq8gDBADBlpfmg3VnfbEGRBSRSt8mSGU_l8nTy8JzFSLQdL5NUN0BN5aGDJn5U9KfIcRPl2XH_EaW-VkSfVl5tJowd9UVzJwBZGWgLvCa5xOgK7LCwVy9K5GCc4hM"/>
<div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-primary/80 mix-blend-multiply"></div>
<div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
<span class="inline-block py-1 px-3 rounded-full bg-blue-500/30 border border-blue-400/50 text-blue-200 text-xs font-semibold tracking-wider uppercase mb-4">Informasi Geofisika</span>
<h1 class="text-4xl md:text-5xl font-display font-bold text-white mb-4 tracking-wide">
                Gempa Bumi
            </h1>
<p class="text-blue-100 text-lg font-light max-w-2xl mx-auto">
                Pusat informasi lengkap mengenai aktivitas seismik, mitigasi bencana, dan data gempabumi terkini di wilayah Indonesia.
            </p>
</div>
</div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-24">
<section class="scroll-mt-24" id="terkini">
<div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
<div>
<h2 class="text-3xl font-display font-bold text-gray-900 dark:text-white flex items-center gap-3">
<span class="bg-red-600 text-white rounded p-1.5 material-symbols-outlined">analytics</span>
                        Gempabumi Terkini
                    </h2>
<p class="text-gray-500 dark:text-gray-400 mt-2">Data parameter gempabumi terbaru (M ≥ 5.0)</p>
</div>
<a class="text-primary dark:text-blue-400 font-semibold text-sm hover:underline flex items-center gap-1" href="#">
                    Lihat Selengkapnya <span class="material-symbols-outlined text-sm">arrow_forward</span>
</a>
</div>
<div href="http://web.meteo.bmkg.go.id/id/">
<div class="grid lg:grid-cols-3 gap-8">
<div class="lg:col-span-1 bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden border-t-4 border-red-500 flex flex-col">
<div class="p-6 bg-red-50 dark:bg-red-900/20 flex-grow">
<div class="flex items-start justify-between mb-4">
<span class="px-3 py-1 bg-red-100 dark:bg-red-900 text-red-700 dark:text-red-200 text-xs font-bold rounded-full uppercase">Terbaru</span>
<span class="text-gray-500 dark:text-gray-400 text-xs flex items-center gap-1">
<span class="material-symbols-outlined text-sm">schedule</span> 10 Menit yang lalu
                            </span>
</div>
<h3 class="text-4xl font-display font-bold text-gray-900 dark:text-white mb-1">M 5.2</h3>
<p class="text-lg font-medium text-gray-700 dark:text-gray-200 mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-red-500">location_on</span>
                            24km Tenggara PACITAN-JATIM
                        </p>
<div class="space-y-3 border-t border-gray-200 dark:border-gray-700 pt-4">
<div class="flex justify-between items-center">
<span class="text-sm text-gray-500 dark:text-gray-400">Tanggal</span>
<span class="text-sm font-semibold text-gray-900 dark:text-white">24 Nov 2023</span>
</div>
<div class="flex justify-between items-center">
<span class="text-sm text-gray-500 dark:text-gray-400">Waktu</span>
<span class="text-sm font-semibold text-gray-900 dark:text-white">14:25:01 WIB</span>
</div>
<div class="flex justify-between items-center">
<span class="text-sm text-gray-500 dark:text-gray-400">Kedalaman</span>
<span class="text-sm font-semibold text-gray-900 dark:text-white">10 Km</span>
</div>
<div class="flex justify-between items-center">
<span class="text-sm text-gray-500 dark:text-gray-400">Lintang / Bujur</span>
<span class="text-sm font-semibold text-gray-900 dark:text-white">8.40 LS / 111.15 BT</span>
</div>
</div>
</div>
<div class="bg-gray-200 dark:bg-gray-800 h-48 relative">
<img alt="Map Location" class="w-full h-full object-cover opacity-75 grayscale hover:grayscale-0 transition duration-500" src="{{ asset('images/map.png') }}"/>
<div class="absolute inset-0 flex items-center justify-center">
<div class="bg-red-500 w-4 h-4 rounded-full animate-ping absolute"></div>
<div class="bg-red-600 w-3 h-3 rounded-full relative border-2 border-white shadow"></div>
</div>
</div>
</div>
<div class="lg:col-span-2 bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden border border-gray-100 dark:border-gray-700 flex flex-col">
<div class="overflow-x-auto">
<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-800 dark:text-gray-300">
<tr>
<th class="px-6 py-3" scope="col">Waktu Gempa</th>
<th class="px-6 py-3" scope="col">Lintang - Bujur</th>
<th class="px-6 py-3" scope="col">Magnitudo</th>
<th class="px-6 py-3" scope="col">Kedalaman</th>
<th class="px-6 py-3" scope="col">Wilayah</th>
</tr>
</thead>
<tbody>
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white">24 Nov 2023 10:15:30 WIB</td>
<td class="px-6 py-4">2.50 LU - 128.10 BT</td>
<td class="px-6 py-4"><span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">M 4.8</span></td>
<td class="px-6 py-4">15 Km</td>
<td class="px-6 py-4">65 km TimurLaut MOROTAI-MALUT</td>
</tr>
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white">23 Nov 2023 23:45:12 WIB</td>
<td class="px-6 py-4">8.12 LS - 107.55 BT</td>
<td class="px-6 py-4"><span class="bg-orange-100 text-orange-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-orange-900 dark:text-orange-300">M 5.1</span></td>
<td class="px-6 py-4">24 Km</td>
<td class="px-6 py-4">90 km BaratDaya KAB-TASIKMALAYA-JABAR</td>
</tr>
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white">23 Nov 2023 15:20:05 WIB</td>
<td class="px-6 py-4">0.50 LS - 100.10 BT</td>
<td class="px-6 py-4"><span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">M 3.2</span></td>
<td class="px-6 py-4">10 Km</td>
<td class="px-6 py-4">15 km BaratDaya PASAMANBARAT-SUMBAR</td>
</tr>
<tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700">
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white">23 Nov 2023 08:05:00 WIB</td>
<td class="px-6 py-4">9.50 LS - 124.10 BT</td>
<td class="px-6 py-4"><span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">M 4.5</span></td>
<td class="px-6 py-4">60 Km</td>
<td class="px-6 py-4">35 km Tenggara TTU-NTT</td>
</tr>
</tbody>
</table>
</div>
<div class="bg-gray-50 dark:bg-gray-800 px-6 py-3 border-t border-gray-200 dark:border-gray-700">
<p class="text-xs text-gray-500 italic">*Data 5 gempabumi terkini</p>
</div>
</div>
</div>
</section>
<section class="scroll-mt-24" id="dirasakan">
<h2 class="text-3xl font-display font-bold text-gray-900 dark:text-white flex items-center gap-3 mb-8">
<span class="bg-orange-500 text-white rounded p-1.5 material-symbols-outlined">vibration</span>
                Gempabumi Dirasakan
            </h2>
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden border border-gray-100 dark:border-gray-700">
<div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
<div class="space-y-4">
<div class="bg-orange-50 dark:bg-orange-900/30 border-l-4 border-orange-500 p-4 rounded-r-md">
<h4 class="font-bold text-gray-800 dark:text-white">24 Nov 2023 - 14:25:01 WIB</h4>
<div class="flex flex-wrap gap-2 my-2">
<span class="text-xs font-semibold bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600 px-2 py-1 rounded">M 5.2</span>
<span class="text-xs font-semibold bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-600 px-2 py-1 rounded">10 km</span>
</div>
<p class="text-sm text-gray-600 dark:text-gray-300">Pusat gempa berada di laut 24 km tenggara Pacitan</p>
<div class="mt-3">
<span class="text-xs text-gray-500 dark:text-gray-400 block mb-1 uppercase tracking-wider font-semibold">Dirasakan (MMI):</span>
<p class="text-sm text-gray-800 dark:text-white font-medium">III Pacitan, II-III Trenggalek, II Ponorogo</p>
</div>
</div>
<div class="bg-white dark:bg-gray-800 border-l-4 border-gray-300 dark:border-gray-600 p-4 rounded-r-md hover:bg-gray-50 dark:hover:bg-gray-700 transition">
<h4 class="font-bold text-gray-800 dark:text-white">23 Nov 2023 - 23:45:12 WIB</h4>
<p class="text-sm text-gray-600 dark:text-gray-300 mt-1">Pusat gempa berada di darat 90 km BaratDaya Kab. Tasikmalaya</p>
<div class="mt-2">
<span class="text-xs text-gray-500 dark:text-gray-400 uppercase tracking-wider font-semibold">Dirasakan:</span>
<span class="text-sm text-gray-800 dark:text-white">II Pangandaran</span>
</div>
</div>
<a class="block text-center py-2 text-primary dark:text-blue-400 font-medium text-sm border border-dashed border-gray-300 dark:border-gray-600 rounded-lg hover:bg-blue-50 dark:hover:bg-gray-800 transition" href="#">
                            Lihat Daftar Lengkap
                        </a>
</div>
<div class="h-[400px] bg-gray-100 dark:bg-gray-800 rounded-lg relative overflow-hidden border border-gray-200 dark:border-gray-600">
<img alt="Shakemap" class="w-full h-full object-cover" src="{{ asset('images/shakemap.png') }}"/>
<div class="absolute bottom-4 right-4 bg-white/90 dark:bg-gray-800/90 backdrop-blur px-3 py-2 rounded shadow text-xs">
<div class="font-bold mb-1">Legenda MMI</div>
<div class="flex flex-col gap-1">
<div class="flex items-center gap-2"><span class="w-3 h-3 bg-green-500 rounded-full"></span> I-II (Lemah)</div>
<div class="flex items-center gap-2"><span class="w-3 h-3 bg-yellow-400 rounded-full"></span> III-V (Sedang)</div>
<div class="flex items-center gap-2"><span class="w-3 h-3 bg-red-500 rounded-full"></span> VI+ (Kuat)</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="scroll-mt-24" id="antisipasi">
<h2 class="text-3xl font-display font-bold text-gray-900 dark:text-white flex items-center gap-3 mb-8">
<span class="bg-blue-600 text-white rounded p-1.5 material-symbols-outlined">health_and_safety</span>
                Antisipasi Gempabumi
            </h2>
<div class="grid md:grid-cols-3 gap-6">
<div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden border-t-4 border-green-500 hover:-translate-y-1 transition duration-300">
<div class="p-6">
<div class="w-12 h-12 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center mb-4 text-green-600 dark:text-green-300">
<span class="material-symbols-outlined text-2xl">home_repair_service</span>
</div>
<h3 class="text-xl font-bold mb-3 dark:text-white">Sebelum Gempa</h3>
<ul class="space-y-3 text-sm text-gray-600 dark:text-gray-300">
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-green-500 text-lg flex-shrink-0">check_circle</span>
<span>Kenali lingkungan tempat Anda bekerja dan tinggal.</span>
</li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-green-500 text-lg flex-shrink-0">check_circle</span>
<span>Pastikan perabotan (lemari, kabinet) tertanam kuat di dinding.</span>
</li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-green-500 text-lg flex-shrink-0">check_circle</span>
<span>Siapkan Tas Siaga Bencana (P3K, Senter, Makanan).</span>
</li>
</ul>
</div>
</div>
<div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden border-t-4 border-red-500 hover:-translate-y-1 transition duration-300">
<div class="p-6">
<div class="w-12 h-12 bg-red-100 dark:bg-red-900 rounded-full flex items-center justify-center mb-4 text-red-600 dark:text-red-300">
<span class="material-symbols-outlined text-2xl">warning</span>
</div>
<h3 class="text-xl font-bold mb-3 dark:text-white">Saat Gempa</h3>
<ul class="space-y-3 text-sm text-gray-600 dark:text-gray-300">
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-red-500 text-lg flex-shrink-0">check_circle</span>
<span>Jika dalam ruangan: Berlindung di bawah meja (Drop, Cover, Hold On).</span>
</li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-red-500 text-lg flex-shrink-0">check_circle</span>
<span>Jauhi kaca, jendela, dan benda yang mudah jatuh.</span>
</li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-red-500 text-lg flex-shrink-0">check_circle</span>
<span>Jika di luar: Hindari gedung tinggi, tiang listrik, dan pohon.</span>
</li>
</ul>
</div>
</div>
<div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden border-t-4 border-yellow-500 hover:-translate-y-1 transition duration-300">
<div class="p-6">
<div class="w-12 h-12 bg-yellow-100 dark:bg-yellow-900 rounded-full flex items-center justify-center mb-4 text-yellow-600 dark:text-yellow-300">
<span class="material-symbols-outlined text-2xl">emergency</span>
</div>
<h3 class="text-xl font-bold mb-3 dark:text-white">Setelah Gempa</h3>
<ul class="space-y-3 text-sm text-gray-600 dark:text-gray-300">
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-yellow-500 text-lg flex-shrink-0">check_circle</span>
<span>Periksa diri dan orang sekitar dari luka-luka.</span>
</li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-yellow-500 text-lg flex-shrink-0">check_circle</span>
<span>Waspada gempa susulan.</span>
</li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-yellow-500 text-lg flex-shrink-0">check_circle</span>
<span>Pantau informasi resmi dari BMKG lewat radio atau HP.</span>
</li>
</ul>
</div>
</div>
</div>
</section>
<section class="scroll-mt-24" id="skala-mmi">
<h2 class="text-3xl font-display font-bold text-gray-900 dark:text-white flex items-center gap-3 mb-8">
<span class="bg-purple-600 text-white rounded p-1.5 material-symbols-outlined">bar_chart</span>
                Skala Intensitas Gempabumi (MMI)
            </h2>
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg border border-gray-100 dark:border-gray-700 overflow-hidden">
<div class="p-6">
<p class="text-gray-600 dark:text-gray-300 mb-6">Skala Modified Mercalli Intensity (MMI) digunakan untuk mengukur dampak getaran gempa bumi yang dirasakan di permukaan.</p>
<div class="space-y-2">
<div class="grid grid-cols-12 gap-0 min-h-[60px]">
<div class="col-span-2 md:col-span-1 bg-gray-100 flex items-center justify-center font-bold text-gray-700 text-xl border-r border-white">I - II</div>
<div class="col-span-10 md:col-span-11 bg-white dark:bg-gray-800 p-4 flex items-center border-b border-gray-100 dark:border-gray-700">
<p class="text-sm dark:text-gray-300"><span class="font-bold text-gray-900 dark:text-white">TIDAK DIRASAKAN / LEMAH</span>: Getaran tidak dirasakan kecuali oleh beberapa orang dalam keadaan diam.</p>
</div>
</div>
<div class="grid grid-cols-12 gap-0 min-h-[60px]">
<div class="col-span-2 md:col-span-1 bg-green-200 flex items-center justify-center font-bold text-green-900 text-xl border-r border-white">III - V</div>
<div class="col-span-10 md:col-span-11 bg-white dark:bg-gray-800 p-4 flex items-center border-b border-gray-100 dark:border-gray-700">
<p class="text-sm dark:text-gray-300"><span class="font-bold text-gray-900 dark:text-white">RINGAN - SEDANG</span>: Dirasakan nyata dalam rumah. Getaran seperti ada truk lewat. Barang pecah belah bisa bergetar.</p>
</div>
</div>
<div class="grid grid-cols-12 gap-0 min-h-[60px]">
<div class="col-span-2 md:col-span-1 bg-yellow-300 flex items-center justify-center font-bold text-yellow-900 text-xl border-r border-white">VI</div>
<div class="col-span-10 md:col-span-11 bg-white dark:bg-gray-800 p-4 flex items-center border-b border-gray-100 dark:border-gray-700">
<p class="text-sm dark:text-gray-300"><span class="font-bold text-gray-900 dark:text-white">KUAT</span>: Dirasakan oleh semua penduduk. Kebanyakan lari keluar. Plester dinding jatuh, cerobong asap rusak ringan.</p>
</div>
</div>
<div class="grid grid-cols-12 gap-0 min-h-[60px]">
<div class="col-span-2 md:col-span-1 bg-orange-400 flex items-center justify-center font-bold text-white text-xl border-r border-white">VII-VIII</div>
<div class="col-span-10 md:col-span-11 bg-white dark:bg-gray-800 p-4 flex items-center border-b border-gray-100 dark:border-gray-700">
<p class="text-sm dark:text-gray-300"><span class="font-bold text-gray-900 dark:text-white">SANGAT KUAT - PARAH</span>: Kerusakan ringan pada bangunan konstruksi baik. Retak-retak pada bangunan lemah. Dinding lepas dari rangka.</p>
</div>
</div>
<div class="grid grid-cols-12 gap-0 min-h-[60px]">
<div class="col-span-2 md:col-span-1 bg-red-600 flex items-center justify-center font-bold text-white text-xl border-r border-white">IX - XII</div>
<div class="col-span-10 md:col-span-11 bg-white dark:bg-gray-800 p-4 flex items-center border-b border-gray-100 dark:border-gray-700">
<p class="text-sm dark:text-gray-300"><span class="font-bold text-gray-900 dark:text-white">HEBAT - HANCUR TOTAL</span>: Kerusakan pada bangunan kuat. Rumah berpindah dari pondasi. Tanah terbelah. Hancur total.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="scroll-mt-24" id="peralatan">
<h2 class="text-3xl font-display font-bold text-gray-900 dark:text-white flex items-center gap-3 mb-8">
<span class="bg-teal-600 text-white rounded p-1.5 material-symbols-outlined">settings_input_antenna</span>
                Peralatan Pengamatan Gempa Bumi
            </h2>
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
<div class="group bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 dark:border-gray-700">
<div class="h-48 bg-gray-200 dark:bg-gray-800 flex items-center justify-center rounded-t-xl overflow-hidden relative">
<div class="absolute inset-0 bg-gray-800 opacity-10"></div>
<span class="material-symbols-outlined text-6xl text-gray-400 dark:text-gray-600">graphic_eq</span>
</div>
<div class="p-6">
<h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Seismometer Broadband</h3>
<p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                            Alat sensor penangkap getaran tanah dalam rentang frekuensi yang lebar. Digunakan untuk mendeteksi gelombang seismik gempa bumi lokal hingga jauh dengan sensitivitas tinggi.
                        </p>
</div>
</div>
<div class="group bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 dark:border-gray-700">
<div class="h-48 bg-gray-200 dark:bg-gray-800 flex items-center justify-center rounded-t-xl overflow-hidden relative">
<div class="absolute inset-0 bg-gray-800 opacity-10"></div>
<span class="material-symbols-outlined text-6xl text-gray-400 dark:text-gray-600">speed</span>
</div>
<div class="p-6">
<h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Accelerograph</h3>
<p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                            Alat pencatat percepatan getaran tanah yang kuat (strong motion). Data ini krusial untuk membuat Peta Guncangan (Shakemap) sesaat setelah gempa terjadi.
                        </p>
</div>
</div>
<div class="group bg-surface-light dark:bg-surface-dark rounded-xl shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 dark:border-gray-700">
<div class="h-48 bg-gray-200 dark:bg-gray-800 flex items-center justify-center rounded-t-xl overflow-hidden relative">
<div class="absolute inset-0 bg-gray-800 opacity-10"></div>
<span class="material-symbols-outlined text-6xl text-gray-400 dark:text-gray-600">satellite_alt</span>
</div>
<div class="p-6">
<h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Warning Receiver System (WRS)</h3>
<p class="text-sm text-gray-600 dark:text-gray-300 leading-relaxed">
                            Sistem penerima informasi gempabumi dan peringatan dini tsunami secara real-time dari BMKG Pusat. Digunakan untuk diseminasi informasi cepat ke stakeholder.
                        </p>
</div>
</div>
</div>
</section>
</div>
@include('partials.footer')
</body></html>