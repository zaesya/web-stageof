<!DOCTYPE html>
<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
 @vite(['resources/css/app.css', 'resources/js/app.js'])
<title>Magnet Bumi - BMKG Stasiun Geofisika Tangerang</title>
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

<div class="relative bg-gray-900 h-[400px] overflow-hidden">
<img alt="Station Background" class="absolute inset-0 w-full h-full object-cover opacity-50 grayscale mix-blend-multiply" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKi0_nkKvXM6RI5rZN4suP9Oob311ci4cuQE64CVWNNgfb-Mzier_6_z36dYFP-gnYUjTBFvem-KKePkI2rE5I8_-gCKbK60UYKolAcCPYv56xPnwMRf2-vCznlxKEVbKiNtjsX_5OCVlE5wrq8gDBADBlpfmg3VnfbEGRBSRSt8mSGU_l8nTy8JzFSLQdL5NUN0BN5aGDJn5U9KfIcRPl2XH_EaW-VkSfVl5tJowd9UVzJwBZGWgLvCa5xOgK7LCwVy9K5GCc4hM"/>
<div class="absolute inset-0 bg-gradient-to-r from-primary/90 via-primary/60 to-transparent"></div>
<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
<div class="max-w-3xl">
<span class="inline-block py-1 px-3 rounded-full bg-blue-500/20 text-blue-200 text-xs font-semibold mb-4 border border-blue-400/30 uppercase tracking-widest">Bidang Geofisika Potensial</span>
<h1 class="text-4xl md:text-5xl font-display font-bold text-white mb-4 tracking-wide">
                    Magnet Bumi
                </h1>
<p class="text-gray-200 text-lg md:text-xl mb-8 font-light leading-relaxed">
                    Pemantauan variasi medan magnet bumi secara kontinu untuk referensi standar, penelitian, mitigasi bencana geomagnet, dan navigasi.
                </p>
<div class="flex gap-4">
<a class="bg-white text-primary hover:bg-gray-100 px-6 py-3 rounded-md font-medium transition shadow-lg flex items-center gap-2" href="#data-magnet">
<span class="material-symbols-outlined">analytics</span> Data Terkini
                    </a>
<a class="bg-primary/50 hover:bg-primary/70 text-white backdrop-blur-md px-6 py-3 rounded-md font-medium transition border border-white/30 flex items-center gap-2" href="#peralatan">
<span class="material-symbols-outlined">science</span> Peralatan
                    </a>
</div>
</div>
</div>
</div>
<div class="relative -mt-10 z-20 max-w-6xl mx-auto px-4">
<div class="bg-surface-light dark:bg-surface-dark rounded-lg shadow-xl p-6 grid grid-cols-1 md:grid-cols-4 gap-6 border-b-4 border-secondary">
<div class="flex items-center gap-4 border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-700 pb-4 md:pb-0">
<div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-full text-primary dark:text-blue-300">
<span class="material-symbols-outlined">explore</span>
</div>
<div>
<p class="text-xs text-gray-500 dark:text-gray-400 uppercase font-semibold">Komponen H</p>
<p class="text-lg font-bold text-gray-900 dark:text-white">39,420 nT</p>
</div>
</div>
<div class="flex items-center gap-4 border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-700 pb-4 md:pb-0">
<div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-full text-primary dark:text-blue-300">
<span class="material-symbols-outlined">vertical_align_bottom</span>
</div>
<div>
<p class="text-xs text-gray-500 dark:text-gray-400 uppercase font-semibold">Komponen Z</p>
<p class="text-lg font-bold text-gray-900 dark:text-white">-18,050 nT</p>
</div>
</div>
<div class="flex items-center gap-4 border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-700 pb-4 md:pb-0">
<div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-full text-primary dark:text-blue-300">
<span class="material-symbols-outlined">functions</span>
</div>
<div>
<p class="text-xs text-gray-500 dark:text-gray-400 uppercase font-semibold">Intensitas Total (F)</p>
<p class="text-lg font-bold text-gray-900 dark:text-white">45,120 nT</p>
</div>
</div>
<div class="flex items-center gap-4">
<div class="bg-green-100 dark:bg-green-900 p-3 rounded-full text-green-600 dark:text-green-300">
<span class="material-symbols-outlined">ssid_chart</span>
</div>
<div>
<p class="text-xs text-gray-500 dark:text-gray-400 uppercase font-semibold">Indeks K</p>
<p class="text-sm font-bold text-gray-900 dark:text-white">2 (Tenang)</p>
</div>
</div>
</div>
</div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16" id="data-magnet">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
<div class="flex flex-col justify-center">
<h2 class="text-3xl font-display font-bold text-primary dark:text-white mb-6">
                    Tentang Magnet Bumi
                </h2>
