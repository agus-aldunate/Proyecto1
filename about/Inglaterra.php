<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" href="/Proyecto1/favicon.ico"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="../js/function.js"></script>
        <title>Inglaterra</title>
        <style> .parallaxpais {background-image: url("../imagenes/inglaterra.jpg")!important;}</style>
      </head>
      <body onload="hfabout()">
      
      <?php session_start();
  if(array_key_exists('button1', $_POST)) { 
    session_destroy(); 
  }
?>
        <div id="header"></div>
        <div id="navbar"></div>
        <div class="parallaxpais">
          <p class="textoparallax"> Inglaterra </p>
          <p class="subtextoparallax">El Pais del té</p>
        </div>
      </div>
     
        </div>
        <br>
        <h2 id="h201">Lugares mas visitados</h2>
        <div class="row"> 

            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/liverpool.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <h4 id="h401">Liverpool</h4>
                    <br>
                    <div class="text"><br> <br> Es de los mayores atractivos culturales de Inglaterra y Europa. Fue aquí donde nació el estilo musical del Merseybeat popularizado por The Who y los legendarios Beatles. Con el ferry Do the Treble podes conocer Liverpool desde el agua.</div>
                  </div>
                </div>
            </div>

            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/cambridge.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <h4 id="h401">Cambridge</h4>
                    <br>
                    <div class="text"><br> <br> Con sus importantes edificaciones históricas y buenas universidades se encuentra entre los lugares mas turisticos. Una actividad exclusiva es el viaje en bote por el Rio Cam donde un remero te guiará a lo largo de los más resaltantes sitios de las universidades.  </div>
                  </div>
                </div>
            </div>

            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/manchester.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <br>
                    <h4 id="h401">Manchester</h4>
                    <br>
                    <div class="text"><br> <br> La ciudad de Manchester se ubica entre los destinos baratos en Inglaterra gracias al arsenal de sitios turísticos gratuitos que tiene. Conoce el estadio Old Trafford del equipo Manchester United y su museo. </div>
                  </div>
                </div>
            </div>

            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/stonehenge.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <br>
                    <h4 id="h401">Stonehenge</h4>
                    <br>
                    <div class="text"><br> <br>Es de los más famosos sitios arqueológicos en Inglaterra y el mundo. Este primitivo monumento está compuesto por impresionantes piedras rectangulares verticales y horizontales. </div>
                  </div>
                </div>
            </div>

            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/bristol.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <h4 id="h401">Bristol</h4>
                    <br>
                    <div class="text"><br> <br> Esta moderna ciudad tiene una variada oferta turística. The Redgrave Theatre es uno de los teatros que siempre tienen programación para toda la familia. Puedes recorrer el poblado a pie, navegar en bote o incluso andar en bicicleta. </div>
                  </div>
                </div>
            </div>

            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/brighton.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <h4 id="h401">Brighton</h4>
                    <br>
                    <div class="text"><br> <br> La ciudad ama los picnics, disfruta de uno con tu familia en el Hove Park y conoce su Fingermaze o “Laberinto de la Huella”. El Teatro al Aire Libre de Brighton es un agradable lugar para compartir con tu familia. </div>
                  </div>
                </div>
            </div>

            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/bigben.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <br>
                    <h4 id="h401">Big Ben</h4>
                    <br>
                    <div class="text"><br> <br> Con más de siglo y medio de haber sido construido, lo conforma la Torre Isabel con 96 metros de altura, la campana Gran Ben de casi 14 toneladas y las cuatro caras de reloj de 7 metros de diámetro a cada lado de la torre.  </div>
                  </div>
                </div>
            </div>

            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/londoneye.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <br>
                    <h4 id="h401">London Eye</h4>
                    <br>
                    <div class="text"><br> <br>  Es una noria mirador gigante, de 135 metros de altura que está situada en la orilla sur del Támesis, junto a las cosas más importantes. Prácticamente junto al Big Ben, el Parlamento y la Abadía de Westminster.</div>
                  </div>
                </div>
            </div>



        </div>

        <div data-aos="fade-down">
        <p class="subtextoparallax2">
          <b>Descripción:</b><br><br>
                  Inglaterra es uno de los principales estados soberanos que conforman el Reino Unido de Gran Bretaña. <br> Los lugares turísticos de Inglaterra tienen excelente infraestructura y eficaces canales de promoción y difusión relacionada con el mundo turístico contándote la historia de los lugares y todos los datos que requieras.     
              </b> </p>
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