<html>
<head>
  <title>Descuentos</title>
  <meta charset="utf-8">
  <link rel="icon" href="/Proyecto1/favicon.ico"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="../js/function.js"></script>
  <style> .parallax {background-image: url("../imagenes/parallax1.jpg");}</style>
</head>
<body onload="hfabout(), Datefortravel(), Datefortravel1(),Datefortravel2(),Datefortravel3(),Datefortravel4()">

<?php session_start();
  if(array_key_exists('button1', $_POST)) { 
    session_destroy(); 
  }
?>


    <div id="header"></div>
    <div id="navbar"></div>

    <div class="parallaxdescuentos">
      <p class="textoparallax">¿Estas bucando las mejores ofertas para tu viaje?</p>
      <p class="subtextoparallax">Las tenemos todas aqui para ti.<br>Inicia Sesion para recibir notificaciones de nuevos descuentos.</p>
    </div>


    </div>
    <div class="alert alert-danger" >
      <strong>COVID19!</strong> En este momento nos encontramos obligados a no vender pasajes debido a la pandemia que estamos viviendo.
    </div>
    <h1 id="h601">Nuestras ofertas:</h1> 
    <div class="row">
        <div class="column nature col-lg-3 col-md-6 col-sm-12">
            <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
              <img src="../imagenes/sanpablo.jpg" alt="Avatar" class="image">
              <div class="overlay">
                <br>
                <h4 id="h401">3 noches en São Paulo</h4>
                <h4 id="h401"><b>POR SOLO 2200 PESOS!!</b></h4>
                <div class="center">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star"></span>
                    <br>
                </div>
                <div class="text1">
                    <br> <br>Para <b>2 persona</b>, una habitacion y cena de regalo en "Le Bife".
              </div>
                
                <br>
              </div>
            </div>
        </div>
        <div class="column nature col-lg-3 col-md-6 col-sm-12">
          <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
          <img src="../imagenes/ny.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <br>
            <h4 id="h401">6 noches en Nueva York</h4>
            <h5 id="h401"><b>POR SOLO 20.000 PESOS!!</b></h5>
                <div class="center">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <br>
              </div>

            <div class="text1">
                <br><br>Para <b>2 persona</b>, pasaje incluido y dos entradas para Mama Mia en broadway.
            </div>

          </div>
        </div>
        </div>

        <div class="column nature col-lg-3 col-md-6 col-sm-12">
          <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
          <img src="../imagenes/paris2.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <br>
            <h4 id="h401">13 noches en Paris</h4>
            <h5 id="h401"><b>POR SOLO 45.000 PESOS!!</b></h5>
                <div class="center">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                    <br>
                </div>

            <br>
            <div class="text1">
                <br><br>Para <b>2 persona</b>, 2 entradas al louvre  y cena romantica en el restaurante Au Moulin A Vent.
            </div>
          </div>
        </div>
        </div>
        
        <div class="column nature col-lg-3 col-md-6 col-sm-12">
          <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
          <img src="../imagenes/miami2.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <br>
            <h4 id="h401">7 noches en Miami</h4>
            <h5 id="h401"><b>POR SOLO 40.000 PESOS!!</b></h5>
                <div class="center">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <br>
                </div>
            <div class="text1">
              <br><br>Para <b>2 adultos y 2 niños</b>, pasaje incluido y alquiler de un barco por 2 dias a eleccion.
            </div>
          </div>
        </div>
        </div>

    <h1 id="h601">Proximas ofertas: </h1> 
    <div class="row">

        <div class="column nature col-lg-3 col-md-6 col-sm-12">
          <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
          <img src="../imagenes/washintong.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <div class="middle">
                <h1>COMING SOON</h1>
                <hr>
                <p id="demo" style="font-size:30px"></p>
              </div>
            </div>
            </div>
        </div>

        <div class="column nature col-lg-3 col-md-6 col-sm-12">
          <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
          <img src="../imagenes/sanfrancisco.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <div class="middle">
                <h1>COMING SOON</h1>
                <hr>
                <p id="demo1" style="font-size:30px"></p>
              </div>
            </div>
            </div>
        </div>
        

        <div class="column nature col-lg-3 col-md-6 col-sm-12">
          <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
          <img src="../imagenes/hollywood.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <div class="middle">
                <h1>COMING SOON</h1>
                <hr>
                <p id="demo2" style="font-size:30px"></p>
              </div>
            </div>
            </div>
        </div>

        <div class="column nature col-lg-3 col-md-6 col-sm-12">
          <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
          <img src="../imagenes/rio.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <div class="middle">
                <h1>COMING SOON</h1>
                <hr>
                <p id="demo3" style="font-size:30px"></p>
              </div>
            </div>
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