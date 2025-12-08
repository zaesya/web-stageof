<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Stasiun Geofisika Tangerang</title>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
    color: #000000ff;
    background: #fff;
  }

  /* NAVBAR WRAPPER */
  nav {
    background-color: #2a3a66;
    display: flex;
    justify-content: center;
    gap: 30px;
    padding: 15px 0;
    margin-bottom: 10px;
    margin-top: 10px;
    box-sizing: border-box;
  }

  .nav-item {
    position: relative;
  }

  .nav-link {
    color: white;
    text-decoration: none;
    font-weight: 500;
    font-size: 14px;
    text-transform: uppercase;
    padding: 5px 12px;
    display: block;
    border-radius: 4px;
    transition: 0.2s;
  }

  .nav-link:hover {
    background-color: #1d2a4d;
    color: #e2e1dfff;
  }

  .dropdown {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #1e335c;
    padding: 12px;
    border-radius: 6px;
    flex-direction: column;
    gap: 8px;
    min-width: 180px;
    z-index: 99;
    opacity: 0;
    transition: opacity 0.15s ease-in-out;
  }

  .dropdown a {
    color: #fff;
    padding: 6px 10px;
    border-radius: 4px;
    text-decoration: none;
    font-size: 13px;
    transition: 0.2s;
  }

  .dropdown a:hover {
    background-color: #1d2a4d;
  }

  .nav-item:hover .dropdown {
    display: flex;
    opacity: 1;
  }

  .hero {
    width: 100%;
    height: 250px;
    background-image: url('{{ asset("images/hero-banner.jpg") }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    margin-top: 15px;
  }

  .content {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 20px;
    padding: 20px 30px;
  }
  .content-top-left {
    position: relative;
    height: 450px;
    overflow: hidden;
  }
  .content-top-left .slider {
    position: relative;
    width: 100%;
    height: 100%;
  }
  .content-top-left .slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    opacity: 0;
    transition: opacity 0.5s ease;
  }
  .content-top-left .slide.active {
    opacity: 1;
  }
  .content-top-left .prev,
  .content-top-left .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    font-size: 18px;
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 10;
  }
  .content-top-left .prev {
    left: 10px;
  }
  .content-top-left .next {
    right: 10px;
  }
  .content-top-left:hover .prev,
  .content-top-left:hover .next {
    opacity: 1;
  }
  .content-top-left .dots {
    position: absolute;
    bottom: 10px;
    width: 100%;
    text-align: center;
  }
  .content-top-left .dot {
    height: 10px;
    width: 10px;
    margin: 0 5px;
    display: inline-block;
    background-color: #bbb;
    border-radius: 50%;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  .content-top-left .dot.active {
    background-color: #717171;
  }

  .content-top-right {
    background: #ccc;
    height: 250px; /* Unchanged */
    position: relative;
    overflow: hidden;
  }

  .content-top-right .slider {
    display: flex;
    width: 300%;
    transition: transform 0.5s ease;
  }

  .content-top-right .slide {
    width: 33.333%;
    height: 250px; /* Unchanged */
    background-size: cover;
    background-position: center;
  }

  .content-top-right .dots {
    position: absolute;
    bottom: 10px;
    width: 100%;
    text-align: center;
  }
  .content-top-right .dot {
    height: 10px;
    width: 10px;
    margin: 0 5px;
    display: inline-block;
    background-color: #bbb;
    border-radius: 50%;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  .content-top-right .active {
    background-color: #717171;
  }

  /* Updated content-bottom with youtube and cards */
  .content-bottom {
    display: flex;
    gap: 20px;
    padding: 0 30px 20px 30px;
    box-sizing: border-box;
    align-items: stretch;
  }

  /* YouTube preview - left big box */
  .youtube-preview {
    flex: 2;
    background-color: #ccc; /* fallback background */
    border-radius: 4px;
    overflow: hidden;
    min-height: 320px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.3);
  }

  .youtube-preview iframe {
    width: 100%;
    height: 100%;
    min-height: 320px;
    border: none;
    display: block;
  }

  /* Cards column on right stacked vertically */
  .cards-column {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .card {
    background-color: #569fffff;
    border-radius: 4px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.3);
    color: #000;
    flex: 1;
    display: flex;
    flex-direction: column;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.4);
  }

  /* Image on top of card */
  .card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    display: block;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
  }

  .card-body {
    background-color: #3c3d47ff;
    width: 100%;
    text-align: center;
    padding: 12px 0;
    color: #ffffffff;
    font-weight: 600;
    font-size: 16px;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
  }

  /* Footer - minimal black style */
  footer {
    background-color: #111c3bff;
    color: #e6e6e6;
    display: flex;
    /* flex-wrap: wrap; */
    justify-content: flex-start;
    padding: 40px 50px;
    gap: -80px;
    font-size: 16px;
    box-sizing: border-box;
  }

  footer > div {
    flex: 1;
    min-width: 220px;
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
  }

  footer .contact h2 {
    font-weight: 700;
    font-size: 22px;
    margin-bottom: 5px;
    color: white;
  }

  footer .contact p {
    color: #b3b3b3;
    margin-bottom: 10px;
  }

  footer .contact a.email {
    margin-top: 5px;
    font-weight: 600;
    font-size: 1.1em;
    color: white;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    user-select: none;
    transition: color 0.3s ease;
  }
  footer .contact a.email:hover {
    text-decoration: underline;
    color: #f0dba1;
  }
  footer .contact a.email:hover::after {
    transform: translateX(6px);
  }

  footer h3 {
    font-weight: 600;
    margin-bottom: 15px;
    color: white;
  }

  footer .projects a,
  footer .socials a {
    color: #b3b3b3;
    font-weight: 400;
    font-size: 15px;
    text-decoration: none;
    margin-bottom: 10px;
    margin-left: -50px
    transition: color 0.3s ease;
  }
  footer .projects a:hover,
  footer .socials a:hover {
    color: #e1d7bdff;
    text-decoration: underline;
  }

  footer .socials {
    display: flex;
    gap: 15px;
  }

  footer .arrow-up {
    position: absolute;
    right: 0;
    top: 0;
    font-size: 30px;
    cursor: pointer;
    user-select: none;
    color: #b3b3b3;
    transition: color 0.3s ease;
    line-height: 1;
  }

  footer .arrow-up:hover {
    color: #f0dba1;
  }

  .social-icons {
  display: flex;
  gap: 15px;
  margin-top: 10px;
  align-items: center;
}

