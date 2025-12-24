<!DOCTYPE html>
<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
 @vite(['resources/css/app.css', 'resources/js/app.js'])
<title>BMKG Stasiun Geofisika Tangerang - Cuaca &amp; Iklim</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;family=Oswald:wght@500;700&amp;display=swap" rel="stylesheet"/>
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
    }.group:hover .group-hover\:visible {
        visibility: visible;
    }
    .group:hover .group-hover\:opacity-100 {
        opacity: 1;
    }
</style>
</head>
<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200 font-sans transition-colors duration-300 flex flex-col min-h-screen">
@include('partials.navbar')

<div class="bg-gray-100 dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
<h1 class="text-3xl font-display font-bold text-primary dark:text-white mb-2">Cuaca &amp; Iklim</h1>
<nav aria-label="Breadcrumb" class="flex">
<ol class="inline-flex items-center space-x-1 md:space-x-3">
<li class="inline-flex items-center">
<a class="inline-flex items-center text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-blue-300" href="#">
<span class="material-symbols-outlined text-lg mr-2">home</span>
                        Beranda
                    </a>
</li>
<li>
<div class="flex items-center">
<span class="material-symbols-outlined text-gray-400">chevron_right</span>
<span class="ml-1 text-sm font-medium text-gray-500 dark:text-gray-400 md:ml-2">Cuaca &amp; Iklim</span>
</div>
</li>
</ol>
</nav>
</div>
</div>
<main class="flex-grow bg-background-light dark:bg-background-dark py-12">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<div class="lg:col-span-2 space-y-8">
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden border border-gray-100 dark:border-gray-700">
<div class="bg-primary px-6 py-4 flex justify-between items-center text-white">
<h2 class="text-lg font-bold flex items-center gap-2 font-display">
<span class="material-symbols-outlined">cloud</span> Prakiraan Cuaca Banten Hari Ini
                        </h2>
<span class="text-xs bg-white/20 px-2 py-1 rounded">Update: 10 menit yang lalu</span>
</div>
<div class="p-6">
<div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-8">
<div class="text-center md:text-left">
<h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-1">Kota Tangerang</h3>
<p class="text-gray-500 dark:text-gray-400 text-sm">Jumat, 24 November 2023</p>
</div>
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-6xl text-yellow-500 animate-pulse">partly_cloudy_day</span>
<div>
<div class="text-4xl font-bold text-gray-900 dark:text-white">32°C</div>
<div class="text-gray-600 dark:text-gray-300 font-medium">Cerah Berawan</div>
</div>
</div>
<div class="grid grid-cols-2 gap-4 text-sm">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-blue-500">water_drop</span>
<div>
<div class="text-gray-500 dark:text-gray-400 text-xs">Kelembapan</div>
<div class="font-bold text-gray-900 dark:text-white">65%</div>
</div>
</div>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-blue-500">air</span>
<div>
<div class="text-gray-500 dark:text-gray-400 text-xs">Angin</div>
<div class="font-bold text-gray-900 dark:text-white">10 km/j</div>
</div>
</div>
</div>
</div>
<div class="border-t border-gray-100 dark:border-gray-700 pt-6">
<h4 class="text-sm font-semibold text-gray-700 dark:text-gray-200 mb-4 uppercase tracking-wider">Prakiraan Per Jam</h4>
<div class="grid grid-cols-4 md:grid-cols-6 gap-2">
<div class="text-center p-2 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
<p class="text-xs text-gray-500 dark:text-gray-400 mb-1">10:00</p>
<span class="material-symbols-outlined text-yellow-500 mb-1">sunny</span>
<p class="text-sm font-bold text-gray-800 dark:text-white">32°</p>
</div>
<div class="text-center p-2 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
<p class="text-xs text-gray-500 dark:text-gray-400 mb-1">13:00</p>
<span class="material-symbols-outlined text-yellow-500 mb-1">partly_cloudy_day</span>
<p class="text-sm font-bold text-gray-800 dark:text-white">34°</p>
</div>
<div class="text-center p-2 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
<p class="text-xs text-gray-500 dark:text-gray-400 mb-1">16:00</p>
<span class="material-symbols-outlined text-gray-400 mb-1">cloud</span>
<p class="text-sm font-bold text-gray-800 dark:text-white">31°</p>
</div>
<div class="text-center p-2 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
<p class="text-xs text-gray-500 dark:text-gray-400 mb-1">19:00</p>
<span class="material-symbols-outlined text-blue-400 mb-1">rainy</span>
<p class="text-sm font-bold text-gray-800 dark:text-white">28°</p>
</div>
<div class="text-center p-2 bg-gray-50 dark:bg-gray-700/50 rounded-lg hidden md:block">
<p class="text-xs text-gray-500 dark:text-gray-400 mb-1">22:00</p>
<span class="material-symbols-outlined text-blue-400 mb-1">cloudy_snowing</span>
<p class="text-sm font-bold text-gray-800 dark:text-white">26°</p>
</div>
<div class="text-center p-2 bg-gray-50 dark:bg-gray-700/50 rounded-lg hidden md:block">
<p class="text-xs text-gray-500 dark:text-gray-400 mb-1">01:00</p>
<span class="material-symbols-outlined text-gray-400 mb-1">cloud</span>
<p class="text-sm font-bold text-gray-800 dark:text-white">25°</p>
</div>
</div>
</div>
</div>
</div>
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden border border-gray-100 dark:border-gray-700">
<div class="bg-gray-50 dark:bg-gray-700/50 px-6 py-4 border-b border-gray-100 dark:border-gray-700">
<h2 class="text-xl font-display font-bold text-gray-800 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary dark:text-blue-400">thermostat</span>
                            Informasi Iklim Bulanan
                        </h2>