<div class="prose dark:prose-invert text-gray-600 dark:text-gray-300 leading-relaxed">
<p class="mb-4">
                        Medan magnet bumi adalah fenomena fisika di mana bumi memiliki sifat kemagnetan yang melindungi kita dari radiasi matahari berbahaya (angin matahari). Stasiun Geofisika Tangerang melakukan pengamatan rutin terhadap variasi harian komponen magnet bumi.
                    </p>
<p class="mb-6">
                        Data yang dihasilkan sangat penting untuk penentuan koreksi peta navigasi, penentuan deklinasi magnetik, serta pemantauan badai magnetik yang dapat mempengaruhi sistem telekomunikasi dan kelistrikan.
                    </p>
<ul class="space-y-3 mt-4">
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary mt-1 text-sm">check_circle</span>
<span>Pengamatan Variasi Harian (Diurnal Variation)</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary mt-1 text-sm">check_circle</span>
<span>Pengukuran Mutlak (Absolute Measurement)</span>
</li>
<li class="flex items-start gap-3">
<span class="material-symbols-outlined text-secondary mt-1 text-sm">check_circle</span>
<span>Pemantauan Badai Geomagnet</span>
</li>
</ul>
</div>
</div>
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden border border-gray-100 dark:border-gray-700 flex flex-col h-full">
<div class="bg-gray-50 dark:bg-gray-700/50 px-6 py-4 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
<h3 class="text-lg font-display font-bold text-gray-800 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary dark:text-blue-400">public</span>
                        Peta Isogon &amp; Isoklin
                    </h3>
<span class="bg-blue-100 dark:bg-blue-900 text-primary dark:text-blue-300 text-xs px-2 py-1 rounded-full font-medium">Epoch 2020.0</span>
</div>
<div class="flex-grow bg-blue-50 dark:bg-gray-900 relative p-4 flex items-center justify-center">
<img alt="Peta Magnet Bumi" class="w-full h-auto max-h-80 object-contain rounded border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800" src="{{ asset('images/peta-magnet-bumi.png') }}"/>
</div>
<div class="p-6 bg-white dark:bg-gray-800">
<p class="text-sm text-gray-500 dark:text-gray-400 italic">
                        Visualisasi garis kontur deklinasi dan inklinasi magnetik di wilayah Indonesia.
                    </p>
