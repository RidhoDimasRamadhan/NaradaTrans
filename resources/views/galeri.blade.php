
@extends('Template/base')
<script src="https://kit.fontawesome.com/08692cf6f2.js" crossorigin="anonymous"></script>

@section('content')
<section class="d-flex justify-content-center justify-content-lg-between section" style="margin-top: 7rem;">
    <div class="container-fluid text-md-start">
        <div class="galeri-headline">
            <h3>Galeri Kami</h3>
            <h1 class="mx-auto">Galeri <span class="text-brown">Foto </span>Kami NaradaTrans</h1>
        </div>
        <div class="galeri-option">
                <ul>
                    <li><a href="#">All</a></li>
                    <li><a href="#">Interior</a></li>
                    <li><a href="#">Exteriror</a></li>
                    <li><a href="#">Fasilitas</a></li>
                </ul>
        </div>
        <div class="row galeri pt-4">
            <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3 galeri-grid">
                <img src="{{ URL('images/armada/img1.png') }}" alt="img" class="galeri-img">
                <img src="{{ URL('images/armada/img2.png') }}" alt="img" class="galeri-img">
                <img src="{{ URL('images/armada/img3.png') }}" alt="img" class="galeri-img">
            </div>
            <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3 galeri-grid">
                <img src="{{ URL('images/img1.png') }}" alt="img" class="galeri-img">
                <img src="{{ URL('images/img2.png') }}" alt="img" class="galeri-img">
                <img src="{{ URL('images/img3.png') }}" alt="img" class="galeri-img">
            </div>
            <div class="col-sm-4 col-md-4 col-lg-3 col-xl-3">
                <img src="{{ URL('images/armada/img1.png') }}" alt="img" class="galeri-img">
                <img src="{{ URL('images/armada/img1.png') }}" alt="img" class="galeri-img">
                <img src="{{ URL('images/armada/img1.png') }}" alt="img" class="galeri-img">
            </div>
        </div>
        <button type="button" class="d-block mx-auto btn-load">Load More</button>
    </div>
</section>

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


@endsection