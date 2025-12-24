<!DOCTYPE html>
<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
 @vite(['resources/css/app.css', 'resources/js/app.js'])
<title>BMKG Stasiun Geofisika Tangerang</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&amp;family=Oswald:wght@500;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet"/>
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
<style>.hero-pattern {
    background-color: #1e3a8a;
    background-image: url(https://lh3.googleusercontent.com/aida-public/AB6AXuAe_CGOSF75Ky1iEBlRttZRAILrS1fQdKgVyhjCmRzVWlxENSTTrmzWt6EDbjYHFp8F9CCLem3eM_DUPx6OuDDW4UyHlEgGRYlAD_ZQss0FlA_R3S3CQGPn1WkpBD4RJSX5FeewFlK4lvQxZDDCpwWhqTmh_qj6QNcZyUf_OGwMIAV_9ozmf5jinGSx-TOi1uF-svi_iWavnMtmfdFLi-DpbZf4wzV0S8q8xs4jmq0Sd5Cv1nfZ9aP2vVDV7NXs51KHh_lP-SwU_ig)
    }</style>
</head>
<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200 font-sans transition-colors duration-300">
@include('partials.navbar')

<!-- hero image -->
<div class="relative bg-gray-900 h-[500px] overflow-hidden">
<img alt="Geophysics Station Building Background" class="absolute inset-0 w-full h-full object-cover opacity-60" src="{{ asset('images/gedung.png') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent"></div>
<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center items-center text-center">
<div class="mb-6 bg-white/10 backdrop-blur-sm p-4 rounded-full border border-white/20 inline-block animate-fade-in-down">
<img alt="BMKG Logo" class="h-20 w-auto drop-shadow-lg" src="{{ asset('images/logobmkg.png') }}"/>
</div>
<h1 class="text-4xl md:text-6xl font-display font-bold text-white mb-4 tracking-wider uppercase drop-shadow-md">
                Stasiun Geofisika <span class="text-secondary">Tangerang</span>
</h1>
<p class="text-gray-200 text-lg md:text-xl max-w-2xl mb-8 font-light">
                text
            </p>
<div class="flex gap-4">
<a class="bg-primary hover:bg-blue-800 text-white px-6 py-3 rounded-md font-medium transition shadow-lg border border-blue-700" href="#info-terkini">
                    Info Terkini
                </a>
<a class="bg-white/10 hover:bg-white/20 text-white backdrop-blur-md px-6 py-3 rounded-md font-medium transition border border-white/30" href="#layanan">
                    Layanan Kami
                </a>
</div>
</div>
</div>

<!-- weather & seismic info -->
<div class="relative -mt-10 z-20 max-w-6xl mx-auto px-4">
    <div class="bg-surface-light dark:bg-surface-dark rounded-lg shadow-xl p-6 grid grid-cols-1 md:grid-cols-4 gap-6 border-b-4 border-primary">

        <!-- SUHU -->
        <div class="flex items-center gap-4 border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-700 pb-4 md:pb-0">
            <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-full text-primary dark:text-blue-300">
                <span class="material-symbols-outlined">thermostat</span>
            </div>
            <div>
                <p class="text-xs text-gray-500 dark:text-gray-400 uppercase font-semibold">
                    SUHU UDARA
                </p>
                <p class="text-lg font-bold text-gray-900 dark:text-white">
                    {{ $cuaca['suhu'] ?? '-' }}°C
                </p>
            </div>
        </div>

        <!-- KELEMBAPAN -->
        <div class="flex items-center gap-4 border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-700 pb-4 md:pb-0">
            <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-full text-primary dark:text-blue-300">
                <span class="material-symbols-outlined">water_drop</span>
            </div>
            <div>
                <p class="text-xs text-gray-500 dark:text-gray-400 uppercase font-semibold">
                    KELEMBAPAN
                </p>
                <p class="text-lg font-bold text-gray-900 dark:text-white">
                    {{ $cuaca['kelembapan'] ?? '-' }}%
                </p>
            </div>
        </div>

        <!-- KECEPATAN ANGIN -->
        <div class="flex items-center gap-4 border-b md:border-b-0 md:border-r border-gray-200 dark:border-gray-700 pb-4 md:pb-0">
            <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-full text-primary dark:text-blue-300">
                <span class="material-symbols-outlined">air</span>
            </div>
            <div>
                <p class="text-xs text-gray-500 dark:text-gray-400 uppercase font-semibold">
                    KECEPATAN ANGIN
                </p>
                <p class="text-lg font-bold text-gray-900 dark:text-white">
                    {{ $cuaca['angin'] ?? '-' }} km/j
                </p>
            </div>
        </div>

        <!-- ARAH ANGIN -->
        <div class="flex items-center gap-4">
            <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-full text-primary dark:text-blue-300">
                <span class="material-symbols-outlined">explore</span>
            </div>
            <div>
                <p class="text-xs text-gray-500 dark:text-gray-400 uppercase font-semibold">
                    ARAH ANGIN
                </p>
                <p class="text-lg font-bold text-gray-900 dark:text-white">
                    {{ $cuaca['arah_angin'] ?? '-' }}
                </p>
            </div>
        </div>

    </div>
</div>


<!-- info terkini & seismic map -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16" id="info-terkini">
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden border border-gray-100 dark:border-gray-700 flex flex-col h-full">
<div class="bg-gray-50 dark:bg-gray-700/50 px-6 py-4 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
<h2 class="text-xl font-display font-bold text-gray-800 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary dark:text-blue-400">groups</span>
                        Kegiatan Stasiun
                    </h2>
<a class="text-sm text-primary dark:text-blue-400 hover:underline" href="#">Lihat Galeri</a>
</div>
<div class="relative h-64 sm:h-80 lg:h-96 w-full">
<img alt="Staff Kegiatan" class="w-full h-full object-cover" src="{{ asset('images/kunjungan2.jpeg') }}"/>
<div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6">
<p class="text-white font-medium text-lg">Kunjungan Kepala BMKG ke Stasiun Geofisika Tangerang </p>
<p class="text-gray-300 text-sm">9 Februari 2022</p>
</div>
</div>
<div class="p-6">
<p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed">
                        Dokumentasi kegiatan operasional dan kunjungan kerja di lingkungan Stasiun Geofisika Tangerang. Kami berkomitmen untuk terus meningkatkan kualitas pelayanan informasi MKG kepada masyarakat.
                    </p>
</div>
</div>
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg overflow-hidden border border-gray-100 dark:border-gray-700 flex flex-col h-full">
<div class="bg-gray-50 dark:bg-gray-700/50 px-6 py-4 border-b border-gray-100 dark:border-gray-700 flex justify-between items-center">
<h2 class="text-xl font-display font-bold text-gray-800 dark:text-white flex items-center gap-2">
<span class="material-symbols-outlined text-primary dark:text-blue-400">public</span>
                        Peta Seisimisitas
                    </h2>
<span class="bg-green-100 dark:bg-green-900 text-green-700 dark:text-green-300 text-xs px-2 py-1 rounded-full font-medium">Real-time</span>
</div>
<div class="flex-grow bg-blue-50 dark:bg-gray-900 relative p-4 flex items-center justify-center">
<img alt="Peta Seisimisitas Indonesia" class="w-full h-auto max-h-96 object-contain rounded border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800" src="{{ asset('images/ilal.png') }}"/>
</div>
<div class="p-6">
<div class="grid grid-cols-2 gap-4 text-sm">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-red-500"></span>
<span class="text-gray-600 dark:text-gray-300">Magnitudo &gt; 5</span>
</div>
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-yellow-400"></span>
<span class="text-gray-600 dark:text-gray-300">Magnitudo 3 - 5</span>
</div>
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-green-500"></span>
<span class="text-gray-600 dark:text-gray-300">Magnitudo &lt; 3</span>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- layanan & kaleidoskop -->
<section class="bg-gray-100 dark:bg-gray-900 py-16" id="layanan">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-12">
<h2 class="text-3xl font-display font-bold text-primary dark:text-white">Layanan &amp; Informasi</h2>
<p class="mt-4 text-gray-600 dark:text-gray-400">Akses cepat ke data dan informasi geofisika</p>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
<a class="group bg-surface-light dark:bg-surface-dark p-6 rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 text-center border border-transparent hover:border-primary dark:hover:border-blue-500" href="{{ url('gempa-page') }}">
<div class="bg-blue-50 dark:bg-gray-700 w-12 h-12 mx-auto rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary dark:text-blue-300 group-hover:text-white text-2xl">landscape</span>
</div>
<h3 class="font-semibold text-gray-800 dark:text-white text-sm">Gempa Bumi</h3>
</a>
<a class="group bg-surface-light dark:bg-surface-dark p-6 rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 text-center border border-transparent hover:border-primary dark:hover:border-blue-500" href="{{ url('magnet-bumi') }}">
<div class="bg-blue-50 dark:bg-gray-700 w-12 h-12 mx-auto rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary dark:text-blue-300 group-hover:text-white text-2xl">globe</span>
</div>
<h3 class="font-semibold text-gray-800 dark:text-white text-sm">Magnet Bumi</h3>
</a>
<a class="group bg-surface-light dark:bg-surface-dark p-6 rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 text-center border border-transparent hover:border-primary dark:hover:border-blue-500" href="#">
<div class="bg-blue-50 dark:bg-gray-700 w-12 h-12 mx-auto rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary dark:text-blue-300 group-hover:text-white text-2xl">thunderstorm</span>
</div>
<h3 class="font-semibold text-gray-800 dark:text-white text-sm">Petir</h3>
</a>
<a class="group bg-surface-light dark:bg-surface-dark p-6 rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 text-center border border-transparent hover:border-primary dark:hover:border-blue-500" href="{{ url('tanda-waktu') }}">
<div class="bg-blue-50 dark:bg-gray-700 w-12 h-12 mx-auto rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary dark:text-blue-300 group-hover:text-white text-2xl">schedule</span>
</div>
<h3 class="font-semibold text-gray-800 dark:text-white text-sm">Tanda Waktu</h3>
</a>
<a class="group bg-surface-light dark:bg-surface-dark p-6 rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 text-center border border-transparent hover:border-primary dark:hover:border-blue-500" href="{{ url('cuaca-iklim') }}">
<div class="bg-blue-50 dark:bg-gray-700 w-12 h-12 mx-auto rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary dark:text-blue-300 group-hover:text-white text-2xl">cloud</span>
</div>
<h3 class="font-semibold text-gray-800 dark:text-white text-sm">Cuaca &amp; Iklim</h3>
</a>
<a class="group bg-surface-light dark:bg-surface-dark p-6 rounded-lg shadow-sm hover:shadow-xl transition-all duration-300 text-center border border-transparent hover:border-primary dark:hover:border-blue-500" href="#">
<div class="bg-blue-50 dark:bg-gray-700 w-12 h-12 mx-auto rounded-lg flex items-center justify-center mb-4 group-hover:bg-primary transition-colors">
<span class="material-symbols-outlined text-primary dark:text-blue-300 group-hover:text-white text-2xl">menu_book</span>
</div>
<h3 class="font-semibold text-gray-800 dark:text-white text-sm">Publikasi</h3>
</a>
</div>
</div>
</section>
<section class="py-16 bg-surface-light dark:bg-surface-dark">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between items-end mb-8">
<div>
<h2 class="text-2xl font-display font-bold text-gray-900 dark:text-white">Kaleidoskop</h2>
<p class="text-gray-500 dark:text-gray-400 mt-1">Informasi terkini dari Stasiun Geofisika Tangerang</p>
</div>
<!-- <a class="text-primary dark:text-blue-400 font-semibold text-sm hover:underline" href="#">Lihat Semua</a> -->
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<article class="flex flex-col bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-md transition border border-gray-100 dark:border-gray-700">
<img alt="News 1" class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('images/gempa.jpg') }}"/>
<div class="p-5 flex flex-col flex-grow">
<div class="text-xs text-gray-500 dark:text-gray-400 mb-2 flex items-center gap-2">
<span class="material-symbols-outlined text-sm">calendar_today</span> January 3, 2025
                        </div>