</div>
</div>
</div>
</div>
<section class="bg-gray-100 dark:bg-gray-900 py-16">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-12">
<h2 class="text-3xl font-display font-bold text-primary dark:text-white">Produk Informasi</h2>
<p class="mt-4 text-gray-600 dark:text-gray-400">Layanan data dan informasi terkait geomagnetisme</p>
</div>
<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
<a class="group bg-surface-light dark:bg-surface-dark p-6 rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 text-center border border-transparent hover:border-primary dark:hover:border-blue-500" href="#">
<div class="bg-blue-50 dark:bg-gray-700 w-12 h-12 mx-auto rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary dark:text-blue-300 group-hover:text-white text-2xl">table_chart</span>
</div>
<h3 class="font-semibold text-gray-800 dark:text-white text-sm">Data Menit</h3>
</a>
<a class="group bg-surface-light dark:bg-surface-dark p-6 rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 text-center border border-transparent hover:border-primary dark:hover:border-blue-500" href="#">
<div class="bg-blue-50 dark:bg-gray-700 w-12 h-12 mx-auto rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary dark:text-blue-300 group-hover:text-white text-2xl">schedule</span>
</div>
<h3 class="font-semibold text-gray-800 dark:text-white text-sm">Data Jam-jaman</h3>
</a>
<a class="group bg-surface-light dark:bg-surface-dark p-6 rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 text-center border border-transparent hover:border-primary dark:hover:border-blue-500" href="#">
<div class="bg-blue-50 dark:bg-gray-700 w-12 h-12 mx-auto rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary dark:text-blue-300 group-hover:text-white text-2xl">calendar_today</span>
</div>
<h3 class="font-semibold text-gray-800 dark:text-white text-sm">Rata-rata Harian</h3>
</a>
<a class="group bg-surface-light dark:bg-surface-dark p-6 rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 text-center border border-transparent hover:border-primary dark:hover:border-blue-500" href="#">
<div class="bg-blue-50 dark:bg-gray-700 w-12 h-12 mx-auto rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary dark:text-blue-300 group-hover:text-white text-2xl">analytics</span>
</div>
<h3 class="font-semibold text-gray-800 dark:text-white text-sm">Indeks K</h3>
</a>
<a class="group bg-surface-light dark:bg-surface-dark p-6 rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 text-center border border-transparent hover:border-primary dark:hover:border-blue-500" href="#">
<div class="bg-blue-50 dark:bg-gray-700 w-12 h-12 mx-auto rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary dark:text-blue-300 group-hover:text-white text-2xl">description</span>
</div>
<h3 class="font-semibold text-gray-800 dark:text-white text-sm">Laporan Bulanan</h3>
</a>
<a class="group bg-surface-light dark:bg-surface-dark p-6 rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 text-center border border-transparent hover:border-primary dark:hover:border-blue-500" href="#">
<div class="bg-blue-50 dark:bg-gray-700 w-12 h-12 mx-auto rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary dark:text-blue-300 group-hover:text-white text-2xl">build</span>
</div>
<h3 class="font-semibold text-gray-800 dark:text-white text-sm">Layanan Kalibrasi</h3>
</a>
</div>
</div>
</section>
<section class="py-16 bg-surface-light dark:bg-surface-dark" id="peralatan">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between items-end mb-8">
<div>
<h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white">Peralatan Pengamatan</h2>
<p class="text-gray-500 dark:text-gray-400 mt-1">Instrumen utama di Stasiun Geofisika Tangerang</p>
</div>
<a class="text-primary dark:text-blue-400 font-semibold text-sm hover:underline" href="#">Lihat Spesifikasi Lengkap</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<article class="flex flex-col bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-md transition border border-gray-100 dark:border-gray-700 group">
<div class="relative overflow-hidden h-48 rounded-t-lg">
<img alt="Magnetometer Fluxgate" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBF9xIOWKJugKMrcyzF0sAuV2b55y5m3csAAZ3qP7kInKGxQTfOXUPgJNeuoBeaa7JRlHx2JkoloVEwESbvIt4IjdyvBPfLKK1H-0MOnjVU_EwZFTwFVfSGSnMIb1hmxbIKckI7VX9J5B21-A07ryn5mVUa_6dw3y58zpilnmH-r9lyBdlwhq4HkQQ6eAN5QQnreZ73U_gTDKx-yzDKfoRKoERcslOg3zzayohw9rlqzR_uu-bcqPRgWSgSsoxrMY46Vgzfzb4AwAQ"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<div class="absolute bottom-3 left-4 text-white font-bold tracking-wide">Sensor Variasi</div>
</div>
<div class="p-5 flex flex-col flex-grow">
<h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 group-hover:text-primary transition">Magnetometer Fluxgate</h3>
<p class="text-gray-600 dark:text-gray-300 text-sm mb-4 line-clamp-3 flex-grow">
                            Instrumen elektronik untuk mengukur komponen vektor medan magnet bumi (X, Y, Z) secara terus menerus dengan resolusi tinggi.
                        </p>
