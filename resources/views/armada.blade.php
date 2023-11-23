
@extends('Template/base')
<script src="https://kit.fontawesome.com/08692cf6f2.js" crossorigin="anonymous"></script>

@section('content')
<a href="https://wa.me/+6285281595005" class="up-icon"><i class="fa-brands fa-whatsapp" style="color: #00e034;"></i></a>
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
                <a href="/Modal/busPutih" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                <img src="{{ URL('images/armada/img2.png') }}" alt="img" class="armada-img">
              </a>
                

            </div>
        </div>
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-5">
                <a href="/Modal/busPutih" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                <img src="{{ URL('images/armada/img3.png') }}" alt="img" class="armada-img">
                </A>
            </div>
            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-5">
                <a href="/Modal/busPutih" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                <img src="{{ URL('images/armada/img4.png') }}" alt="img" 
                class="armada-img">
                </A>
            </div>
        </div>
        <div class="row d-flex justify-content-center mb-5">
            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-5">
                <a href="/Modal/busPutih" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
                <img src="{{ URL('images/armada/img5.png') }}" alt="img" class="armada-img">
                </A>
            </div>
            <div class="col-sm-5 col-md-5 col-lg-4 col-xl-5">
                <a href="/Modal/busPutih" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
                <img src="{{ URL('images/busYellow.jpg') }}" alt="img" class="armada-img">
                </A>
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
          <a href="https://wa.me/+6285281595005">
            <button type="button" class="btn-kontak text-white">Kontak</button>
          </a>
          <a href="#">
            <button type="button" class="btn-download text-white">Download Brosur</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
bangkee
</button>  -->

<!-- Modal -->
 <div class="container" style="margin-top:10rem;">

<!-- Bis 1 -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="z-index:1000000;">
    <div class="modal-dialog ">
        <div class="modal-content bus1 ">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">             <img src="{{ URL('images/Logo1.png') }}" alt="Logo">
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div class="row">
                  <div class="col-6 gambar">
                  <img src="{{ URL('images/armada/img1.png') }}" class="img-fluid" alt="Responsive image">
                  </div>
                  <div class="col-6">
                    <div class="row">
                      <div class="col-12">
                        <div class="container kalimatModal">
                          <h1>NARADATRANS <span style="font-weight: bolder;">PARIWISATA</span> BIRU-PUTIH</h1>
                        </div>
                      </div>
                    </div>
                    <div class="row pesanModal">
                    <a href="https://wa.me/+6285281595005" target="_blank"><div class="col-12">Pesan Sekarang</div></a>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">

                          <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Kursi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>TEMPAT DUDUK</p>
                              <p class = "keterangan">31</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Diesel.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>Bahan Bakar</p>
                              <p class ="keterangan">DIESEL</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Wifi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>WIFI & YOUTUBE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/SelimutBantal.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>SELIMUT & BANTAL</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-6">
                        <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Bagasi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>BAGASI</p>
                              <p class ="keterangan">5</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/AcDingin.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>AC DINGIN</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Karaoke.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>KARAOKE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Pengemudi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>PENGEMUDI</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<!-- end Bis 2 -->

<!-- Bis 2 -->
  <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="z-index:1000000;">
    <div class="modal-dialog ">
        <div class="modal-content bus1 ">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">             <img src="{{ URL('images/Logo1.png') }}" alt="Logo">
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div class="row">
                  <div class="col-6 gambar">
                  <img src="{{ URL('images/armada/img2.png') }}" class="img-fluid" alt="Responsive image">
                  </div>
                  <div class="col-6">
                    <div class="row">
                      <div class="col-12">
                        <div class="container kalimatModal">
                          <h1>NARADATRANS <span style="font-weight: bolder;">MUHAASABAH VOYAGER</span> HIJAU</h1>
                        </div>
                      </div>
                    </div>
                    <div class="row pesanModal">
                    <a href="https://wa.me/+6285281595005" target="_blank"><div class="col-12">Pesan Sekarang</div></a>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">

                          <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Kursi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>TEMPAT DUDUK</p>
                              <p class ="keterangan">31</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Diesel.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>Bahan Bakar</p>
                              <p class ="keterangan">DIESEL</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Wifi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>WIFI & YOUTUBE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/SelimutBantal.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>SELIMUT & BANTAL</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-6">
                        <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Bagasi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>BAGASI</p>
                              <p class ="keterangan">5</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/AcDingin.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>AC DINGIN</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Karaoke.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>KARAOKE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Pengemudi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>PENGEMUDI</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<!-- end bis 2 -->

