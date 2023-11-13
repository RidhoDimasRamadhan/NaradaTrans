<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Responsive Owl-Carousel Slider | CodingNepal</title>
      <link rel="stylesheet" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="/css/profile.css">
   </head>

   <body>
      <div class="wrapper2">
         <div class="carousel2 owl-carousel">
            <div class="card card-1">
               A
            </div>
            <div class="card card-2">
               B
            </div>
            <div class="card card-3">
               C
            </div>
            <div class="card card-4">
               D
            </div>
            <div class="card card-5">
               E
            </div>
            <div class="card card-1">
               A
            </div>
            <div class="card card-2">
               B
            </div>
            <div class="card card-3">
               C
            </div>
            <div class="card card-4">
               D
            </div>
            <div class="card card-5">
               E
            </div>
         </div>
      </div>
      <script>
         $(".carousel2").owlCarousel({
           margin: 20,
           loop: true,
           autoplay: true,
           autoplayTimeout: 2000,
           autoplayHoverPause: true,
           responsive: {
             0:{
               items:1,
               nav: false
             },
             600:{
               items:2,
               nav: false
             },
             1000:{
               items:3,
               nav: false
             }
           }
         });
      </script>
   </body>
</html>