.social-icons a img {
  width: 38px;
  height: 38px;
  transition: transform 0.25s ease, filter 0.25s ease;
  cursor: pointer;
}

.social-icons a img:hover {
  transform: scale(1.18);
  filter: brightness(1.2);
}


  /* Responsive */
  @media (max-width: 768px) {
    footer {
      flex-direction: column;
      padding: 40px 30px;
    }
    footer > div {
      min-width: 100%;
      margin-bottom: 40px;
    }
    footer .arrow-up {
      position: static;
      text-align: right;
    }

    .content-bottom {
      flex-direction: column;
      align-items: stretch;
    }
    .cards-column {
      flex-direction: row;
      gap: 15px;
      margin-top: 20px;
    }
    .card {
      flex: 1;
      height: auto;
      position: relative;
    }
    .card-body {
      border-radius: 4px;
      padding: 15px;
    }

    .youtube-preview iframe {
      min-height: 200px;
    }
  }
</style>
</head>
<body>

<nav>
  <div class="nav-item">
    <a class="nav-link" href="#">Profile</a>
    <div class="dropdown">
      <a href="#">Sejarah</a>
      <a href="#">Struktur Organisasi</a>
      <a href="#">Tugas & Fungsi</a>
    </div>
  </div>

  <div class="nav-item">
    <a class="nav-link" href="#">Gempa Bumi</a>
    <div class="dropdown">
      <a href="#">Gempa Terkini</a>
      <a href="#">Peta Seismisitas</a>
      <a href="#">Laporan Aktivitas</a>
    </div>
  </div>

  <div class="nav-item">
    <a class="nav-link" href="#">Magnet Bumi</a>
    <div class="dropdown">
      <a href="#">Data Harian</a>
      <a href="#">Grafik Magnet</a>
    </div>
  </div>

  <div class="nav-item">
    <a class="nav-link" href="#">Petir</a>
    <div class="dropdown">
      <a href="#">Peta Petir</a>
      <a href="#">Intensitas Petir</a>
    </div>
  </div>

  <div class="nav-item">
    <a class="nav-link" href="#">Tanda Waktu</a>
    <div class="dropdown">
      <a href="#">Jam Atom</a>
      <a href="#">Data Sinkronisasi</a>
    </div>
  </div>

  <div class="nav-item">
    <a class="nav-link" href="#">Cuaca & Iklim</a>
    <div class="dropdown">
      <a href="#">Prakiraan Cuaca</a>
      <a href="#">Iklim Bulanan</a>
      <a href="#">Analisis Curah Hujan</a>
    </div>
  </div>

  <div class="nav-item">
    <a class="nav-link" href="#">Publikasi</a>
    <div class="dropdown">
      <a href="#">Artikel</a>
      <a href="#">Buletin</a>
      <a href="#">Laporan</a>
    </div>
  </div>

  <div class="nav-item">
    <a class="nav-link" href="#">Layanan</a>
    <div class="dropdown">
      <a href="#">Permohonan Data</a>
      <a href="#">Informasi Publik</a>
    </div>
  </div>