<h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 line-clamp-2 hover:text-primary transition">Kaleidoskop Gempabumi 2024</h3>
<p class="text-gray-600 dark:text-gray-300 text-sm mb-4 line-clamp-3 flex-grow">
                            Sepanjang tahun 2024, provinsi Banten dan sekitarnya mengalami 2.063 titik kejadian gempabumi dengan 12 kejadian gempabumi yang dirasakan.
                        </p>
<a class="inline-block text-sm font-semibold text-primary dark:text-blue-400 hover:text-blue-700 mt-auto" href="#">Baca Selengkapnya →</a>
</div>
</article>
<article class="flex flex-col bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-md transition border border-gray-100 dark:border-gray-700">
<img alt="News 2" class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('images/peta.png') }}"/>
<div class="p-5 flex flex-col flex-grow">
<div class="text-xs text-gray-500 dark:text-gray-400 mb-2 flex items-center gap-2">
<span class="material-symbols-outlined text-sm">calendar_today</span> January 3, 2025
                        </div>
<h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 line-clamp-2 hover:text-primary transition">Kaleidoskop Aktivitas Sambaran Petir 2024</h3>
<p class="text-gray-600 dark:text-gray-300 text-sm mb-4 line-clamp-3 flex-grow">
                            Total sambaran petir sepanjang tahun 2024 sebanyak 1.398.716, dengan sambaran tertinggi pada bulan November dan sambaran terendah pada bulan Agustus 2024.
                        </p>
