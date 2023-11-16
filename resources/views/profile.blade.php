
@extends('Template/base')
<script src="https://kit.fontawesome.com/08692cf6f2.js" crossorigin="anonymous"></script>

@section('content')
<a href="https://wa.me/089501300359" class="up-icon"><i class="fa-brands fa-whatsapp" style="color: #00e034;"></i></a>
<section class="d-flex justify-content-center justify-content-lg-between section" style="margin-top: 7rem;">
    <div class="container-fluid text-md-start bg-Grey">
        <div class="d-lg-flex d-sm-block justify-content-lg-between">
                <div class="article-left">
                    <h3>Profil PO NaradaTrans</h3>
                    <h2><span class="text-brown">Sejarah</span> NaradaTrans</h2>
                    <p class="pt-3">NaradaTrans adalah perusahaan otobis yang khusus melayani pariwisata dan antar jemput karyawan dalam negeri. NaradaTrans didirikan pada tahun 2004 di Jakarta.</p>
                    <p>Semua armada NaradaTrans menggunakan armada bis MERCEDES BENZ (Big Bus), Bus Medium (Mitsubishi) yang sudah terkenal akan standar kenyamanan dan keamanannya di bidang otomotif. Selain itu, kami juga menyediakan Mini Bus 15 seats menggunakan kendaraan seperti Isuzu Elf dan Toyota Commuter.</p>
                    <p>Seiring dengan berjalannya waktu, NaradaTrans telah banyak melayani perusahaan-perusahaan swasta lokal dan asing, BUMN, sekolah-sekolah swasta, negeri maupun internasional, yayasan-yayasan sosial, dan acara-acara keluarga seperti perkawinan dan mudik.</p>
                    <p>Komitmen NaradaTrans adalah memberikan layanan transportasi yang handal, nyaman, dan aman bagi setiap pelanggan kami. Dengan armada yang terjamin kualitasnya, kami siap memberikan pengalaman perjalanan yang memuaskan dan mengantarkan Anda dengan tepat waktu ke tujuan.</p>
                </div> 
            <div class="img-responsive text-center">
                <img src="{{ URL('images/img1.png') }}" alt="img" class="img1">
            </div>
        </div>
    </div>
</section>

<section class="d-flex justify-content-center justify-content-lg-between" style="margin-bottom: 2rem;">
    <div class="container-fluid text-md-start">
        <div class="d-lg-flex d-sm-block justify-content-lg-between">
            <div class="article-img text-center">
                <img src="{{ URL('images/img2.png') }}" alt="img" class="img2">
                <img src="{{ URL('images/img3.png') }}" alt="img" class="img3">
            </div>  
            <div class="article-right">
                <h3>Layanan Kami</h3>
                <h2>Kenyamanan, Keselamatan <span class="text-brown">Penumpang Prioritas Kami</span></h2>
                <p class="pt-3">NaradaTrans menawarkan perjalanan yang nyaman dengan armada bis yang dilengkapi AC, DVD, LCD (TV layar datar), karaoke, dan reclining seats. Kami menjadi pionir "BUS THEATRE" di Indonesia, menghadirkan hiburan selama perjalanan. Keselamatan penumpang adalah prioritas utama kami, dengan setiap armada dilengkapi palu pemecah kaca, pintu darurat, dan tabung pemadam kebakaran. Pengemudi berpengalaman di bidang pariwisata menjamin kenyamanan dan keselamatan Anda.</p>
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

@endsection