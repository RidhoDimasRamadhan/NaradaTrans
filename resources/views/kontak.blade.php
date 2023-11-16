
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

@endsection