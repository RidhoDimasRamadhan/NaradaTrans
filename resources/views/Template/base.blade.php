<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main_page.css">
    <script src="https://kit.fontawesome.com/08692cf6f2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Raleway:wght@600;800&display=swap" rel="stylesheet">
    <title>{{ $judul }}</title>
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">AW BELLA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link {{ ($judul === 'identitas_tabel')?'active':'' }}"  href="/identitas_tabel">Teacher</a>
              <a class="nav-link {{ ($judul === 'profile')?'active':'' }}" href="/profile">profile</a>
              <a class="nav-link {{ ($judul === 'identitas_Mahasiswa')?'active':'' }} "href="/identitas_Mahasiswa">List Mahasiswa</a>
              <a class="nav-link {{ ($judul === 'eskul')?'active':'' }}" href="/eskul">Daftar Eskul</a>
              {{-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> --}}
            </div>
          </div>
        </div>
      </nav>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img src="{{ URL('images/Logo1.png') }}" alt="Logo">
      </a>
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex gap-4 align-items-center">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <div class="navbar-nav">
              <a class="nav-link {{ ($judul === 'identitas_tabel')?'active':'' }}"  href="/identitas_tabel">Teacher</a>
              <a class="nav-link {{ ($judul === 'profile')?'active':'' }}" href="/profile">profile</a>
              <a class="nav-link {{ ($judul === 'identitas_Mahasiswa')?'active':'' }} "href="/identitas_Mahasiswa">List Mahasiswa</a>
              <a class="nav-link {{ ($judul === 'eskul')?'active':'' }}" href="/eskul">Daftar Eskul</a>
              {{-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> --}}
            </div>
      </ul>
      <div class="d-flex gap-4">
        <div>
          <a href="#">
            <img src="{{ URL('images/twtNavbar.png') }}" alt="twitter" class="">
          </a>
        </div>
        <div>
          <a href="#">
            <img src="{{ URL('images/fbNavbar.png') }}" alt="Facebook" class="">
          </a>
        </div>
        <div>
          <a href="#">
            <img src="{{ URL('images/igNavbar.png') }}" alt="Instagram" class="">        
          </a>
        </div>
      </div>
    </div>
<<<<<<< HEAD
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<!-- Crousserl -->

<div class="container"> 
  @yield('content')
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>