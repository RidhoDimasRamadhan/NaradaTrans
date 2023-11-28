
@extends('Template/base')
<script src="https://kit.fontawesome.com/08692cf6f2.js" crossorigin="anonymous"></script>

@section('content')
<a href="https://wa.me/+6285281595005" class="up-icon"><i class="fa-brands fa-whatsapp" style="color: #00e034;"></i></a>


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


</div>
@endsection