<a class="inline-block text-sm font-semibold text-primary dark:text-blue-400 hover:text-blue-700 mt-auto" href="#">Baca Selengkapnya →</a>
</div>
</article>
<article class="flex flex-col bg-white dark:bg-gray-800 rounded-lg shadow hover:shadow-md transition border border-gray-100 dark:border-gray-700">
<img alt="News 3" class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('images/iklim.png') }}"/>
<div class="p-5 flex flex-col flex-grow">
<div class="text-xs text-gray-500 dark:text-gray-400 mb-2 flex items-center gap-2">
<span class="material-symbols-outlined text-sm">calendar_today</span> January 3, 2025
                        </div>
<h3 class="text-lg font-bold text-gray-900 dark:text-white mb-2 line-clamp-2 hover:text-primary transition">Kaleidoskop Informasi Klimatologi 2024</h3>
<p class="text-gray-600 dark:text-gray-300 text-sm mb-4 line-clamp-3 flex-grow">
                            Rangkuman komprehensif dinamika iklim yang terjadi sepanjang tahun 2024 di wilayah Tangerang dan sekitarnya.
                        </p>
<a class="inline-block text-sm font-semibold text-primary dark:text-blue-400 hover:text-blue-700 mt-auto" href="#">Baca Selengkapnya →</a>
</div>
</article>
</div>
</div>
</section>

@include('partials.footer')

</body></html>