</div>
<div class="p-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
<div>
<h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2">Analisis Curah Hujan Oktober 2023</h3>
<p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed mb-4">
                                    Berdasarkan analisis data dari 20 pos pengamatan hujan di wilayah Tangerang dan sekitarnya, curah hujan pada bulan Oktober 2023 umumnya berada pada kategori <strong>Rendah (0 - 100 mm)</strong>. Beberapa wilayah mengalami hari tanpa hujan yang cukup panjang.
                                </p>
<ul class="space-y-2 mb-6">
<li class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
<span class="w-2 h-2 rounded-full bg-green-500"></span>
                                        Curah Hujan Tertinggi: 85mm (Ciledug)
                                    </li>
<li class="flex items-center gap-2 text-sm text-gray-700 dark:text-gray-300">
<span class="w-2 h-2 rounded-full bg-red-500"></span>
                                        Curah Hujan Terendah: 0mm (Sepatan)
                                    </li>
</ul>
<a class="inline-flex items-center px-4 py-2 bg-primary text-white text-sm font-medium rounded hover:bg-blue-800 transition shadow-sm" href="#">
                                    Baca Laporan Lengkap
                                </a>
</div>
<div class="bg-blue-50 dark:bg-gray-800 rounded-lg p-4 border border-blue-100 dark:border-gray-700 flex flex-col items-center">
<div class="w-full h-48 bg-white dark:bg-gray-900 rounded border border-gray-200 dark:border-gray-700 flex items-center justify-center relative overflow-hidden">
<img alt="Peta Analisis Curah Hujan" class="absolute inset-0 w-full h-full object-cover" src="{{ asset('images/peta-analisis-curah-hujan.png') }}"/>
<div class="absolute inset-0 bg-black/10 flex items-center justify-center">
<span class="bg-white/90 dark:bg-gray-800/90 px-3 py-1 rounded text-xs font-bold shadow">Peta Analisis Curah Hujan</span>
</div>
</div>
<p class="text-xs text-center text-gray-500 mt-2">Peta Distribusi Curah Hujan Wilayah Banten</p>
</div>
</div>
</div>
</div>
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden border border-gray-100 dark:border-gray-700">
<div class="bg-gray-50 dark:bg-gray-700/50 px-6 py-4 border-b border-gray-100 dark:border-gray-700">
<h2 class="text-xl font-display font-bold text-gray-800 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary dark:text-blue-400">precision_manufacturing</span>
                            Peralatan Pengamatan Klimatologi
                        </h2>
