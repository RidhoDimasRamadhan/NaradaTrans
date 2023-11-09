
@extends('Template/base')
<script src="https://kit.fontawesome.com/08692cf6f2.js" crossorigin="anonymous"></script>

@section('content')
{{-- <div class="container"> --}}

<<<<<<< HEAD
<div class="slideshow-container">
=======
<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img src="{{ URL('images/Logo1.png') }}" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="d-flex d-md-block my-md-1 align-items-center navbarGap">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item mx-3">
              <a class="navbarLink" id="active" href="#home">Beranda</a>
            </li>
            <li class="nav-item mx-3">
              <a class="navbarLink" href="#">Profil</a>
            </li>
            <li class="nav-item mx-3">
              <a class="navbarLink" href="#">Armada</a>
            </li>
            <li class="nav-item mx-3">
              <a class="navbarLink" href="#">Galeri</a>
            </li>
            <li class="nav-item mx-3">
              <a class="navbarLink" href="#">Harga</a>
            </li>
            <li class="nav-item mx-3">
              <a class="navbarLink" href="#">Kontak</a>
            </li>
          </ul>
          <div class="d-flex gap-4">
            <div>
              <a href="#">
                <img src="{{ URL('images/twtNavbar.png') }}" alt="twitter" class="navbarIco">
              </a>
            </div>
            <div>
              <a href="#">
                <img src="{{ URL('images/fbNavbar.png') }}" alt="Facebook" class="">
              </a>
            </div>
            <div>
              <a href="#">
                <img src="{{ URL('images/igNavbar.png') }}" alt="Instagram" class="navbarIco">        
              </a>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>

<!-- Crousserl -->



<div class="slideshow-container" id="home">
>>>>>>> refs/remotes/origin/master

    <div class="container row col-lg-12 kalimat">
            <div class ="col-xl-8 rounded-lg">
                       <div class="row mt-5">
                            <div class="col-12 ms-5">
                                <p class="AboveWord">Anda ingin berpergian dengan BUS?</p>
                                <H1 style="font-weight:bolder;">NaradaTrans</H1>
                                <h1>Pilihan Terbaik </br> 
                                  Untuk Anda</h1>

                                  <p class ="deliver"><a href="https://wa.me/089501300359">Pesan Sekarang</a></p>
                            </div>
                        </div>
            </div>

      <div class ="col-xl-4 rounded-lg">
          <div class="row mb-3"></div>
      </div>
    </div>

        <div class="mySlides">
          <img src="{{ URL('images/bgBeranda.png') }}" style="width:100%">
        </div>

        <div class="mySlides">
          <img src="{{ URL('images/BannerUtama.png') }}" style="width:100%">
        </div>
        <a class="prev" onclick="plusSlides(-1)"><</a>
        <a class="next" onclick="plusSlides(1)">></a>
</div>

<!-- <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div> -->

<!-- end Crousel -->

<!-- Profil Page -->

<section class="d-flex justify-content-center justify-content-lg-between section">
  <div class="container-fluid text-md-start">
    <h1 class="w-50 mx-auto text-center profile-title fw-bold text-black">Mengapa Harus menggunakan <span class="naradaText">NaradaTrans ?</span></h1>
    <div class="container">
      <div class="row mt-3">
        <div class="col-md-3 col-lg-4 col-xl-3">
          <div class="mx-5">
            <img src="{{ URL('images/armadaBadge.png') }}" alt="">
          </div>
          <div class="mt-3 text-center">
            <h4 class="title-card">Armada Modern</h4>
            <p class="descProfile px-3">Armada modern dan nyaman dengan fasilitas AC, WiFi, TV, dan keamanan terkini.</p>
          </div>
      </div>
        <div class="col-md-3 col-lg-4 col-xl-3">
          <div class="mx-5">
            <img src="{{ URL('images/ruteBadge.png') }}" alt="">
          </div>
          <div class="mt-3 text-center">
            <h4 class="title-card">Rute Luas</h4>
            <p class="descProfile px-3">Rute luas, fleksibel, dan sesuai berbagai kebutuhan pelanggan.</p>
          </div>
      </div>
        <div class="col-md-3 col-lg-4 col-xl-3">
          <div class="mx-5">
            <img src="{{ URL('images/layananBadge.png') }}" alt="">
          </div>
          <div class="mt-3 text-center">
            <h4 class="title-card">Layanan Profesional</h4>
            <p class="descProfile px-3">Layanan pelanggan ramah, responsif, dan berpengetahuan untuk pengalaman pelanggan positif.</p>
          </div>
      </div>
        <div class="col-md-3 col-lg-4 col-xl-3">
          <div class="mx-5">
            <img src="{{ URL('images/hargaBadge.png') }}" alt="">
          </div>
          <div class="mt-3 text-center">
            <h4 class="title-card">Harga Dapat disesuaikan</h4>
            <p class="descProfile px-1">Layanan khusus dengan penyesuaian perjalanan sesuai kebutuhan pelanggan, nilai tambah yang signifikan.</p>
          </div>
        </div>
      </div>
    </div>
    <h1 class="w-50 mx-auto text-center profile-title fw-bold text-black">Armada<span class="naradaText"> Kami</span></h1>
    <!-- <div class="container-fluid">
      <img src="{{ URL('images/busPutih.png') }}" alt="">
      <img src="{{ URL('images/busYellow.jpg') }}" alt="" class="busKuning">
      <img src="{{ URL('images/busBiru.png') }}" alt="">
    </div> -->
  </div>
