<!DOCTYPE html>
<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
 @vite(['resources/css/app.css', 'resources/js/app.js'])
<title>Informasi Petir - BMKG Stasiun Geofisika Tangerang</title>
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
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
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
        }.custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 3px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
        .dark .custom-scrollbar::-webkit-scrollbar-track {
            background: #1e293b;
        }
        .dark .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #475569;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200 font-sans transition-colors duration-300">
@include('partials.navbar')
<div class="relative bg-primary overflow-hidden">
<div class="absolute inset-0 z-0">
<img alt="Background Pattern" class="w-full h-full object-cover opacity-30 mix-blend-multiply" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDKi0_nkKvXM6RI5rZN4suP9Oob311ci4cuQE64CVWNNgfb-Mzier_6_z36dYFP-gnYUjTBFvem-KKePkI2rE5I8_-gCKbK60UYKolAcCPYv56xPnwMRf2-vCznlxKEVbKiNtjsX_5OCVlE5wrq8gDBADBlpfmg3VnfbEGRBSRSt8mSGU_l8nTy8JzFSLQdL5NUN0BN5aGDJn5U9KfIcRPl2XH_EaW-VkSfVl5tJowd9UVzJwBZGWgLvCa5xOgK7LCwVy9K5GCc4hM"/>
</div>
<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28 flex flex-col items-center text-center z-10">
<span class="inline-flex items-center rounded-full bg-blue-500/20 px-3 py-1 text-sm font-medium text-blue-100 ring-1 ring-inset ring-blue-500/40 mb-4 backdrop-blur-sm">
<span class="material-symbols-outlined text-sm mr-1">thunderstorm</span> Kelistrikan Udara
            </span>
<h1 class="text-4xl lg:text-5xl font-display font-bold text-white mb-6 tracking-wide drop-shadow-lg">
                Informasi &amp; Monitoring Petir
            </h1>
<p class="text-lg text-blue-100 max-w-2xl font-light leading-relaxed">
                Pantauan aktivitas petir secara realtime dan informasi peralatan pengamatan kelistrikan udara di wilayah Tangerang dan sekitarnya.
            </p>
</div>
<div class="absolute bottom-0 left-0 w-full overflow-hidden leading-none z-20">
<svg class="relative block w-[calc(100%+1.3px)] h-[60px]" data-name="Layer 1" preserveAspectRatio="none" viewBox="0 0 1200 120" xmlns="http://www.w3.org/2000/svg">
<path class="fill-background-light dark:fill-background-dark" d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"></path>
</svg>
</div>
</div>
<section class="pb-16 pt-8 bg-background-light dark:bg-background-dark">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex flex-col md:flex-row md:justify-between md:items-end mb-8 gap-4">
<div>
<h2 class="text-2xl font-display font-bold text-primary dark:text-blue-400 flex items-center gap-2">
<span class="material-symbols-outlined text-3xl">bolt</span>
                        PETIR REALTIME
                    </h2>
