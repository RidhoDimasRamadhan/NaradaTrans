<script src="https://kit.fontawesome.com/08692cf6f2.js" crossorigin="anonymous"></script>
@extends('Template/base')
<script src="https://kit.fontawesome.com/08692cf6f2.js" crossorigin="anonymous"></script>

@section('content')

<div id="navbar">
</div>

<a href="https://wa.me/089501300359" class="up-icon"><i class="fa-brands fa-whatsapp" style="color: #00e034;"></i></a>
<!-- <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> -->

<!-- Home Page -->
<div class="slideshow-container" id="home">
    <div class="container row col-lg-12 kalimat">
            <div class ="col-xl-8 rounded-lg">
                       <div class="row mt-5">
                            <div class="col-12 ms-5 aww">
                                <div class="container FleksibelHomePage" >
                                  <p class="AboveWord">Anda ingin berpergian dengan BUS ?</p>
                                  <div class="wordHomePage">
                                    <p ><Span style="font-weight:bolder;">NaradaTrans</Span> Pilihan Terbaik <br>Untuk Anda</p>
                                  </div>
                                </div>
                                <div class="pesan">
                                  <p class ="deliver"><a href="https://wa.me/089501300359">Pesan Sekarang</a></p>
                                </div>
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
<!-- end Komen Honm Page -->


<section class="d-flex justify-content-center justify-content-lg-between section">
  <div class="container-fluid text-md-start">
    <div class="bg-Grey py-2">
      <h1 class="text-sm-start text-md-center text-lg-center text-xl-center profile-title fw-bold text-black">Mengapa Harus menggunakan <span class="naradaText">NaradaTrans ?</span></h1>
      <div class="container-fluid">
        <div class="row mt-3">
        <div class="col-md-3 col-lg-7 col-xl-3">
          <div class="mx-5 img">
            <img src="{{ URL('images/armadaBadge.png') }}" alt="">
          </div>
          <div class="mt-3 text-center">
            <h4 class="title-card">Armada Modern </h4>
            <p class="descProfile px-2 px-lg-5">Armada modern dan nyaman dengan fasilitas AC, WiFi, TV, dan keamanan terkini.</p>
          </div>
      </div>
        <div class="col-md-3 col-lg-4 col-xl-3">
          <div class="mx-5 img">
            <img src="{{ URL('images/ruteBadge.png') }}" alt="">
          </div>
          <div class="mt-3 text-center">
            <h4 class="title-card">Rute Luas</h4>
            <p class="descProfile px-3">Rute luas, fleksibel, dan sesuai berbagai kebutuhan pelanggan.</p>
          </div>
        </div>
        <div class="col-md-3 col-lg-7 col-xl-3">
          <div class="mx-5 img">
            <img src="{{ URL('images/layananBadge.png') }}" alt="">
          </div>
          <div class="mt-3 text-center">
            <h4 class="title-card">Layanan Profesional</h4>
            <p class="descProfile px-3">Layanan pelanggan ramah, responsif, dan berpengetahuan untuk pengalaman pelanggan positif.</p>
          </div>
        </div>
        <div class="col-md-3 col-lg-4 col-xl-3">
          <div class="mx-5 img">
            <img src="{{ URL('images/hargaBadge.png') }}" alt="">
          </div>
          <div class="mt-3 text-center">
            <h4 class="title-card">Harga Dapat disesuaikan</h4>
            <p class="descProfile px-1">Layanan khusus dengan penyesuaian perjalanan sesuai kebutuhan pelanggan, nilai tambah yang signifikan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Armada Kami -->
    <h1 class="mx-auto text-center fw-bold text-black py-4 mt-5">Armada<span class="naradaText"> Kami</span></h1>
      <div class="wrapper">
          <i id="left" class="fa-solid fa-angle-left"></i>
          <!-- <a href="/Modal/busPutih" class="busPutih"  type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <h1>apa yaklkk</h1>
            </a>  -->
      <div class="carousel mb-5">
      <!-- <a href="https://www.google.com/"><h1>hoogle</h1></a> -->
        <img src="{{ URL('images/busPutih.png') }}" alt="img" draggable="false">
        <img src="{{ URL('images/busYellow.jpg') }}" alt="img" draggable="false">
        <img src="{{ URL('images/busBiru.png') }}" alt="img" draggable="false">
        <img src="{{ URL('images/bisUngu.png') }}" alt="img" draggable="false">
        <img src="{{ URL('images/bisBiru2.png') }}" alt="img" draggable="false">
        <img src="{{ URL('images/bisUngu2.png') }}" alt="img" draggable="false">
      </div>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
    </div>
  </div>
</section>

<section class="d-flex justify-content-center justify-content-lg-between section">
  <div class="container-fluid text-md-start">
    <div class="ribbon mx-auto mb-5">
      <div class="d-lg-flex d-sm-block justify-content-between">
        <div class="">
          <img src="{{ URL('images/img4.png') }}" alt="img" class="img-ribbon">
        </div>
        <div class="text-white text-ribbon">
          <h3 class="fw-bold">Anda Tertarik?</h3>
          <p class="">Silahkan hubungi kami dan download e-brochure untuk informasi lebih lanjut.</p>
        </div>
        <div class="btn-ribbon d-lg-flex gap-lg-4">
          <button type="button" class="btn-kontak text-white">Kontak</button>
          <button type="button" class="btn-download text-white">Download Brosur</button>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Komentar Perjalanan -->
