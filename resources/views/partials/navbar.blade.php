<!-- top nav -->
<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200 font-sans transition-colors duration-300">

<div class="bg-primary text-white py-2 px-4 text-xs font-medium">
  <div class="max-w-7xl mx-auto flex justify-between items-center">

    <!-- KIRI: DATE -->
    <div class="flex items-center gap-4 uppercase tracking-wide">
      <div id="bmkg-date"></div>
    </div>

 <!-- KANAN: STI + JAM (SATU BARIS, SATU FLEX) -->
    <div class="flex items-center gap-3">
      <span>STANDAR WAKTU INDONESIA</span>
      <span id="wib-time"></span>
      <span>/</span>
      <span id="utc-time"></span>
    </div>

  </div>
</div>


<!-- main nav -->
<nav class="bg-surface-light dark:bg-surface-dark shadow-md sticky top-0 z-50 transition-colors duration-300">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between h-20">
<div class="flex items-center">
<div class="flex-shrink-0 flex items-center gap-3">
<div class="h-10 w-10 relative">
<img alt="BMKG Logo" class="h-full w-full object-contain" src="{{ asset('images/logobmkg.png') }}"/>
</div>
<div class="hidden md:block">
<h1 class="font-display text-xl font-bold text-primary dark:text-blue-400 tracking-wide">BMKG</h1>
<p class="text-[10px] uppercase text-gray-500 dark:text-gray-400 tracking-widest">Stasiun Geofisika Tangerang</p>
</div>
</div>
</div>
<div class="hidden lg:flex items-center space-x-1">
<a class="px-3 py-2 text-sm font-medium text-primary dark:text-blue-300 border-b-2 border-primary" href="/">Beranda</a>
<a class="px-3 py-2 text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md transition" href="{{ url('profil') }}">Profil</a>
<a class="px-3 py-2 text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md transition" href="{{ url('gempa-page') }}">Gempa Bumi</a>
<a class="px-3 py-2 text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md transition" href="{{ url('magnet-bumi') }}">Magnet Bumi</a>
<a class="px-3 py-2 text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md transition" href="{{ url('petir') }}">Petir</a>
<a class="px-3 py-2 text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md transition" href="{{ url('tanda-waktu') }}">Tanda Waktu</a>
<a class="px-3 py-2 text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md transition" href="{{ url('cuaca-iklim') }}">Cuaca & Iklim</a>
<a class="px-3 py-2 text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md transition" href="{{ url('publikasi') }}">Publikasi</a>
<a class="px-3 py-2 text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md transition" href="{{ url('layanan') }}">Layanan</a>
</div>
<div class="flex items-center lg:hidden">
<button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary" type="button" onclick="toggleMobileMenu()">
<span class="sr-only">Open main menu</span>
<span class="material-symbols-outlined">menu</span>
</button>
</div>
</div>
<!-- Mobile menu -->
<div class="hidden lg:hidden" id="mobile-menu">
<div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-surface-light dark:bg-surface-dark">
<a class="block px-3 py-2 text-base font-medium text-primary dark:text-blue-300 border-b-2 border-primary" href="/">Beranda</a>
<a class="block px-3 py-2 text-base font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md transition" href="{{ url('profil') }}">Profil</a>
<a class="block px-3 py-2 text-base font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md transition" href="{{ url('gempa-page') }}">Gempa Bumi</a>
<a class="block px-3 py-2 text-base font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md transition" href="{{ url('magnet-bumi') }}">Magnet Bumi</a>
<a class="block px-3 py-2 text-base font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md transition" href="{{ url('petir') }}">Petir</a>
<a class="block px-3 py-2 text-base font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md transition" href="{{ url('tanda-waktu') }}">Tanda Waktu</a>
<a class="block px-3 py-2 text-base font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md transition" href="{{ url('cuaca-iklim') }}">Cuaca & Iklim</a>
<a class="block px-3 py-2 text-base font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md transition" href="{{ url('publikasi') }}">Publikasi</a>
<a class="block px-3 py-2 text-base font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-white hover:bg-gray-50 dark:hover:bg-gray-700 rounded-md transition" href="{{ url('layanan') }}">Layanan</a>
</div>
</div>
</div>
</nav>

<script>
function toggleMobileMenu() {
  const menu = document.getElementById('mobile-menu');
  menu.classList.toggle('hidden');
}

  document.addEventListener('DOMContentLoaded', function () {
    function updateBMKG() {
      const now = new Date();

      // UTC
      const uh = String(now.getUTCHours()).padStart(2, '0');
      const um = String(now.getUTCMinutes()).padStart(2, '0');
      const us = String(now.getUTCSeconds()).padStart(2, '0');

      // WIB = UTC + 7
      const wib = new Date(now.getTime() + 7 * 3600000);
      const wh = String(wib.getUTCHours()).padStart(2, '0');
      const wm = String(wib.getUTCMinutes()).padStart(2, '0');
      const ws = String(wib.getUTCSeconds()).padStart(2, '0');

      // Tanggal
      const tanggal = wib.toLocaleDateString('id-ID', {
        weekday: 'long',
        day: 'numeric',
        month: 'long',
        year: 'numeric'
      }).toUpperCase();

      document.getElementById('bmkg-date').textContent = tanggal;
      document.getElementById('wib-time').textContent = `${wh}:${wm}:${ws}`;
      document.getElementById('utc-time').textContent = `${uh}:${um}:${us} UTC`;
    }

    updateBMKG();
    setInterval(updateBMKG, 1000);
  });



</script>


</body>