<!-- BIS 3 -->
<div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="z-index:1000000;">
    <div class="modal-dialog ">
        <div class="modal-content bus1 ">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">             <img src="{{ URL('images/Logo1.png') }}" alt="Logo">
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div class="row">
                  <div class="col-6 gambar">
                  <img src="{{ URL('images/armada/img3.png') }}" class="img-fluid" alt="Responsive image">
                  </div>
                  <div class="col-6">
                    <div class="row">
                      <div class="col-12">
                        <div class="container kalimatModal">
                          <h1>NARADATRANS <span style="font-weight: bolder;">PARIWISATA</span> BIRU</h1>
                        </div>
                      </div>
                    </div>
                    <div class="row pesanModal">
                    <a href="https://wa.me/+6285281595005" target="_blank"><div class="col-12">Pesan Sekarang</div></a>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">

                          <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Kursi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>TEMPAT DUDUK</p>
                              <p class ="keterangan">31</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Diesel.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>Bahan Bakar</p>
                              <p class ="keterangan">DIESEL</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Wifi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>WIFI & YOUTUBE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/SelimutBantal.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>SELIMUT & BANTAL</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-6">
                        <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Bagasi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>BAGASI</p>
                              <p class ="keterangan">5</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/AcDingin.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>AC DINGIN</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Karaoke.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>KARAOKE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Pengemudi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>PENGEMUDI</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<!-- END BIS 3 -->

<!-- BIS 34-->
<div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="z-index:1000000;">
    <div class="modal-dialog ">
        <div class="modal-content bus1 ">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">             <img src="{{ URL('images/Logo1.png') }}" alt="Logo">
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div class="row">
                  <div class="col-6 gambar">
                  <img src="{{ URL('images/armada/img4.png') }}" class="img-fluid" alt="Responsive image">
                  </div>
                  <div class="col-6">
                    <div class="row">
                      <div class="col-12">
                        <div class="container kalimatModal">
                          <h1>NARADATRANS <span style="font-weight: bolder;">PARIWISATA</span> BIRU</h1>
                        </div>
                      </div>
                    </div>
                    <div class="row pesanModal">
                    <a href="https://wa.me/+6285281595005" target="_blank"><div class="col-12">Pesan Sekarang</div></a>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">

                          <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Kursi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>TEMPAT DUDUK</p>
                              <p class ="keterangan">31</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Diesel.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>Bahan Bakar</p>
                              <p class ="keterangan">DIESEL</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Wifi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>WIFI & YOUTUBE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/SelimutBantal.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>SELIMUT & BANTAL</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-6">
                        <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Bagasi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>BAGASI</p>
                              <p class ="keterangan">5</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/AcDingin.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>AC DINGIN</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Karaoke.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>KARAOKE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Pengemudi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>PENGEMUDI</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<!-- END BIS 4 -->


<!-- BIS 5 -->
<div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="z-index:1000000;">
    <div class="modal-dialog ">
        <div class="modal-content bus1 ">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">             <img src="{{ URL('images/Logo1.png') }}" alt="Logo">
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div class="row">
                  <div class="col-6 gambar">
                  <img src="{{ URL('images/armada/img5.png') }}" class="img-fluid" alt="Responsive image">
                  </div>
                  <div class="col-6">
                    <div class="row">
                      <div class="col-12">
                        <div class="container kalimatModal">
                          <h1>NARADATRANS <span style="font-weight: bolder;">MUHAASABAH</span> BIRU-ABU</h1>
                        </div>
                      </div>
                    </div>
                    <div class="row pesanModal">
                    <a href="https://wa.me/+6285281595005" target="_blank"><div class="col-12">Pesan Sekarang</div></a>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">

                          <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Kursi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>TEMPAT DUDUK</p>
                              <p class ="keterangan">31</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Diesel.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>Bahan Bakar</p>
                              <p class ="keterangan">DIESEL</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Wifi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>WIFI & YOUTUBE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/SelimutBantal.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>SELIMUT & BANTAL</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-6">
                        <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Bagasi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>BAGASI</p>
                              <p class ="keterangan">5</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/AcDingin.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>AC DINGIN</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Karaoke.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>KARAOKE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Pengemudi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>PENGEMUDI</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<!-- END BIS 5 -->

<!-- BIS 6 -->

<div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="z-index:1000000;">
    <div class="modal-dialog ">
        <div class="modal-content bus1 ">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">             <img src="{{ URL('images/Logo1.png') }}" alt="Logo">
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div class="row">
                  <div class="col-6 gambar">
                  <img src="{{ URL('images/busYellow.jpg') }}" class="img-fluid" alt="Responsive image">
                  </div>
                  <div class="col-6">
                    <div class="row">
                      <div class="col-12">
                        <div class="container kalimatModal">
                          <h1>NARADATRANS <span style="font-weight: bolder;">MUSTANG</span> KUNING</h1>
                        </div>
                      </div>
                    </div>
                    <div class="row pesanModal">
                    <a href="https://wa.me/+6285281595005" target="_blank"><div class="col-12">Pesan Sekarang</div></a>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">

                          <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Kursi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>TEMPAT DUDUK</p>
                              <p class ="keterangan">31</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Diesel.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>Bahan Bakar</p>
                              <p class ="keterangan">DIESEL</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Wifi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>WIFI & YOUTUBE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/SelimutBantal.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>SELIMUT & BANTAL</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-6">
                        <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Bagasi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>BAGASI</p>
                              <p class ="keterangan">5</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/AcDingin.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>AC DINGIN</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Karaoke.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>KARAOKE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/modal/Pengemudi.svg') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>PENGEMUDI</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<!-- END BIS 6 -->
</div>
<!-- <div class="">
  ...
</div> -->

@endsection