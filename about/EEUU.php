<html>
<head>
  <title> Estados Unidos </title>
  <meta charset="utf-8">
  <link rel="icon" href="/Proyecto1/favicon.ico"> 
  <link rel="stylesheet" href="/Proyecto1/css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="/Proyecto1/js/function.js"></script>
  <style> .parallaxpais {background-image: url("../imagenes/eeuu.jpg")!important;}</style>
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
      <p class="textoparallax">  Estados Unidos </p>
      <p class="subtextoparallax"> El pais de las oportunidades</p>
    </div>
  </div> 
  
    </div>
    <br>
    <h2 id="h201">Lugares mas visitados</h2>
      <div class="row">
        <div class="column nature col-lg-3 col-md-6 col-sm-12" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
            <div class="container">
              <img src="../imagenes/granC.jpg" alt="Avatar" class="image">
              <div class="overlay">
                <br>
                <h4 id="h401">El Gran Cañón</h4>
                <br>
                <div class="text"><br> <br>Son 5.000 kilómetros cuadrados de superficie que albergan profundas gargantas y formaciones naturales espectaculares que hacen de el Gran Cañón del Colorado (Nevada y Utah) un destino imprescindible en Estados Unidos.</div>
              </div>
            </div>
        </div>
        <div class="column nature col-lg-3 col-md-6 col-sm-12" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
          <div class="container">
          <img src="../imagenes/times.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <br> 
            <br>
            <h4 id="h401">Times Squeare</h4>
            <div class="text"><br><br>Es el centro de Nueva York, y la sensación que uno tiene cuando está ahí es que está en el centro del mundo. <br> Muchas pantallas LED enormes y edificios gigantes.</div>
          </div>
        </div>
        </div>

        <div class="column nature col-lg-3 col-md-6 col-sm-12" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
          <div class="container">
          <img src="../imagenes/ocean.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <br>
            <h4 id="h401">Ocean Drive</h4>
            <br>
            <div class="text"><br><br>Es la calle más famosa de Miami y la que resume el espíritu de la ciudad. Es el lugar dónde se encuentra la mayor cantidad de excentricidades: autos raros, gente intentando demostrar todo el dinero que tiene, ferraris y corvettes, etc.  </div>
          </div>
        </div>
        </div>
        
        <div class="column nature col-lg-3 col-md-6 col-sm-12" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
          <div class="container">
          <img src="../imagenes/disney.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <br>
            <br>
            <h4 id="h401">Disneyworld Orlando</h4>
            <br>
            <div class="text"><br><br>Complejo turístico famoso por sus numerosos hoteles y parques temáticos llenos de juegos y espectaculos relacionados a los tan conocidos y amados personajes de las peliculas de Disney.</div>
          </div>
        </div>
        </div>

        <div class="column nature col-lg-3 col-md-6 col-sm-12" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700"> 
          <div class="container">
          <img src="../imagenes/universal.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <br>
            <h4 id="h401">Universal Studios</h4>
            <br>
            <div class="text"><br> <br> Es un parque temático localizado en Orlando, Florida, que forma parte del complejo Universal Orlando Resort. La temática del parque es la industria del entretenimiento, en particular de las películas y la televisión. </div>
          </div>
        </div>
        </div>

        <div class="column nature col-lg-3 col-md-6 col-sm-12" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
          <div class="container">
          <img src="../imagenes/estatua.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <br>
            <h4 id="h401">La estatua de la libertad</h4>
            <br>
            <div class="text"><br><br>Es uno de los monumentos más famosos de Nueva York y de todo el mundo. Fue un regalo del gobierno francés al gobierno estadounidense.</div>
          </div>
        </div>
        </div>

        <div class="column nature col-lg-3 col-md-6 col-sm-12" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
          <div class="container">
          <img src="../imagenes/goldengate.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <br>
            <br>
            <h4 id="h401">Golden Gate</h4>
            <br>
            <div class="text"><br><br>Es un puente colgante situado en Estados Unidos, California, que une la península de San Francisco por el norte con el sur del condado de Marin, cerca de Sausalito. </div>
          </div>
        </div>
        </div>
        

        <div class="column nature col-lg-3 col-md-6 col-sm-12" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
          <div class="container">
          <img src="../imagenes/centralpark.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <br>
            <h4 id="h401">Central Park</h4>
            <br>
            <div class="text"><br><br>Es un parque urbano público que tiene forma rectangular y dimensiones aproximadas de 4000 x 800 m, siendo más grande que dos de las naciones más pequeñas del mundo.</div>
          </div>
        </div>
        </div>
</div>
      <div data-aos="fade-down">
      <p class="subtextoparallax2">
        <b>Descripción:</b><br><br>
            Los Estados Unidos de América son un referente cultural y político, pero también uno de los principales destinos turísticos del planeta. <br> La inmensidad del continente americano, su <b>diversidad</b> y contrastes se plasman en este país que se extiende costa a costa. Destino para un <b>fin de semana</b> en Nueva York o Las Vegas, o para <b>un mes</b> de travesía que apenas será un retazo del viaje que es la propia geografía norteamericana.
          <br>País de <b>cultura</b> en Boston, Filadelfia o San Francisco. País de <b>diversión y fiesta</b> en Miami, Nueva Orleans o Los Ángeles. País de <b>inmensidades</b> en las Rocosas, Alaska o Hawai. País de <b>naturaleza</b> en las Bad Lands de Montana, los Apalaches, las Mesas de Nuevo México o el Gran Cañón del Colorado. País de <b>monumentos</b> como la Estatua de la Libertad, el Puente de San Francisco, el Monte Rushmore o el Arco de San Louis.
         </p>
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
</script>
</body>
</html>