</nav>

<section class="hero"></section>

<div class="content">
  <div class="content-top-left">
    <div class="slider">
      <div class="slide active" style="background-image: url('{{ asset('images/gedung.png') }}');"></div>
      <div class="slide" style="background-image: url('{{ asset('images/pengamatan.jpg') }}');"></div>
      <div class="slide" style="background-image: url('{{ asset('images/kunjungan.jpeg') }}');"></div>
      <div class="slide" style="background-image: url('{{ asset('images/kunjungan2.jpeg') }}');"></div>
      <div class="slide" style="background-image: url('{{ asset('images/slg.png') }}');"></div>
      <div class="slide" style="background-image: url('{{ asset('images/ilal.png') }}');"></div>
    </div>
    <button class="prev">&lt;</button>
    <button class="next">&gt;</button>
    <!-- <div class="dots">
      <span class="dot active" data-slide="0"></span>
      <span class="dot" data-slide="1"></span>
      <span class="dot" data-slide="2"></span>
    </div> -->
  </div>

  <div class="content-top-right">
    <div class="slider">
      <div class="slide" style="background-image: url('{{ asset('images/gempa.jpg') }}');"></div>
      <div class="slide" style="background-image: url('{{ asset('images/iklim.png') }}');"></div>
      <div class="slide" style="background-image: url('{{ asset('images/peta.png') }}');"></div>
    </div>

    <div class="dots">
      <span class="dot active" data-slide="0"></span>
      <span class="dot" data-slide="1"></span>
      <span class="dot" data-slide="2"></span>
    </div>
  </div>
</div>

<div class="content-bottom">  
  <div class="youtube-preview">
    <iframe src="https://www.youtube.com/embed/62EaDJ1q6mk" 
      title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
  </div>

  <div class="cards-column">
    <div class="card">
      <img src="{{ asset('images/linkp.png') }}" alt="Link Pelayanan" />
      <div class="card-body">Link Pelayanan</div>
    </div>
    <div class="card">
      <img src="{{ asset('images/kuk.png') }}" alt="Kinerja Unit Kerja" />
      <div class="card-body">Kinerja Unit Kerja</div>
    </div>
  </div>
</div>