</div>
<div class="p-6">
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="group">
<div class="relative h-40 w-full rounded-lg overflow-hidden mb-3 border border-gray-200 dark:border-gray-700">
<img alt="Automatic Weather Station" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="{{ asset('images/aws.png') }}"/>
</div>
<h3 class="font-bold text-gray-900 dark:text-white text-sm">Automatic Weather Station (AWS)</h3>
<p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Mengukur parameter cuaca secara otomatis dan real-time.</p>
</div>
<div class="group">
<div class="relative h-40 w-full rounded-lg overflow-hidden mb-3 border border-gray-200 dark:border-gray-700">
<img alt="Panci Penguapan" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="{{ asset('images/panci-penguapan.png') }}"/>
</div>
<h3 class="font-bold text-gray-900 dark:text-white text-sm">Panci Penguapan (Open Pan)</h3>
<p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Mengukur jumlah penguapan air yang terjadi di udara terbuka.</p>
</div>
<div class="group">
<div class="relative h-40 w-full rounded-lg overflow-hidden mb-3 border border-gray-200 dark:border-gray-700">
<img alt="Campbell Stokes" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="{{ asset('images/campbell-stokes.png') }}"/>
</div>
<h3 class="font-bold text-gray-900 dark:text-white text-sm">Campbell Stokes</h3>
<p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Mencatat lamanya penyinaran matahari harian.</p>
</div>
</div>
<div class="mt-6 text-center">
<a class="text-sm font-semibold text-primary dark:text-blue-400 hover:underline" href="#">Lihat Semua Peralatan →</a>
</div>
</div>
</div>
</div>
<div class="space-y-8">
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg border border-gray-100 dark:border-gray-700 p-6">
<h3 class="font-display font-bold text-lg text-gray-900 dark:text-white mb-4 pb-2 border-b border-gray-100 dark:border-gray-700">Akses Cepat</h3>
<nav class="space-y-2">
<a class="flex items-center justify-between p-2 rounded hover:bg-gray-50 dark:hover:bg-gray-700 group transition" href="#">
<span class="text-sm text-gray-700 dark:text-gray-300 group-hover:text-primary dark:group-hover:text-white">Peringatan Dini Cuaca</span>
<span class="material-symbols-outlined text-gray-400 text-sm">arrow_forward_ios</span>
</a>
<a class="flex items-center justify-between p-2 rounded hover:bg-gray-50 dark:hover:bg-gray-700 group transition" href="#">
<span class="text-sm text-gray-700 dark:text-gray-300 group-hover:text-primary dark:group-hover:text-white">Citra Satelit</span>
<span class="material-symbols-outlined text-gray-400 text-sm">arrow_forward_ios</span>
</a>
<a class="flex items-center justify-between p-2 rounded hover:bg-gray-50 dark:hover:bg-gray-700 group transition" href="#">
<span class="text-sm text-gray-700 dark:text-gray-300 group-hover:text-primary dark:group-hover:text-white">Prakiraan Musim</span>
<span class="material-symbols-outlined text-gray-400 text-sm">arrow_forward_ios</span>
</a>
<a class="flex items-center justify-between p-2 rounded hover:bg-gray-50 dark:hover:bg-gray-700 group transition" href="#">
<span class="text-sm text-gray-700 dark:text-gray-300 group-hover:text-primary dark:group-hover:text-white">Data Hujan Harian</span>
<span class="material-symbols-outlined text-gray-400 text-sm">arrow_forward_ios</span>
</a>
</nav>
</div>
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg border border-gray-100 dark:border-gray-700 p-6">
<h3 class="font-display font-bold text-lg text-gray-900 dark:text-white mb-4 pb-2 border-b border-gray-100 dark:border-gray-700">Infografis Cuaca</h3>
<div class="space-y-4">
<a class="block group" href="#">
<div class="bg-gray-100 dark:bg-gray-800 h-32 rounded-lg mb-2 overflow-hidden relative">
<img alt="Infografis 1" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAawIDeSROewtUBv_FUY7mYIo3pusv-0lSFZD_gUyage90aY5EDJT4eGh5HlYxisNhTWP9rlQqnai2qAkYucRvHwiK6nnxifawYy1O7PWMiUF5TV1uESIvAEvvKqSf4bDE1XVADEHkg_YIHemDcbbEPGU41fWBEA5cPI30aPgYeI9HeplRFZ5yTh2TIfUTWs3Rd9Z-Un_S7-tLA9u4s7EeZEqS0E97NFK7qLq2p8Ja-xF0feeHKu73Gcwwv7AnjTVFe38SDlu4aurA"/>
</div>
<p class="text-xs font-bold text-gray-800 dark:text-gray-200 group-hover:text-primary transition">Waspada Cuaca Ekstrem Masa Pancaroba</p>
</a>
<a class="block group" href="#">
<div class="bg-gray-100 dark:bg-gray-800 h-32 rounded-lg mb-2 overflow-hidden relative">
<img alt="Infografis 2" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDI47X7OF25qnLVTwuMGM4eNhu7Vl_5XFLCRou_ICufVyaB45vAzcbjso8zv6X9sep47WtyOShq5GcZCw9j6XJSiC_lDM2b_jVdjSUw5EnPx8vAHvuHMePx5tRz1ietxkxK8_gjyjZnBz_mG_-EX7yrR0D4vE0e_cNsnBJJpwjTwPd0y_MImNsBK2COXtXKeviNGgIaY0UfhyzIl2Yez6a9sb9MObsr_pI_onk4UUx9-4GameltQjyDHemUOA22bVRQz8DiPS_DF9o"/>
</div>
<p class="text-xs font-bold text-gray-800 dark:text-gray-200 group-hover:text-primary transition">Fenomena El Nino &amp; Dampaknya</p>
</a>
</div>
</div>
<div class="bg-gradient-to-br from-primary to-blue-600 rounded-xl shadow-lg p-6 text-center text-white">
<span class="material-symbols-outlined text-4xl mb-2">smartphone</span>
<h3 class="font-bold text-lg mb-2">Info BMKG Mobile</h3>
<p class="text-blue-100 text-xs mb-4">Dapatkan informasi cuaca, iklim, dan gempabumi terkini langsung di genggaman Anda.</p>
<div class="flex flex-col gap-2">
<button class="bg-black text-white text-xs font-bold py-2 px-4 rounded border border-gray-600 hover:bg-gray-900 transition flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm">android</span> Google Play
                         </button>
<button class="bg-black text-white text-xs font-bold py-2 px-4 rounded border border-gray-600 hover:bg-gray-900 transition flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm">ios</span> App Store
                         </button>
</div>
</div>
</div>
</div>
</div>
</main>
@include('partials.footer')
</body></html>