
@extends('Template/base')
<script src="https://kit.fontawesome.com/08692cf6f2.js" crossorigin="anonymous"></script>

@section('content')
<section class="d-flex justify-content-center justify-content-lg-between section" style="margin-top: 7rem;">
    <div class="container-fluid text-md-star section-kontak">
        <img src="{{ URL('images/peta.png') }}" alt="" class="img-peta">
        <div class="headline-kontak mb-5">
            <h2>Informasi <span class="text-brown">Kontak</span> Kami</h2>
            <p>Punya pertanyaan terkait produk dan layanan NARADATRANS? Tim kami siap membantu Anda.</p>
        </div>
        <div class="d-xl-flex d-sm-block"> 
            <form class="row g-3">
                <div class="col-xl-5 col-md-6 col-lg-6">
                    <label for="inputEmail4" class="form-label">Nama Lengkap <label class="star">*</label></label>
                    <input type="text" class="form-control" id="inputEmail4" placeholder="Masukan Nama Lengkap">
                </div>
                <div class="col-xl-5 col-md-6 col-lg-6">
                    <label for="inputPassword4" class="form-label">Email <label class="star">*</label></label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="Masukan email anda">
                </div>
                <div class="col-xl-5 col-md-6 col-lg-6">
                    <label for="inputState" class="form-label">Kategori</label>
                    <select id="inputState" class="form-select">
                        <option selected>Pilih Kategori</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-xl-5 col-md-6 col-lg-6">
                    <label for="inputPassword4" class="form-label">No. Telepon <label class="star">*</label></label>
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">+62</span>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Masukan nomor telepon" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-xl-10 col-md-6 col-lg-6">
                    <label for="inputPassword4" class="form-label">Pesan <label class="star">*</label></label>
                    <textarea class="form-control" aria-label="With textarea" placeholder="Masukan Nama Lengkap"></textarea>
                </div>
                <div class="col-10 bot-content mb-5">
                    <h4 class="text-brown">* Wajib diisi</h4>
                    <button type="submit" class="btn btn-primary btn-kirim">Kirim Pesan</button>
                </div>
                <!-- <div class="col-12">
                </div> -->
            </form>
            <div class="map">    
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9948976308997!2d107.0145610738964!3d-6.264400061326131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698fab0fd4ce35%3A0xc32d4398228d9350!2sGarasi%20PO.NARADA%20TRANS!5e0!3m2!1sen!2sid!4v1700032090620!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

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
@endsection