<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img src="{{ URL('images/Logo1.png') }}" alt="Logo">
    </a>
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="d-flex align-items-center navbarGap">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item mx-3">
            <a class="navbarLink" id="active" href="#home">Beranda</a>
          </li>
          <li class="nav-item mx-3">
            <a class="navbarLink" href="#">Profil</a>
          </li>
          <li class="nav-item mx-3">
            <a class="navbarLink" href="#">Armada</a>
          </li>
          <li class="nav-item mx-3">
            <a class="navbarLink" href="#">Galeri</a>
          </li>
          <li class="nav-item mx-3">
            <a class="navbarLink" href="#">Harga</a>
          </li>
          <li class="nav-item mx-3">
            <a class="navbarLink" href="#">Kontak</a>
          </li>
        </ul>
        <div class="d-flex gap-4">
          <div>
            <a href="#">
              <img src="{{ URL('images/twtNavbar.png') }}" alt="twitter" class="navbarIco">
            </a>
          </div>
          <div>
            <a href="#">
              <img src="{{ URL('images/fbNavbar.png') }}" alt="Facebook" class="">
            </a>
          </div>
          <div>
            <a href="#">
              <img src="{{ URL('images/igNavbar.png') }}" alt="Instagram" class="navbarIco">        
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->