<footer>
  <div class="contact">
    <h2>
      <img src="{{ asset('images/logobmkg.png') }}" alt="BMKG Logo" style="height: 100px; width: auto;">
    </h2>
    <p>Alamat</p>
    Jalan Meteorologi No. 5, Tanah Tinggi, Tangerang,<br>
    Banten 15119 <br>
    <p>Telp. & Fax</p>
    Telp: (021) 5523665 <br>
    Fax: (021) 55771822
    <br><br>
    <a href="mailto:datin.stageof@gmail.com" class="email">datin.stageof@gmail.com</a>
  </div>

  <div class="projects">
    <h3>Link BMKG</h3>
    <a href="#">Informasi Cuaca</a>
    <a href="#">InaTEWS (Indonesia Tsunami Early Warning System)</a>
    <a href="#">Katalog Geofisika</a>
    <a href="#">Data Online BMKG</a>
    <a href="#">SDM BMKG</a>
    <a href="#">Aplikasi Online BMKG</a>

    <h3 style="margin-top:25px;">Follow Us</h3>
<div class="social-icons">
      <a href="https://wa.me/628000000000" target="_blank">
        <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp">
      </a>
      <a href="https://instagram.com/infoBMKG" target="_blank">
        <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram">
      </a>
      <a href="https://facebook.com/bmkg.go.id" target="_blank">
        <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook">
      </a>
      <a href="https://twitter.com/infoBMKG" target="_blank">
        <img src="https://cdn-icons-png.flaticon.com/512/5968/5968958.png" alt="Twitter">
      </a>
      <a href="https://youtube.com/@BMKG" target="_blank">
        <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube">
      </a>
    </div>
  </div>

</footer>


<script>
  // Slider for content-top-right (existing, unchanged)
  const sliderRight = document.querySelector('.content-top-right .slider');
  const dotsRight = document.querySelectorAll('.content-top-right .dot');
  let currentSlideRight = 0;

  function updateSliderRight() {
    sliderRight.style.transform = `translateX(-${currentSlideRight * 33.333}%)`;
    dotsRight.forEach((dot, index) => {
      dot.classList.toggle('active', index === currentSlideRight);
    });
  }

  dotsRight.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      currentSlideRight = index;
      updateSliderRight();
    });
  });

  setInterval(() => {
    currentSlideRight = (currentSlideRight + 1) % dotsRight.length;
    updateSliderRight();
  }, 3000);

  // =========================
  // SLIDER CONTENT-TOP-LEFT
  // =========================
  const slidesLeft = document.querySelectorAll('.content-top-left .slide');
  const prevBtn = document.querySelector('.content-top-left .prev');
  const nextBtn = document.querySelector('.content-top-left .next');
  const dotsLeft = document.querySelectorAll('.content-top-left .dot');
  let currentSlideLeft = 0;
  let autoSlideLeft;

  function showSlideLeft(index) {
    slidesLeft.forEach((slide, i) => {
      slide.classList.toggle('active', i === index);
    });
    dotsLeft.forEach((dot, i) => {
      dot.classList.toggle('active', i === index);
    });
  }

  function nextSlideLeft() {
    currentSlideLeft = (currentSlideLeft + 1) % slidesLeft.length;
    showSlideLeft(currentSlideLeft);
  }

  function prevSlideLeft() {
    currentSlideLeft = (currentSlideLeft - 1 + slidesLeft.length) % slidesLeft.length;
    showSlideLeft(currentSlideLeft);
  }

  nextBtn.addEventListener('click', () => {
    nextSlideLeft();
    resetAutoLeft();
  });

  prevBtn.addEventListener('click', () => {
    prevSlideLeft();
    resetAutoLeft();
  });

  dotsLeft.forEach((dot, i) => {
    dot.addEventListener('click', () => {
      currentSlideLeft = i;
      showSlideLeft(currentSlideLeft);
      resetAutoLeft();
    });
  });

  function startAutoLeft() {
    autoSlideLeft = setInterval(nextSlideLeft, 6000);
  }

  function resetAutoLeft() {
    clearInterval(autoSlideLeft);
    startAutoLeft();
  }

  startAutoLeft();
</script>
