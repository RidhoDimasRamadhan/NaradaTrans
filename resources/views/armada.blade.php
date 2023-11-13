
@extends('Template/base')
<script src="https://kit.fontawesome.com/08692cf6f2.js" crossorigin="anonymous"></script>

@section('content')

<section class="d-flex justify-content-center justify-content-lg-between section" style="margin-top: 7rem;">
    <div class="container-fluid text-md-start">
        <h3>Armada</h3>
        <h1>PILIHAN <span class="text-brown">ARMADA</span> UNTUK ANDA</h1>
        <div class="row">
            <div class="col-md-1 col-lg-2 col-xl-5">
                <img src="{{ URL('images/armada/img1.png') }}" alt="img" class="armada-img">
            </div>
            <div class="col-md-1 col-lg-2 col-xl-5">
                <img src="{{ URL('images/armada/img2.png') }}" alt="img" class="armada-img">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 col-lg-2 col-xl-5">
                <img src="{{ URL('images/armada/img3.png') }}" alt="img" class="armada-img">
            </div>
            <div class="col-md-1 col-lg-2 col-xl-5">
                <img src="{{ URL('images/armada/img4.png') }}" alt="img" class="armada-img">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 col-lg-2 col-xl-5">
                <img src="{{ URL('images/armada/img5.png') }}" alt="img" class="armada-img">
            </div>
            <div class="col-md-1 col-lg-2 col-xl-5">
                <img src="{{ URL('images/armada/img1.png') }}" alt="img" class="armada-img">
            </div>
        </div>
    </div>
</section>

@endsection