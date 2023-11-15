<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main_page.css">
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="stylesheet" href="/css/armada.css">
    <link rel="stylesheet" href="/css/galeri.css">
    <link rel="stylesheet" href="/css/harga.css">
    <link rel="stylesheet" href="/css/kontak.css">
    <link rel="stylesheet" href="/css/baseTemplate/base.css">
    <script src="https://kit.fontawesome.com/08692cf6f2.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Raleway:wght@600;800&display=swap" rel="stylesheet">
    <title>{{ $judul }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-white ParentNavbar fixed-top">
        <div class="container-fluid ">
          <!-- <a class="navbar-brand" href="#">AW BELLA</a> -->
          <a class="navbar-brand mt-2 mt-lg-0" href="#">
            <img src="{{ URL('images/Logo1.png') }}" alt="Logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="col-lg-12 col-sm-1">
            <div class="row">
              <div class="col-4"></div>
              <div class="col-8">

                  <div class="navbar-nav mt-1 ">
                    <a class="nav-link navbarLink {{ ($judul === 'main_page')?'active':'' }}" id ="navbarLink" class ="btn active" href="/main_page">Beranda</a>
                    <a class="nav-link navbarLink {{ ($judul === 'profile')?'active':'' }}"  id ="navbarLink" class ="btn"href="/profile">Profile</a>
                    <a class="nav-link navbarLink {{ ($judul === 'profile')?'active':'' }}"  id ="navbarLink" class ="btn" href="/armada">Armada</a>
                    <a class="nav-link navbarLink {{ ($judul === 'profile')?'active':'' }}"  id ="navbarLink" class ="btn" href="/galeri">Galeri</a>
                    <a class="nav-link navbarLink {{ ($judul === 'profile')?'active':'' }}"  id ="navbarLink" class ="btn" href="/harga">Harga</a>
                    <a class="nav-link navbarLink {{ ($judul === 'profile')?'active':'' }}"  id ="navbarLink" class ="btn" href="/kontak">Kontak</a>

                    <div class="d-flex gap-4 mt-2 ms-3">
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

            </div>
            </div>

           

          </div>
        </div>
      </nav>
      
<!-- Navbar -->

<!-- Navbar -->

<!-- Crousserl -->

<!-- <div class="container">  -->
  @yield('content')
<!-- </div> -->

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
 var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>
</html>