<p class="text-gray-500 dark:text-gray-400 mt-1">Peta sebaran sambaran petir Cloud to Ground (CG) dan Intra Cloud (IC).</p>
</div>
<div class="flex items-center gap-3 bg-white dark:bg-gray-800 px-4 py-2 rounded-full shadow-sm border border-gray-200 dark:border-gray-700">
<div class="flex relative">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
<span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
</div>
<span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Sistem Online</span>
<span class="text-xs text-gray-400 border-l border-gray-300 dark:border-gray-600 pl-3">Update: 10:45 WIB</span>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
<div class="lg:col-span-8">
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg border border-gray-200 dark:border-gray-700 overflow-hidden relative group h-[600px]">
<div class="absolute top-4 right-4 z-10 flex flex-col gap-2">
<button class="bg-white dark:bg-gray-800 p-2 rounded shadow text-gray-600 dark:text-gray-300 hover:text-primary hover:bg-gray-50 dark:hover:bg-gray-700 transition">
<span class="material-symbols-outlined">add</span>
</button>
<button class="bg-white dark:bg-gray-800 p-2 rounded shadow text-gray-600 dark:text-gray-300 hover:text-primary hover:bg-gray-50 dark:hover:bg-gray-700 transition">
<span class="material-symbols-outlined">remove</span>
</button>
<button class="bg-white dark:bg-gray-800 p-2 rounded shadow text-gray-600 dark:text-gray-300 hover:text-primary hover:bg-gray-50 dark:hover:bg-gray-700 transition mt-2">
<span class="material-symbols-outlined">layers</span>
</button>
</div>
<div class="absolute bottom-4 left-4 z-10 bg-white/90 dark:bg-gray-800/90 backdrop-blur px-4 py-3 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700 text-xs">
<h4 class="font-bold mb-2 text-gray-800 dark:text-white uppercase tracking-wider">Legenda</h4>
<div class="space-y-2">
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-red-500 border border-white dark:border-gray-600 shadow-sm"></span>
<span class="text-gray-600 dark:text-gray-300">CG+ (Positif)</span>
</div>
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-blue-500 border border-white dark:border-gray-600 shadow-sm"></span>
<span class="text-gray-600 dark:text-gray-300">CG- (Negatif)</span>
</div>
<div class="flex items-center gap-2">
<span class="w-3 h-3 rounded-full bg-yellow-400 border border-white dark:border-gray-600 shadow-sm"></span>
<span class="text-gray-600 dark:text-gray-300">IC (Intra Cloud)</span>
</div>
</div>
</div>
<div class="w-full h-full bg-blue-50 dark:bg-gray-900 relative overflow-hidden">
<img alt="Interactive Lightning Map" class="w-full h-full object-cover object-center opacity-80" src="{{ asset('images/interactive-lightning-map.png') }}"/>
<div class="absolute top-1/2 left-1/3 animate-pulse-slow">
<div class="w-4 h-4 bg-red-500 rounded-full shadow-[0_0_15px_rgba(239,68,68,0.8)] border-2 border-white"></div>
</div>
<div class="absolute top-1/3 left-1/2 animate-pulse-slow delay-100">
<div class="w-3 h-3 bg-blue-500 rounded-full shadow-[0_0_15px_rgba(59,130,246,0.8)] border border-white"></div>
</div>
<div class="absolute top-2/3 left-2/3 animate-pulse-slow delay-300">
<div class="w-3 h-3 bg-yellow-400 rounded-full shadow-[0_0_15px_rgba(250,204,21,0.8)] border border-white"></div>
</div>
<div class="absolute inset-0 bg-[linear-gradient(rgba(0,0,0,0.05)_1px,transparent_1px),linear-gradient(90deg,rgba(0,0,0,0.05)_1px,transparent_1px)] bg-[size:40px_40px] pointer-events-none"></div>
</div>
</div>
</div>
<div class="lg:col-span-4 flex flex-col h-[600px]">
<div class="bg-surface-light dark:bg-surface-dark rounded-xl shadow-lg border border-gray-200 dark:border-gray-700 flex flex-col h-full overflow-hidden">
<div class="bg-gray-50 dark:bg-gray-700/50 px-5 py-4 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center">
<h3 class="font-bold text-gray-800 dark:text-white text-sm uppercase tracking-wide">Data Terkini</h3>
<button class="text-primary dark:text-blue-400 hover:text-blue-700 text-xs font-semibold flex items-center">
<span class="material-symbols-outlined text-sm mr-1">download</span> Export
                            </button>
