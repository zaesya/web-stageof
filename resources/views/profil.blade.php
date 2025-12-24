<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
 @vite(['resources/css/app.css', 'resources/js/app.js'])
<title>Profil Stasiun Geofisika Tangerang - BMKG</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Theme Configuration -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#0f235cff", // Deep Blue
                        secondary: "#3ba5f6ff", // Bright Blue for accents
                        "background-light": "#f6f6f8",
                        "background-dark": "#101622",
                        "surface-light": "#ffffff",
                    },
                    fontFamily: {
                        "display": ["Public Sans", "Noto Sans", "sans-serif"],
                        "body": ["Public Sans", "Noto Sans", "sans-serif"],
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        /* Custom scrollbar for better aesthetics */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1; 
        }
        ::-webkit-scrollbar-thumb {
            background: #c1c1c1; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #a8a8a8; 
        }
        
        .org-line-vertical {
            width: 2px;
            background-color: #cbd5e1;
        }
        .org-line-horizontal {
            height: 2px;
            background-color: #cbd5e1;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#0d121b] dark:text-white font-display flex flex-col min-h-screen overflow-x-hidden">
<!-- Top Navigation -->
@include('partials.navbar')
<!-- Hero Section -->
<div class="w-full bg-background-light dark:bg-background-dark">
<div class="max-w-[1280px] mx-auto px-4 sm:px-10 py-6">
<div class="relative w-full h-[320px] rounded-xl overflow-hidden bg-cover bg-center flex flex-col items-center justify-center text-center p-6" data-alt="Abstract scientific data visualization background suggesting meteorology and geophysics" style="background-image: linear-gradient(rgba(19, 91, 236, 0.85), rgba(16, 22, 34, 0.7)), url('{{ asset('images/gedung.png') }}');">
<h1 class="text-white text-3xl sm:text-4xl md:text-5xl font-black leading-tight tracking-tight mb-4 max-w-4xl">
                    Profil Stasiun Geofisika Kelas I Tangerang
                </h1>
<p class="text-white/90 text-sm sm:text-base font-normal max-w-2xl">
                    Mengenal lebih dekat sejarah, visi, tugas, dan sumber daya manusia yang mendukung layanan informasi gempa bumi dan meteorologi terpercaya.
                </p>
</div>
</div>
</div>
<!-- Main Content Layout -->
<div class="w-full flex-1 bg-background-light dark:bg-background-dark pb-20">
<div class="max-w-[1280px] mx-auto px-4 sm:px-10 flex flex-col lg:flex-row gap-8">
<!-- Sticky Sidebar / TOC -->
<aside class="hidden lg:flex flex-col w-64 shrink-0 pt-6">
<div class="sticky top-24 bg-white dark:bg-[#1a2234] rounded-xl p-5 shadow-sm border border-gray-100 dark:border-gray-800">
<div class="flex flex-col mb-4">
<h3 class="text-base font-bold text-[#0d121b] dark:text-white">Daftar Isi</h3>
<p class="text-[#4c669a] text-xs">Navigasi Halaman</p>
</div>
<nav class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary transition-all hover:bg-primary/20" href="#sejarah">
<span class="material-symbols-outlined text-[20px]">history</span>
<span class="text-sm font-medium">Sejarah</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-[#4c669a] hover:text-primary hover:bg-gray-50 dark:hover:bg-gray-800 transition-all" href="#visi-misi">
<span class="material-symbols-outlined text-[20px]">flag</span>
<span class="text-sm font-medium">Visi &amp; Misi</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-[#4c669a] hover:text-primary hover:bg-gray-50 dark:hover:bg-gray-800 transition-all" href="#tugas-fungsi">
<span class="material-symbols-outlined text-[20px]">assignment</span>
<span class="text-sm font-medium">Tugas &amp; Fungsi</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-[#4c669a] hover:text-primary hover:bg-gray-50 dark:hover:bg-gray-800 transition-all" href="#struktur">
<span class="material-symbols-outlined text-[20px]">account_tree</span>
<span class="text-sm font-medium">Struktur Organisasi</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-[#4c669a] hover:text-primary hover:bg-gray-50 dark:hover:bg-gray-800 transition-all" href="#sdm">
<span class="material-symbols-outlined text-[20px]">groups</span>
<span class="text-sm font-medium">SDM</span>
</a>
</nav>
</div>
</aside>
<!-- Main Content Column -->
<main class="flex-1 flex flex-col gap-12 pt-6 min-w-0">
<!-- Section: Sejarah -->
<section class="scroll-mt-28" id="sejarah">
<div class="bg-white dark:bg-[#1a2234] rounded-xl p-6 sm:p-8 shadow-sm border border-gray-100 dark:border-gray-800">
<div class="flex items-center gap-3 mb-6">
<div class="bg-blue-100 dark:bg-blue-900/30 p-2 rounded-lg text-primary">
<span class="material-symbols-outlined text-[28px]">history</span>
</div>
<h2 class="text-2xl sm:text-3xl font-bold text-[#0d121b] dark:text-white">Sejarah Stasiun</h2>
</div>
<div class="prose dark:prose-invert max-w-none text-[#4c669a] dark:text-gray-300 mb-8 leading-relaxed">
<p>Stasiun Geofisika Kelas I Tangerang memiliki perjalanan panjang dalam memberikan layanan informasi cuaca, iklim, dan kegempaan bagi wilayah Banten dan sekitarnya. Sejak didirikan, stasiun ini terus berinovasi dalam teknologi pengamatan.</p>
</div>
<!-- Timeline Component -->
<div class="grid grid-cols-[40px_1fr] gap-x-4">
<!-- Item 1 -->
<div class="flex flex-col items-center gap-1 pt-1">
<div class="size-3 bg-primary rounded-full ring-4 ring-blue-50 dark:ring-blue-900/20"></div>
<div class="w-[2px] bg-[#e7ebf3] dark:bg-gray-700 h-full grow"></div>
</div>
<div class="flex flex-col pb-8">
<span class="text-primary font-bold text-sm">1970</span>
<h3 class="text-[#0d121b] dark:text-white text-lg font-bold">Pendirian Awal</h3>
<p class="text-[#4c669a] dark:text-gray-400 text-sm mt-1">Stasiun mulai beroperasi sebagai pos pengamatan cuaca sederhana untuk mendukung pertanian lokal.</p>
</div>
<!-- Item 2 -->
<div class="flex flex-col items-center gap-1 pt-1">
<div class="size-3 bg-white border-2 border-primary rounded-full"></div>
<div class="w-[2px] bg-[#e7ebf3] dark:bg-gray-700 h-full grow"></div>
</div>
<div class="flex flex-col pb-8">
<span class="text-primary font-bold text-sm">1995</span>
<h3 class="text-[#0d121b] dark:text-white text-lg font-bold">Modernisasi Peralatan Seismograf</h3>
<p class="text-[#4c669a] dark:text-gray-400 text-sm mt-1">Instalasi peralatan digital pertama untuk mendeteksi gempa bumi dengan lebih akurat dan real-time.</p>
</div>
<!-- Item 3 -->
<div class="flex flex-col items-center gap-1 pt-1">
<div class="size-3 bg-white border-2 border-primary rounded-full"></div>
<div class="w-[2px] bg-[#e7ebf3] dark:bg-gray-700 h-full grow"></div>
</div>
<div class="flex flex-col pb-8">
<span class="text-primary font-bold text-sm">2008</span>
<h3 class="text-[#0d121b] dark:text-white text-lg font-bold">Peningkatan Menjadi Kelas I</h3>
<p class="text-[#4c669a] dark:text-gray-400 text-sm mt-1">Stasiun ditingkatkan statusnya menjadi Kelas I seiring dengan bertambahnya tanggung jawab dan wilayah cakupan.</p>
</div>
<!-- Item 4 -->
<div class="flex flex-col items-center gap-1 pt-1">
<div class="size-3 bg-primary rounded-full"></div>
</div>
<div class="flex flex-col">
<span class="text-primary font-bold text-sm">2015 - Sekarang</span>
<h3 class="text-[#0d121b] dark:text-white text-lg font-bold">Peresmian Gedung Operasional Baru</h3>
<p class="text-[#4c669a] dark:text-gray-400 text-sm mt-1">Gedung baru dengan fasilitas Command Center terintegrasi diresmikan untuk mendukung diseminasi informasi cepat.</p>
</div>
</div>
</div>
</section>
<!-- Section: Visi & Misi -->
<section class="scroll-mt-28" id="visi-misi">
<h2 class="text-2xl sm:text-3xl font-bold text-[#0d121b] dark:text-white mb-6 pl-2 border-l-4 border-primary">Visi &amp; Misi</h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Visi Card -->
<div class="bg-primary rounded-xl p-8 text-white relative overflow-hidden group">
<div class="absolute top-0 right-0 p-8 opacity-10">
<span class="material-symbols-outlined text-[120px]">visibility</span>
</div>
<div class="relative z-10 h-full flex flex-col justify-center">
<span class="text-blue-200 font-bold tracking-widest text-sm mb-4 uppercase">Visi Kami</span>
<h3 class="text-2xl font-bold leading-relaxed">
                                    "Terwujudnya pelayanan geofisika yang handal, tanggap dan terpercaya dalam rangka mendukung keselamatan masyarakat serta keberhasilan pembangunan di daerah / Provinsi Banten."
                                </h3>
</div>
</div>
<!-- Misi Card -->
<div class="bg-white dark:bg-[#1a2234] rounded-xl p-8 border border-gray-100 dark:border-gray-800 shadow-sm flex flex-col">
<span class="text-primary font-bold tracking-widest text-sm mb-6 uppercase flex items-center gap-2">
<span class="material-symbols-outlined text-[20px]">flag</span> Misi Kami
                            </span>
<ul class="flex flex-col gap-4 text-[#4c669a] dark:text-gray-300">
<li class="flex gap-3">
<span class="bg-blue-50 dark:bg-blue-900/20 text-primary rounded-full size-6 flex items-center justify-center shrink-0 text-xs font-bold">1</span>
<span class="text-sm leading-relaxed">Mengamati dan memahami fenomena gempabumi dan tsunami serta fenomena seismologi teknik, geofisika potensial dan tanda waktu di daerah / Provinsi Banten.</span>
</li>
<li class="flex gap-3">
<span class="bg-blue-50 dark:bg-blue-900/20 text-primary rounded-full size-6 flex items-center justify-center shrink-0 text-xs font-bold">2</span>
<span class="text-sm leading-relaxed">Menyediakan data, informasi dan jasa gempabumi dan tsunami serta fenomena seismologi teknik, geofisika potensial dan tanda waktu yang handal dan terpercaya di daerah / Provinsi Banten.</span>
</li>
<li class="flex gap-3">
<span class="bg-blue-50 dark:bg-blue-900/20 text-primary rounded-full size-6 flex items-center justify-center shrink-0 text-xs font-bold">3</span>
<span class="text-sm leading-relaxed">Mengkoordinasi dan Memfasilitasi kegiatan di bidang gempabumi dan tsunami serta seismologi teknik geofisika potensial dan tanda waktu di daerah / Provinsi Banten.</span>
</li>
</ul>
</div>
</div>
</section>
<!-- Section: Tugas & Fungsi -->
<section class="scroll-mt-28" id="tugas-fungsi">
<h2 class="text-2xl sm:text-3xl font-bold text-[#0d121b] dark:text-white mb-6 pl-2 border-l-4 border-primary">Tugas &amp; Fungsi</h2>
<div class="bg-white dark:bg-[#1a2234] rounded-xl p-6 sm:p-8 shadow-sm border border-gray-100 dark:border-gray-800 mb-6">
<p class="text-[#4c669a] dark:text-gray-300 leading-relaxed mb-6">
                            Berdasarkan Peraturan Kepala BMKG, Stasiun Geofisika Kelas I Tangerang mempunyai tugas melaksanakan pengamatan, pengelolaan data, pelayanan jasa, pemeliharaan alat, koordinasi dan kerjasama, serta ketatausahaan di bidang geofisika.
                        </p>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
<div class="p-4 rounded-lg bg-[#f8f9fc] dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800 border border-transparent hover:border-gray-200 dark:hover:border-gray-700 transition-all group">
<div class="flex items-start gap-4">
<div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow-sm text-primary group-hover:text-blue-600 transition-colors">
<span class="material-symbols-outlined">monitoring</span>
</div>
<div>
<h4 class="font-bold text-[#0d121b] dark:text-white mb-1">Pengamatan</h4>
<p class="text-xs text-[#4c669a] dark:text-gray-400">Melaksanakan pengamatan Geofisika (Gempa bumi, Magnet bumi, Listrik udara).</p>
</div>
</div>
</div>
<div class="p-4 rounded-lg bg-[#f8f9fc] dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800 border border-transparent hover:border-gray-200 dark:hover:border-gray-700 transition-all group">
<div class="flex items-start gap-4">
<div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow-sm text-primary group-hover:text-blue-600 transition-colors">
<span class="material-symbols-outlined">database</span>
</div>
<div>
<h4 class="font-bold text-[#0d121b] dark:text-white mb-1">Pengelolaan Data</h4>
<p class="text-xs text-[#4c669a] dark:text-gray-400">Pengumpulan, pengolahan, analisa dan pelaporan data hasil pengamatan.</p>
</div>
</div>
</div>
<div class="p-4 rounded-lg bg-[#f8f9fc] dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800 border border-transparent hover:border-gray-200 dark:hover:border-gray-700 transition-all group">
<div class="flex items-start gap-4">
<div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow-sm text-primary group-hover:text-blue-600 transition-colors">
<span class="material-symbols-outlined">rss_feed</span>
</div>
<div>
<h4 class="font-bold text-[#0d121b] dark:text-white mb-1">Pelayanan Informasi</h4>
<p class="text-xs text-[#4c669a] dark:text-gray-400">Penyebaran informasi geofisika kepada instansi terkait dan masyarakat umum.</p>
</div>
</div>
</div>
<div class="p-4 rounded-lg bg-[#f8f9fc] dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800 border border-transparent hover:border-gray-200 dark:hover:border-gray-700 transition-all group">
<div class="flex items-start gap-4">
<div class="bg-white dark:bg-gray-700 p-2 rounded-lg shadow-sm text-primary group-hover:text-blue-600 transition-colors">
<span class="material-symbols-outlined">build</span>
</div>
<div>
<h4 class="font-bold text-[#0d121b] dark:text-white mb-1">Pemeliharaan</h4>
<p class="text-xs text-[#4c669a] dark:text-gray-400">Pemeliharaan peralatan operasional geofisika agar selalu siap beroperasi.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section: Struktur Organisasi -->
<section class="scroll-mt-28" id="struktur">
<div class="flex items-center justify-between mb-6">
<h2 class="text-2xl sm:text-3xl font-bold text-[#0d121b] dark:text-white pl-2 border-l-4 border-primary">Struktur Organisasi</h2>
</div>
<div class="bg-white dark:bg-[#1a2234] rounded-xl p-8 shadow-sm border border-gray-100 dark:border-gray-800 overflow-x-auto">
<div class="min-w-[600px] flex flex-col items-center">
<!-- Level 1: Kepala Stasiun -->
<div class="flex flex-col items-center mb-6">
<div class="w-64 p-4 bg-white dark:bg-gray-800 border-2 border-primary rounded-lg shadow-md text-center z-10">
<p class="text-xs text-primary font-bold uppercase tracking-wider mb-1">Kepala Stasiun</p>
<p class="font-bold text-[#0d121b] dark:text-white">Suwardi, S.Si</p>
</div>
<div class="h-8 w-[2px] bg-gray-300 dark:bg-gray-600"></div>
</div>
<!-- Connector -->
<div class="relative flex justify-center w-full mb-6">
<div class="absolute top-0 h-[2px] w-[60%] bg-gray-300 dark:bg-gray-600"></div>
<div class="absolute top-0 h-6 w-[2px] left-[20%] bg-gray-300 dark:bg-gray-600"></div>
<div class="absolute top-0 h-6 w-[2px] right-[20%] bg-gray-300 dark:bg-gray-600"></div>
<div class="absolute top-0 h-6 w-[2px] bg-gray-300 dark:bg-gray-600"></div>
</div>
<!-- Level 2: Sub-Divisions -->
<div class="flex justify-between w-full gap-4">
<!-- Box 1 -->
<div class="flex flex-col items-center flex-1">
<div class="w-full max-w-[180px] p-3 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg text-center">
<p class="text-[10px] text-[#4c669a] font-bold uppercase mb-1">Kasubag</p>
<p class="text-sm font-bold text-[#0d121b] dark:text-white">Tata Usaha</p>
</div>
</div>
<!-- Box 2 -->
<div class="flex flex-col items-center flex-1">
<div class="w-full max-w-[180px] p-3 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg text-center">
<p class="text-[10px] text-[#4c669a] font-bold uppercase mb-1">Kelompok</p>
<p class="text-sm font-bold text-[#0d121b] dark:text-white">Jabatan Fungsional</p>
</div>
</div>
<!-- Box 3 -->
<div class="flex flex-col items-center flex-1">
<div class="w-full max-w-[180px] p-3 bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg text-center">
<p class="text-[10px] text-[#4c669a] font-bold uppercase mb-1">Koordinator</p>
<p class="text-sm font-bold text-[#0d121b] dark:text-white">Bidang Data &amp; Info</p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Section: SDM -->
<section class="scroll-mt-28" id="sdm">
<h2 class="text-2xl sm:text-3xl font-bold text-[#0d121b] dark:text-white mb-6 pl-2 border-l-4 border-primary">Sumber Daya Manusia</h2>
<p class="text-[#4c669a] dark:text-gray-300 mb-8">
                        Stasiun Geofisika Kelas I Tangerang didukung oleh SDM yang profesional dan kompeten di bidangnya.
                    </p>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
<!-- Profile Card 1 -->
<div class="bg-white dark:bg-[#1a2234] rounded-xl overflow-hidden shadow-sm border border-gray-100 dark:border-gray-800 hover:shadow-md transition-shadow">
<div class="aspect-square w-full bg-gray-200 relative">
<img alt="Portrait of Suwardi, Head of Station" class="w-full h-full object-cover" src="{{ asset('images/suwardi.png') }}"/>
</div>
<div class="p-4 text-center">
<h3 class="font-bold text-lg text-[#0d121b] dark:text-white">Suwardi, S.Si</h3>
<p class="text-primary text-sm font-medium">Kepala Stasiun</p>
<div class="mt-3 flex justify-center gap-2">
<span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded text-gray-600 dark:text-gray-300">S1 Geofisika</span>
</div>
</div>
</div>
<!-- Profile Card 2 -->
<div class="bg-white dark:bg-[#1a2234] rounded-xl overflow-hidden shadow-sm border border-gray-100 dark:border-gray-800 hover:shadow-md transition-shadow">
<div class="aspect-square w-full bg-gray-200 relative">
<img alt="Portrait of Rina Melati, Head of Administration" class="w-full h-full object-cover" src="{{ asset('images/rina.png') }}"/>
</div>
<div class="p-4 text-center">
<h3 class="font-bold text-lg text-[#0d121b] dark:text-white">Rina Melati, S.E.</h3>
<p class="text-primary text-sm font-medium">Kasubag Tata Usaha</p>
<div class="mt-3 flex justify-center gap-2">
<span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded text-gray-600 dark:text-gray-300">S1 Manajemen</span>
</div>
</div>
</div>
<!-- Profile Card 3 -->
<div class="bg-white dark:bg-[#1a2234] rounded-xl overflow-hidden shadow-sm border border-gray-100 dark:border-gray-800 hover:shadow-md transition-shadow">
<div class="aspect-square w-full bg-gray-200 relative">
<img alt="Portrait of Budi Santoso, Operational Coordinator" class="w-full h-full object-cover" src="{{ asset('images/budi.png') }}"/>
</div>
<div class="p-4 text-center">
<h3 class="font-bold text-lg text-[#0d121b] dark:text-white">Budi Santoso, M.Si</h3>
<p class="text-primary text-sm font-medium">Koord. Operasional</p>
<div class="mt-3 flex justify-center gap-2">
<span class="px-2 py-1 bg-gray-100 dark:bg-gray-700 text-xs rounded text-gray-600 dark:text-gray-300">S2 Meteorologi</span>
</div>
</div>
</div>
</div>
</section>
</main>
</div>
</div>
<!-- Footer -->
@include('partials.footer')
</body></html>