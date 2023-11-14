
@extends('Template/base')
<script src="https://kit.fontawesome.com/08692cf6f2.js" crossorigin="anonymous"></script>

@section('content')
<a href="https://wa.me/089501300359" class="up-icon"><i class="fa-brands fa-whatsapp" style="color: #00e034;"></i></a>


<div class="container mb-5" style="margin-top:10rem;" id="kalimat">

    <h1>Berikut Daftar</h1>
    <h1><span style="color: #AB3C16;">Harga</span> yang kami tawarkan</h1>
</div>

<div class="container mt-5 mb-5">
<table class="table">
  <thead>
    <tr class="tujuan">
      <th scope="col" class="tujuan">TUJUAN</th>
      <th scope="col" class="harga">HARGA</th>
    </tr>
  </thead>
  <tbody>

    <tr class="table-white">
      <td scope="row" class="RataKiri" >Transfer dalam Kota Jakarta,Drop Bandara (One Way 4 Jam)</td>
      <td>Rp. 1.600.000</td>
    </tr>
    
    <tr class="table-dark">
      <td scope="row" class="RataKiri">Tour dalam kota (Half day 8 Jam)</td>
      <td>Rp. 1.800.000</td>
    </tr>

    <tr class="table-white">
      <td scope="row" class="RataKiri" >Tour dalam kota (Full day 12 Jam)</td>
      <td>Rp. 1.850.000</td>
    </tr>

    <tr class="table-dark">
      <td scope="row" class="RataKiri">Mekarsari, Sentul, CIbubur, Karawaci, Tanggerang (12 Jam)</td>
      <td>Rp. 2.050.000</td>
    </tr>

    <tr class="table-white">
      <td scope="row" class="RataKiri" >Bogor, Citereup, Pasir Mukti, Ciluengsi, Cikupa, Balaraja, Cikokol, Cikarang, tde Jungle, Jungle Land, Ciseeng (12 Jam)</td>
      <td>Rp. 2.050.000</td>
    </tr>

    <tr class="table-dark">
      <td scope="row" class="RataKiri">Taman Safari, Cilember, Lido, Cisarua, TWM, Cimori, Mega Mendung, Gunug Mas, Cinangneng, Cimelati, Leuwiliang, Ciawi, Karawang, Tapos, Curug Nangka, Highland (15 jam)</td>
      <td>Rp. 2.200.000</td>
    </tr>
    <tr class="table-white">
      <td scope="row" class="RataKiri" >Cipanas, Gunung Geulis, Cibodas, Ciloto, Salabintana, Cimacan, Sukabumi, Jatiluhur, Gunung Salak, Purwakarta, Cikampek, Quiling/Jonggol (15 jam)</td>
      <td>Rp. 2.400.000</td>
    </tr>
    <tr class="table-dark">
      <td scope="row" class="RataKiri">Pulorida, Ziarah Banten, Cilegon, Merak, Serang, Carita, Anyer, Karang Bolong (18 Jam)</td>
      <td>Rp. 2.400.000</td>
    </tr>
    <tr class="table-white">
      <td scope="row" class="RataKiri" >Bandung Kota, Pandeglang, Maribaya, Cigundul, Ciater, Lemabang, TSB, Tangkuban Perahu, Subang, Indramayu, Tanjung Lesung, Banten Labuan, Citatih, Pelabuhan Ratu, Citarik, Cianjur (18 jam)</td>
      <td>Rp. 2.700.000</td>
    </tr>
    <tr class="table-dark">
      <td scope="row" class="RataKiri">Jatinagor, Ciwidey, Kawah Putih, Sumedang, Situ Patenggang, Cileunyi, Pangalengan (18 jam)</td>
      <td>Rp. 2.850.000</td>
    </tr>
    <tr class="table-white">
      <td scope="row" class="RataKiri" >Cirebon, Majalengka, Kuningan, Sawarna, Tasikmalaya, Suralaya, Ujung Genteng (18 jam)</td>
      <td>Rp. 3.100.000</td>
    </tr>
  </tbody>
</table>
</div>
<div class="container">
    <div class="col-12">
        <div class="row">
            <div class="col-1" >
            <i class="fa-solid fa-triangle-exclamation fa-beat" style="color: #ff0000;font-size:1.5rem;"></i>
            </div>
            <div class="col-11" id="danger" >
            Daftar harga sewa bus sewaktu-waktu dapat berubah, hubungi kami untuk bernegosiasi dan detail harganya.
            </div>
        </div>
    </div>
</div>


<section class="d-flex justify-content-center justify-content-lg-between section">
  <div class="container-fluid text-md-start">
    <div class="d-flex justify-content-center py-5">
      <div class="row ribbon mb-4">
        <div class="col-md-3 col-lg-7 col-xl-3">
          <img src="{{ URL('images/img4.png') }}" alt="img" class="img-ribbon">
        </div>
        <div class="col-md-3 col-lg-7 col-xl-3 text-white text-ribbon">
          <h1 class="fw-bold">Anda Tertarik?</h1>
          <p class="">Silahkan hubungi kami dan download e-brochure untuk informasi lebih lanjut.</p>
        </div>
        <div class="col-md-3 col-lg-7 col-xl-6 btn-ribbon">
          <button type="button" class="btn-kontak text-white">KONTAK</button>
          <button type="button" class="btn-download text-white">Download Brosur</button>
        </div>
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
</div>
@endsection