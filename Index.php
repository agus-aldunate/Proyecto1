<!DOCTYPE html>
<html lang="en">
<head>
  <title>TuriPinar</title>
  <meta charset="utf-8">
  <link rel="icon" href="/Proyecto1/favicon.ico"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="js/function.js"></script>
</head>
<body onload="hfindex(),scroll()">

<?php session_start();
  if(array_key_exists('button1', $_POST)) { 
    session_destroy(); 
  }
?>

<div id="header"></div>
<div id="navbar"></div>


  <div class="parallax">
    <p class="textoparallax">¿Estas pensando en viajar?</p>
    <p class="subtextoparallax">En turipinar te ofrecemos los mejores viajes.<br>Siempre pensando en tu economía.</p>
  </div>
  <div class="container" style="margin-top:30px">
    <div class="travel_variation_area">
        <div class="container" data-aos="fade-right"
          data-aos-offset="200"
          data-aos-easing="ease-in-sine">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="single_travel text-center">
                <div class="icon">
                  <img class="icon1" src="imagenes/guide.svg" alt="">
                </div>
                <h3>Guías Profesionales</h3>
                <p>Cada viaje viene con guías para mostrarte todo lo que puedas ver.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="single_travel text-center">
                <div class="icon">
                  <img class="icon1" src="imagenes/travel.svg" alt="">
                </div>
                <h3>Viajes a Todo el Mundo</h3>
                <p>Tenemos una gran categoría de destinos, todos a su dispocicion</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
              <div class="single_travel text-center">
                <div class="icon">
                  <img class="icon1" src="imagenes/suitcases.svg" alt="">
                </div>
                <h3>Seguro de Viaje</h3>
                <p>Todos los viajes vienen con seguro, para que puedas disfrutar sin preocupaciónes.</p>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div> 

  <div class="popular_destination_area" data-aos="fade-down"
      data-aos-offset="300"
      data-aos-easing="ease-in-sine">
          <div class="section_title text-center mb_70" style="padding-top: 20px;">
            <h2>Destinos Populares</h2>
            <br>
            <p id="p07">Te ofrecemos los mejores lugares para visitar las proximas vacaciones!</p>
          </div>
          <div class="row justify-content-center">
            <div class="row">
              <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container">
                  <img src="imagenes/torreE.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <br>
                    <br>
                    <h4 id="h401"><a href="/Proyecto1/about/Francia.php" class="text2">Francia</a></h4>
                  </div>
                </div>
              </div>
              <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container">
                  <img src="imagenes/disney.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <br>
                    <br>
                    <h4 id="h401"><a href="/Proyecto1/about/EEUU.php" class="text2">Estados <br> Unidos</h4></a>
                  </div>
                </div>
              </div>


              <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container">
                  <img src="imagenes/porto.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <br>
                    <br>
                    <h4 id="h401"><a href="/Proyecto1/about/Brasil.php" class="text2">Brasil</h4></a>
                  </div>
                </div>
              </div>

              <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container">
                  <img src="imagenes/barcelona.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <br>
                    <br>
                    <h4 id="h401"><a href="/Proyecto1/about/España.php" class="text2">España</h4></a>
                  </div>
                </div>
               </div>
            </div>
      </div>
    </div>
 

    <div data-aos="fade-down">
    <div class="slideshow-container">

      <div class="mySlides">
        <q>Gracias a TuriPinar cumpli mi sueño de viajar a Europa por el menor precio</q>
        <p class="author">- Natalia Sanchez</p>
      </div>
      
      <div class="mySlides">
        <q>TuriPinar me dio la oportunidad de viajar con mi familia bajo las mejores condiciones y el mejor precio</q>
        <p class="author">- Pedro Cruz</p>
      </div>
      
      <div class="mySlides">
        <q>Pude tener mi luna de miel soñada gracias a TuriPinar</q>
        <p class="author">- Catalina Fernandez</p>
      </div>
      
      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>
      
      </div>
      <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>
      </div>
    </div>
  </div>
</div>
<div class="contacto_area" data-aos="fade-down"
data-aos-offset="300"
data-aos-easing="ease-in-sine">
  <div class="section_title text-center mb_70" style="padding-top: 20px;" data-aos="fade-down">
    <h1><b>Conócenos!!</b></h1>
  </div>
  <div class="row justify-content-center" data-aos="fade-down">
    <div class="column nature col-lg-4 col-md-12 col-sm-12">
        <div class="card">
          <img src="/Proyecto1/imagenes/sol.jpg" style="width:100%">
          <h1>Sol  <br> Roqueta</h1>
          <p class="title">CEO & Fundadora  & <br> Programadora</p>
          <p>Liceo Iep</p>
        </div>
      </div>
      <div class="column nature col-lg-4 col-md-12 col-sm-12">
        <div class="card">
          <img src="/Proyecto1/imagenes/fara.jpg" style="width:100%">
          <h1>Santiago Faraldo</h1>
          <p class="title">CEO & Fundador &  <br> Diseñador</p>
          <p>Liceo Iep</p>
        </div>
      </div>
    <div class="column nature col-lg-4 col-md-12 col-sm-12">
      <div class="card">
        <img src="/Proyecto1/imagenes/agus.jpg" style="width:100%">
        <h1>Agustina Aldunate</h1>
        <p class="title">CEO & Fundadora & <br> Informadora turistica</p>
        <p>Liceo Iep</p>
      </div>
    </div>
  </div>
</div>
<div id="footer"></div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
  AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: true, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 900, // values from 0 to 3000, with step 50ms
  easing: 'ease-in-sine', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});
</script>


</body>
</html>