</div>
<div class="grid grid-cols-4 gap-2 px-5 py-2 bg-gray-100 dark:bg-gray-800 text-xs font-bold text-gray-500 dark:text-gray-400 border-b border-gray-200 dark:border-gray-700">
<div>Waktu</div>
<div>Lat/Lon</div>
<div class="text-center">Tipe</div>
<div class="text-right">Arus (kA)</div>
</div>
<div class="overflow-y-auto custom-scrollbar flex-grow p-0">
<table class="w-full text-left text-sm">
<tbody class="divide-y divide-gray-100 dark:divide-gray-700">
<tr class="hover:bg-blue-50 dark:hover:bg-gray-700/50 transition cursor-pointer group">
<td class="px-5 py-3 text-xs text-gray-600 dark:text-gray-300 font-mono">10:42:15</td>
<td class="px-5 py-3 text-xs text-gray-500 dark:text-gray-400">-6.12, 106.4</td>
<td class="px-5 py-3 text-center"><span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-200">CG+</span></td>
<td class="px-5 py-3 text-right text-xs font-mono font-medium text-gray-700 dark:text-gray-200">25.4</td>
</tr>
<tr class="hover:bg-blue-50 dark:hover:bg-gray-700/50 transition cursor-pointer group">
<td class="px-5 py-3 text-xs text-gray-600 dark:text-gray-300 font-mono">10:40:02</td>
<td class="px-5 py-3 text-xs text-gray-500 dark:text-gray-400">-6.22, 106.8</td>
<td class="px-5 py-3 text-center"><span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-200">CG-</span></td>
<td class="px-5 py-3 text-right text-xs font-mono font-medium text-gray-700 dark:text-gray-200">-12.8</td>
</tr>
<tr class="hover:bg-blue-50 dark:hover:bg-gray-700/50 transition cursor-pointer group">
<td class="px-5 py-3 text-xs text-gray-600 dark:text-gray-300 font-mono">10:38:55</td>
<td class="px-5 py-3 text-xs text-gray-500 dark:text-gray-400">-6.18, 106.5</td>
<td class="px-5 py-3 text-center"><span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold bg-yellow-100 text-yellow-700 dark:bg-yellow-900 dark:text-yellow-200">IC</span></td>
<td class="px-5 py-3 text-right text-xs font-mono font-medium text-gray-700 dark:text-gray-200">5.2</td>
</tr>
<tr class="hover:bg-blue-50 dark:hover:bg-gray-700/50 transition cursor-pointer group">
<td class="px-5 py-3 text-xs text-gray-600 dark:text-gray-300 font-mono">10:35:10</td>
<td class="px-5 py-3 text-xs text-gray-500 dark:text-gray-400">-6.30, 106.6</td>
<td class="px-5 py-3 text-center"><span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-200">CG-</span></td>
<td class="px-5 py-3 text-right text-xs font-mono font-medium text-gray-700 dark:text-gray-200">-18.1</td>
</tr>
<tr class="hover:bg-blue-50 dark:hover:bg-gray-700/50 transition cursor-pointer group">
<td class="px-5 py-3 text-xs text-gray-600 dark:text-gray-300 font-mono">10:31:45</td>
<td class="px-5 py-3 text-xs text-gray-500 dark:text-gray-400">-6.15, 106.7</td>
<td class="px-5 py-3 text-center"><span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-200">CG-</span></td>
<td class="px-5 py-3 text-right text-xs font-mono font-medium text-gray-700 dark:text-gray-200">-10.3</td>
</tr>
<tr class="hover:bg-blue-50 dark:hover:bg-gray-700/50 transition cursor-pointer group">
<td class="px-5 py-3 text-xs text-gray-600 dark:text-gray-300 font-mono">10:28:20</td>
<td class="px-5 py-3 text-xs text-gray-500 dark:text-gray-400">-6.11, 106.3</td>
<td class="px-5 py-3 text-center"><span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-200">CG+</span></td>
<td class="px-5 py-3 text-right text-xs font-mono font-medium text-gray-700 dark:text-gray-200">32.1</td>
</tr>
<tr class="hover:bg-blue-50 dark:hover:bg-gray-700/50 transition cursor-pointer group">
<td class="px-5 py-3 text-xs text-gray-600 dark:text-gray-300 font-mono">10:25:05</td>
<td class="px-5 py-3 text-xs text-gray-500 dark:text-gray-400">-6.19, 106.9</td>
<td class="px-5 py-3 text-center"><span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold bg-yellow-100 text-yellow-700 dark:bg-yellow-900 dark:text-yellow-200">IC</span></td>
<td class="px-5 py-3 text-right text-xs font-mono font-medium text-gray-700 dark:text-gray-200">4.5</td>
</tr>
<tr class="hover:bg-blue-50 dark:hover:bg-gray-700/50 transition cursor-pointer group">
<td class="px-5 py-3 text-xs text-gray-600 dark:text-gray-300 font-mono">10:22:18</td>
<td class="px-5 py-3 text-xs text-gray-500 dark:text-gray-400">-6.25, 106.5</td>
<td class="px-5 py-3 text-center"><span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-200">CG-</span></td>
<td class="px-5 py-3 text-right text-xs font-mono font-medium text-gray-700 dark:text-gray-200">-14.7</td>
</tr>
<tr class="hover:bg-blue-50 dark:hover:bg-gray-700/50 transition cursor-pointer group">
<td class="px-5 py-3 text-xs text-gray-600 dark:text-gray-300 font-mono">10:20:01</td>
<td class="px-5 py-3 text-xs text-gray-500 dark:text-gray-400">-6.08, 106.6</td>
<td class="px-5 py-3 text-center"><span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold bg-blue-100 text-blue-700 dark:bg-blue-900 dark:text-blue-200">CG-</span></td>
<td class="px-5 py-3 text-right text-xs font-mono font-medium text-gray-700 dark:text-gray-200">-9.2</td>
</tr>
<tr class="hover:bg-blue-50 dark:hover:bg-gray-700/50 transition cursor-pointer group">
<td class="px-5 py-3 text-xs text-gray-600 dark:text-gray-300 font-mono">10:15:44</td>
<td class="px-5 py-3 text-xs text-gray-500 dark:text-gray-400">-6.17, 106.4</td>
<td class="px-5 py-3 text-center"><span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-200">CG+</span></td>
<td class="px-5 py-3 text-right text-xs font-mono font-medium text-gray-700 dark:text-gray-200">28.9</td>
</tr>
</tbody>
</table>
</div>
<div class="bg-gray-50 dark:bg-gray-700/50 px-5 py-3 border-t border-gray-200 dark:border-gray-700 text-center">
<a class="text-xs text-primary dark:text-blue-400 font-semibold hover:underline" href="#">Lihat Arsip Lengkap</a>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="py-16 bg-white dark:bg-gray-800 border-t border-gray-100 dark:border-gray-700">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-12">
<span class="text-secondary font-bold tracking-wider text-sm uppercase">Teknologi</span>
<h2 class="text-3xl font-display font-bold text-gray-900 dark:text-white mt-2">Peralatan Pengamatan Petir</h2>
<div class="w-20 h-1 bg-secondary mx-auto mt-4 rounded-full"></div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<div class="group bg-surface-light dark:bg-gray-900 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 border border-gray-100 dark:border-gray-700 flex flex-col">
<div class="relative h-60 overflow-hidden">
<img alt="Lightning Detector Sensor" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500" src="{{ asset('images/lightning-detector-sensor.png') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<h3 class="absolute bottom-4 left-4 text-white text-xl font-display font-bold">Lightning Detector Sensor</h3>
</div>
<div class="p-6 flex-grow">
<p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed mb-4">
                            Sensor elektromagnetik presisi tinggi yang mampu mendeteksi gelombang radio yang dipancarkan oleh sambaran petir. Mampu membedakan jenis sambaran Intra-Cloud (IC) dan Cloud-to-Ground (CG) dengan akurasi lokasi hingga 200 meter.
                        </p>
<div class="flex flex-wrap gap-2 mb-4">
<span class="bg-blue-50 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 text-xs px-2 py-1 rounded">High Precision</span>
<span class="bg-blue-50 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 text-xs px-2 py-1 rounded">Real-time</span>
</div>
</div>
<div class="px-6 pb-6 mt-auto">
<a class="inline-flex items-center text-sm font-semibold text-primary dark:text-blue-400 hover:text-blue-700 transition" href="#">
                            Spesifikasi Teknis <span class="material-symbols-outlined text-sm ml-1">arrow_forward</span>
</a>
</div>
</div>
<div class="group bg-surface-light dark:bg-gray-900 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 border border-gray-100 dark:border-gray-700 flex flex-col">
<div class="relative h-60 overflow-hidden">
<img alt="Data Processing Unit" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500" src="{{ asset('images/data-processing-unit.png') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<h3 class="absolute bottom-4 left-4 text-white text-xl font-display font-bold">Data Processing Unit</h3>
</div>
<div class="p-6 flex-grow">
<p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed mb-4">
                            Unit pemroses data pusat yang mengumpulkan sinyal dari sensor, melakukan triangulasi lokasi, dan mengklasifikasikan jenis petir. Sistem ini bekerja 24 jam nonstop untuk memastikan data yang dikirim ke server pusat selalu mutakhir.
                        </p>
<div class="flex flex-wrap gap-2 mb-4">
<span class="bg-blue-50 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 text-xs px-2 py-1 rounded">24/7 Operation</span>
<span class="bg-blue-50 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 text-xs px-2 py-1 rounded">Low Latency</span>
</div>
</div>
<div class="px-6 pb-6 mt-auto">
<a class="inline-flex items-center text-sm font-semibold text-primary dark:text-blue-400 hover:text-blue-700 transition" href="#">
                            Spesifikasi Teknis <span class="material-symbols-outlined text-sm ml-1">arrow_forward</span>
</a>
</div>
</div>
<div class="group bg-surface-light dark:bg-gray-900 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300 border border-gray-100 dark:border-gray-700 flex flex-col">
<div class="relative h-60 overflow-hidden">
<img alt="Monitoring Display System" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500" src="{{ asset('images/monitoring-display-system.png') }}"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
<h3 class="absolute bottom-4 left-4 text-white text-xl font-display font-bold">Monitoring Display System</h3>
</div>
<div class="p-6 flex-grow">
<p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed mb-4">
                            Perangkat lunak visualisasi data yang menampilkan sebaran petir pada peta digital interaktif. Digunakan oleh forecaster untuk memantau pergerakan badai petir dan mengeluarkan peringatan dini cuaca ekstrem kepada masyarakat.
                        </p>
<div class="flex flex-wrap gap-2 mb-4">
<span class="bg-blue-50 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 text-xs px-2 py-1 rounded">Interactive Map</span>
<span class="bg-blue-50 dark:bg-blue-900/50 text-blue-700 dark:text-blue-300 text-xs px-2 py-1 rounded">Early Warning</span>
</div>
</div>
<div class="px-6 pb-6 mt-auto">
<a class="inline-flex items-center text-sm font-semibold text-primary dark:text-blue-400 hover:text-blue-700 transition" href="#">
                            Spesifikasi Teknis <span class="material-symbols-outlined text-sm ml-1">arrow_forward</span>
</a>
</div>
</div>
</div>
</div>
</section>
@include('partials.footer')
</body></html>