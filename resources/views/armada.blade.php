
@extends('Template/base')
<script src="https://kit.fontawesome.com/08692cf6f2.js" crossorigin="anonymous"></script>

@section('content')

<section class="d-flex justify-content-center justify-content-lg-between section" style="margin-top: 7rem;">
    <div class="container-fluid text-md-start">
        <div class="armada-headline">
            <h3>Armada</h3>
            <h1 class="mx-auto">PILIHAN <span class="text-brown">ARMADA</span> UNTUK ANDA</h1>
        </div>
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-5">
              <a href="/Modal/busPutih" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <img src="{{ URL('images/armada/img1.png') }}" alt="img" class="armada-img">
              </a>
            </div>
            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-5">
                <img src="{{ URL('images/armada/img2.png') }}" alt="img" class="armada-img">
            </div>
        </div>
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-5">
                <img src="{{ URL('images/armada/img3.png') }}" alt="img" class="armada-img">
            </div>
            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-5">
                <img src="{{ URL('images/armada/img4.png') }}" alt="img" class="armada-img">
            </div>
        </div>
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-5">
                <img src="{{ URL('images/armada/img5.png') }}" alt="img" class="armada-img">
            </div>
            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-5">
                <img src="{{ URL('images/armada/img1.png') }}" alt="img" class="armada-img">
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

<!-- <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
bangkee
</button>  -->

<!-- Modal -->
 
<!-- <div class="">
  ...
</div> -->

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
            <a href="#" class="text-white pb-3">Profil</a>
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

@endsection