<div class="flex items-center gap-2 text-xs text-gray-500 mt-auto pt-4 border-t border-gray-100 dark:border-gray-700">
<span class="bg-blue-100 text-blue-700 px-2 py-0.5 rounded">Digital</span>
<span class="bg-green-100 text-green-700 px-2 py-0.5 rounded">Real-time</span>
</div>
</div>
</article>
<article class="flex flex-col bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-md transition border border-gray-100 dark:border-gray-700 group">
<div class="relative overflow-hidden h-48 rounded-t-lg">
<img alt="PPM" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAawIDeSROewtUBv_FUY7mYIo3pusv-0lSFZD_gUyage90aY5EDJT4eGh5HlYxisNhTWP9rlQqnai2qAkYucRvHwiK6nnxifawYy1O7PWMiUF5TV1uESIvAEvvKqSf4bDE1XVADEHkg_YIHemDcbbEPGU41fWBEA5cPI30aPgYeI9HeplRFZ5yTh2TIfUTWs3Rd9Z-Un_S7-tLA9u4s7EeZEqS0E97NFK7qLq2p8Ja-xF0feeHKu73Gcwwv7AnjTVFe38SDlu4aurA"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<div class="absolute bottom-3 left-4 text-white font-bold tracking-wide">Sensor Intensitas</div>
</div>
<div class="p-5 flex flex-col flex-grow">
<h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 group-hover:text-primary transition">Proton Precession Magnetometer (PPM)</h3>
<p class="text-gray-600 dark:text-gray-300 text-sm mb-4 line-clamp-3 flex-grow">
                            Alat ukur intensitas total medan magnet bumi (F) menggunakan prinsip presesi proton. Digunakan sebagai standar kalibrasi.
                        </p>
<div class="flex items-center gap-2 text-xs text-gray-500 mt-auto pt-4 border-t border-gray-100 dark:border-gray-700">
<span class="bg-blue-100 text-blue-700 px-2 py-0.5 rounded">Absolut</span>
<span class="bg-purple-100 text-purple-700 px-2 py-0.5 rounded">High Precision</span>
</div>
</div>
</article>
<article class="flex flex-col bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-md transition border border-gray-100 dark:border-gray-700 group">
<div class="relative overflow-hidden h-48 rounded-t-lg">
<img alt="Deklinometer" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDI47X7OF25qnLVTwuMGM4eNhu7Vl_5XFLCRou_ICufVyaB45vAzcbjso8zv6X9sep47WtyOShq5GcZCw9j6XJSiC_lDM2b_jVdjSUw5EnPx8vAHvuHMePx5tRz1ietxkxK8_gjyjZnBz_mG_-EX7yrR0D4vE0e_cNsnBJJpwjTwPd0y_MImNsBK2COXtXKeviNGgIaY0UfhyzIl2Yez6a9sb9MObsr_pI_onk4UUx9-4GameltQjyDHemUOA22bVRQz8DiPS_DF9o"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<div class="absolute bottom-3 left-4 text-white font-bold tracking-wide">Pengukuran Manual</div>
</div>
<div class="p-5 flex flex-col flex-grow">
<h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 group-hover:text-primary transition">Deklinometer / Theodolite</h3>
<p class="text-gray-600 dark:text-gray-300 text-sm mb-4 line-clamp-3 flex-grow">
                            Perangkat optik untuk menentukan sudut Deklinasi (D) dan Inklinasi (I) magnet bumi secara manual melalui pengamatan matahari.
                        </p>
<div class="flex items-center gap-2 text-xs text-gray-500 mt-auto pt-4 border-t border-gray-100 dark:border-gray-700">
<span class="bg-yellow-100 text-yellow-700 px-2 py-0.5 rounded">Manual</span>
<span class="bg-gray-100 text-gray-700 px-2 py-0.5 rounded">Weekly</span>
</div>
</div>
</article>
</div>
</div>
</section>
@include('partials.footer')

</body></html>