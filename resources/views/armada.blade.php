
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
                    <a href="https://wa.me/089501300359"><div class="col-12">Pesan Sekarang</div></a>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">

                          <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>TEMPAT DUDUK</p>
                              <p class = "keterangan">31</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>Bahan Bakar</p>
                              <p class ="keterangan">DIESEL</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>WIFI & YOUTUBE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
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
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>BAGASI</p>
                              <p class ="keterangan">5</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>AC DINGIN</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>KARAOKE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
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
                    <a href="https://wa.me/089501300359"><div class="col-12">Pesan Sekarang</div></a>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">

                          <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>TEMPAT DUDUK</p>
                              <p class ="keterangan">31</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>Bahan Bakar</p>
                              <p class ="keterangan">DIESEL</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>WIFI & YOUTUBE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
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
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>BAGASI</p>
                              <p class ="keterangan">5</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>AC DINGIN</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>KARAOKE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
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
                    <a href="https://wa.me/089501300359"><div class="col-12">Pesan Sekarang</div></a>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">

                          <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>TEMPAT DUDUK</p>
                              <p class ="keterangan">31</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>Bahan Bakar</p>
                              <p class ="keterangan">DIESEL</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>WIFI & YOUTUBE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
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
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>BAGASI</p>
                              <p class ="keterangan">5</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>AC DINGIN</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>KARAOKE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
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
                    <a href="https://wa.me/089501300359"><div class="col-12">Pesan Sekarang</div></a>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">

                          <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>TEMPAT DUDUK</p>
                              <p class ="keterangan">31</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>Bahan Bakar</p>
                              <p class ="keterangan">DIESEL</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>WIFI & YOUTUBE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
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
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>BAGASI</p>
                              <p class ="keterangan">5</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>AC DINGIN</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>KARAOKE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
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
                    <a href="https://wa.me/089501300359"><div class="col-12">Pesan Sekarang</div></a>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">

                          <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>TEMPAT DUDUK</p>
                              <p class ="keterangan">31</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>Bahan Bakar</p>
                              <p class ="keterangan">DIESEL</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>WIFI & YOUTUBE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
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
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>BAGASI</p>
                              <p class ="keterangan">5</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>AC DINGIN</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>KARAOKE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
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
                    <a href="https://wa.me/089501300359"><div class="col-12">Pesan Sekarang</div></a>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">

                          <div class="row mt-3">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>TEMPAT DUDUK</p>
                              <p class ="keterangan">31</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>Bahan Bakar</p>
                              <p class ="keterangan">DIESEL</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>WIFI & YOUTUBE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
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
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>BAGASI</p>
                              <p class ="keterangan">5</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>AC DINGIN</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-9">
                              <p>KARAOKE</p>
                              <p class ="keterangan">YA</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-3">
                              <img src="{{ URL('images/fb.png') }}" class="img-fluid" alt="Responsive image">
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
            <a href="#" class="text-white pb-3">Beranda</a>
          </div>
          <div class="d-flex justify-content-lg-between border-bottom mb-3 line">
            <a href="#" class="text-white pb-3">Profile</a>
          </div>
          <div class="d-flex justify-content-lg-between border-bottom mb-3 line">
            <a href="#" class="text-white pb-3">Armada</a>
          </div>
          <div class="d-flex justify-content-lg-between border-bottom mb-3 line">
            <a href="#" class="text-white pb-3">Galeri</a>
          </div>
          <div class="d-flex justify-content-lg-between border-bottom mb-3 line">
            <a href="#" class="text-white pb-3">Harga</a>
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