<!-- <h1 class="w-50 mx-auto text-center fw-bold text-black">Kesan Perjalanan Penumpang Bersama <span class="naradaText"> NaradaTrans</span></h1>
<div class="wrapper2">
         <div class="carousel2 owl-carousel">

            <div class="card card-1">
              <div class="container col-12">
                <div class="row">
                  <div class="col-4">
                    <img src="{{ URL('images/orang1.png') }}" alt="">
                  </div>

                  <div class="col-8 anjengg">
                    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus unde nemo sit magni iure. Magni nesciunt aut tenetur soluta sunt?</P>
                  </div>
                </div>
              </div> -->

               <!-- <div class="left">
                  <div class="kumpulanLeft">
                    <p>a</p>
                  </div>
               </div>
               <div class="right">
                <div class="kumpulanRight">
                  <p>b</p>
                </div>
               </div> -->

            <!-- </div>
            <div class="card card-2">
               <div class="left"></div>
               <div class="right"></div>
            </div>
            <div class="card card-3">
               <div class="left"></div>
               <div class="right"></div>
            </div>
            <div class="card card-4">
               <div class="left"></div>
               <div class="right"></div>
            </div>
            <div class="card card-5">
               <div class="left"></div>
               <div class="right"></div>
            </div>
         </div>
</div> -->
<!-- End Komen Perjalanan  -->


<!-- Footer -->
<footer class="text-lg-start bg-footer text-muted">

  <!-- Section: Links  -->
  <section class="p-4 d-flex justify-content-center justify-content-lg-between">
    <div class="container-fluid text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-lg-3 mt-sm-1">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-lg-auto mb-4">
          <!-- Content -->
          <img src="{{ URL('images/Logo.png') }}" alt="Logo" class="logo">
          <div class="address">
            <h6 class="fw-bold text-white mt-4">Pool Bus dan Kantor Pusat</h6>
            <p class="text-white pe-sm-5">
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
                <img src="{{ URL('images/mailIco.png') }}" alt="" class="bg-light ico">
                naradatrans@gmail.com
              </p>
            </div>

            <div class="">
              <p class="text-white">
                <img src="{{ URL('images/webIco.png') }}" alt="" class="bg-light ico">
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
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-white mb-4">
            Menu Utama
          </h6>
          <div class="d-flex justify-content-lg-between border-bottom mb-3 line">
            <a href="#" class="text-white pb-3">Home</a>
          </div>
          <div class="d-flex justify-content-lg-between border-bottom mb-3 line">
            <a href="#" class="text-white pb-3">Profile</a>
          </div>
          <div class="d-flex justify-content-lg-between border-bottom mb-3 line">
            <a href="#" class="text-white pb-3">Kontak</a>
          </div>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-white mb-4">
            Jam Operasional
          </h6>
          <div class="d-flex justify-content-lg-between border-bottom mb-3">
            <span class="text-white pb-3">Senin - Jumat :</span>
            <span class="text-white">09.00 pm - 13.00 pm</span>
          </div>
          <div class="d-flex justify-content-lg-between border-bottom mb-3">
            <span class="text-white pb-3 me-md-2">Sabtu:</span>
            <span class="text-white">09.00 pm - 13.00 pm</span>
          </div>
          <div class="d-flex justify-content-lg-between border-bottom mb-3">
            <span class="text-white pb-3 me-md-2">Minggu :</span>
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
<!-- <script src="/js/main_page.js"></script> -->

<script>
// let mybutton = document.getElementById("myBtn");

// // When the user scrolls down 20px from the top of the document, show the button
// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     mybutton.style.display = "block";
//   } else {
//     mybutton.style.display = "none";
//   }
// }

// // When the user clicks on the button, scroll to the top of the document
// function topFunction() {
//   document.body.scrollTop = 0;
//   document.documentElement.scrollTop = 0;
// }
// Caraousel
const carousel = document.querySelector(".carousel"),
firstImg = carousel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapper i");

let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
    // showing and hiding prev/next icon according to carousel scroll left value
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carousel scroll left else add to it
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
    });
});

const autoSlide = () => {
    // if there is no image left to scroll then return from here
    if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;

    positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
    let firstImgWidth = firstImg.clientWidth + 14;
    // getting difference value that needs to add or reduce from carousel left to take middle img center
    let valDifference = firstImgWidth - positionDiff;

    if(carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
        return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
    }
    // if user is scrolling to the left
    carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}

const dragStart = (e) => {
    // updatating global variables value on mouse down event
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    // scrolling images/carousel to left according to mouse pointer
    if(!isDragStart) return;
    e.preventDefault();
    isDragging = true;
    carousel.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}

const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");

    if(!isDragging) return;
    isDragging = false;
    autoSlide();
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);
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

  // Komentar Pengguna
  $(".carousel2").owlCarousel({
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsive: {
      0:{
        items:1,
        nav: false
      },
      600:{
        items:2,
        nav: false
      },
      1000:{
        items:2,
        nav: false
      }
    }
  });
  // end Komentar Pengguna

// HomePage
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
// $("a").click(function (e) {
//     e.preventDefault();
//     var href = $(this).attr("href");
//     window.open(href);
//     return false;
// });


</script>

<!-- Footer -->

@endsection