</section>

<!-- Profil Page -->

<!-- Footer -->
<footer class="text-center text-lg-start bg-footer text-muted">

  <!-- Section: Links  -->
  <section class="p-4 d-flex justify-content-center justify-content-lg-between">
    <div class="container-fluid text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <img src="{{ URL('images/Logo.png') }}" alt="Logo" class="logo">
          <div class="address">
            <h6 class="fw-bold text-white mt-4">Pool Bus dan Kantor Pusat</h6>
            <p class="text-white">
              Jl. Jatimulya Raya No.1, Jatimulya, Kec. Tambun Selatan, Kota Bekasi, Jawa Barat 17510
            </p>
          </div>

          <div class="contact mb-4">
            <div class="d-inline-block">
              <p class="text-white">
                <img src="{{ URL('images/phoneIco.png') }}" alt="" class="bg-light ico">
                085311301830
              </p>
            </div>

            <div class="d-inline-block mail">
              <p class="text-white">
                <img src="{{ URL('images/webIco.png') }}" alt="" class="bg-light ico">
                naradatrans@gmail.com
              </p>
            </div>

            <div class="">
              <p class="text-white">
                <img src="{{ URL('images/mailIco.png') }}" alt="" class="bg-light ico">
                naradatrans.co.id
              </p>
            </div>
          </div>

          <div class="d-flex gap-4">
            <div class="">
              <img src="{{ URL('images/Twiter.png') }}" alt="" class="bg-light socialIco">
            </div>
            <div>
              <img src="{{ URL('images/Fb.png') }}" alt="" class="bg-light socialIco">
            </div>
            <div>
              <img src="{{ URL('images/igIco.png') }}" alt="" class="bg-light IGIco">        
            </div>
          </div>

          <div class="mt-4 text-light copyright">
            <p>© 2023 Team NaradaTrans, All Rights Reserved</p>
          </div>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-white mb-4">
            Menu Utama
          </h6>
          <div class="d-flex justify-content-center justify-content-lg-between border-bottom mb-3 line">
            <a href="#" class="text-white pb-3">Home</a>
          </div>
          <div class="d-flex justify-content-center justify-content-lg-between border-bottom mb-3 line">
            <a href="#" class="text-white pb-3">Profil</a>
          </div>
          <div class="d-flex justify-content-center justify-content-lg-between border-bottom mb-3 line">
            <a href="#" class="text-white pb-3">Kontak</a>
          </div>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-white mb-4">
            Jam Operasional
          </h6>
          <div class="d-flex justify-content-center justify-content-lg-between border-bottom mb-3">
            <span class="text-white pb-3">Senin - Jumat :</span>
            <span class="text-white">09.00 pm - 13.00 pm</span>
          </div>
          <div class="d-flex justify-content-center justify-content-lg-between border-bottom mb-3">
            <span class="text-white pb-3">Sabtu :</span>
            <span class="text-white">09.00 pm - 13.00 pm</span>
          </div>
          <div class="d-flex justify-content-center justify-content-lg-between border-bottom mb-3">
            <span class="text-white pb-3">Minggu :</span>
            <div class="libur">
              <span class="text-white">Libur</span>
            </div>
          </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  
</footer>

<script>
  window.onscroll = function() {myFunction()};

  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;

  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }


  let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<!-- Footer -->
{{-- </div> --}}

@endsection