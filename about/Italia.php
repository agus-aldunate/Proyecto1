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
      <title>Italia</title>
      <style> .parallaxpais {background-image: url("../imagenes/italia.jpg")!important;}</style>
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
          <p class="textoparallax"> Italia </p>
          <p class="subtextoparallax">El Pais de la pasta</p>
        </div>
      </div>
          
        </div>
        <br>
        <h2 id="h201">Lugares mas visitados</h2>
        <div class="row">

          <div class="column nature col-lg-3 col-md-6 col-sm-12">
            <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
              <img src="../imagenes/roma.jpg" alt="Avatar" class="image">
              <div class="overlay">
                <br>
                <h4 id="h401">Roma</h4>
                <br>
                <div class="text"><br> <br> Es conocida como la “Ciudad Eterna” por la Historia que cada uno de sus recovecos encierra, pero en Roma también podrás disfrutar de atracciones de vanguardia como restaurantes de alta cocina y calles comerciales. </div>
              </div>
            </div>
        </div>

        <div class="column nature col-lg-3 col-md-6 col-sm-12">
          <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
            <img src="../imagenes/milan.jpg" alt="Avatar" class="image">
            <div class="overlay">
              <br>
              <br>
              <h4 id="h401">Milan</h4>
              <br>
              <div class="text"><br> <br> Es una provincia destacada por sus sitios turísticos tanto religiosos como arquitectónicos y más destacado aún se le llama la ciudad de la moda pues en Milán se llevan a cabo diferentes eventos relacionados con la moda. </div>
            </div>
          </div>
      </div>

      <div class="column nature col-lg-3 col-md-6 col-sm-12">
        <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
          <img src="../imagenes/venecia.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <br>
            <br>
            <h4 id="h401">Venecia</h4>
            <br>
            <div class="text"><br> <br> Conocida como la ciudad de los canales, es una de las ciudades más románticas del mundo y uno de los lugares que visitar en Italia sea la época del año que sea.  </div>
          </div>
        </div>
    </div>

    <div class="column nature col-lg-3 col-md-6 col-sm-12">
      <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
        <img src="../imagenes/florencia.jpg" alt="Avatar" class="image">
        <div class="overlay">
          <br>
          <br>
          <h4 id="h401">Florencia</h4>
          <br>
          <div class="text"><br> <br> Esta ciudad es uno de los mejores lugares que ver en Italia gracias a su incomparable riqueza cultural. </div>
        </div>
      </div>
  </div>

  <div class="column nature col-lg-3 col-md-6 col-sm-12">
    <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
      <img src="../imagenes/pisa.jpg" alt="Avatar" class="image">
      <div class="overlay">
        <br>
        <br>
        <h4 id="h401">Pisa</h4>
        <br>
        <div class="text"><br> <br> Recorrer la región italiana de la Toscana es muy importante y una de las paradas más importantes es la ciudad de Pisa. Además de su famosísima torre inclinada, en Pisa hay mucho más por hacer.      </div>
      </div>
    </div>
</div>

<div class="column nature col-lg-3 col-md-6 col-sm-12">
  <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
    <img src="../imagenes/cinque.jpg" alt="Avatar" class="image">
    <div class="overlay">
      <br>
      <h4 id="h401">Cinque Terre</h4>
      <br>
      <div class="text"><br> <br> Es un conjunto de pueblos situados en acantilados y llenos de coloridas casas.Podes hacer algunos de los senderos que unen estas poblaciones y asi obtendrás las mejores vistas hacia el mar Adriático. </div>
    </div>
  </div>
</div>

<div class="column nature col-lg-3 col-md-6 col-sm-12">
  <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
    <img src="../imagenes/siena.jpg" alt="Avatar" class="image">
    <div class="overlay">
      <br>
      <h4 id="h401">Siena</h4>
      <br>
      <div class="text"><br> <br> Aqui podras visitar la Piazza del Campo, una de las plazas más espectaculares de Italia y donde se celebra cada año el Palio de Siena, una de las competiciones de caballos más famosas del mundo. </div>
    </div>
  </div>
</div>


<div class="column nature col-lg-3 col-md-6 col-sm-12">
  <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
    <img src="../imagenes/panteon.jpg" alt="Avatar" class="image">
    <div class="overlay">
      <br>
      <br>
      <h4 id="h401">Panteon de Agripa</h4>
      <br>
      <div class="text"><br> <br> Es un antiguo templo romano —en la actualidad una iglesia—, situado en la ciudad de Roma, en el lugar de un anterior templo encargado por Marco Agripa durante el gobierno de Augusto. </div>
    </div>
  </div>
</div>



        </div>
        <div data-aos="fade-down">
        <p class="subtextoparallax2" >
          <b>Descripción:</b><br><br>
          Italia es uno de los países preferidos para el turismo y las vacaciones de cualquier tipo. Para quienes aman el <b>arte y la cultura</b> les esperan miles de tesoros, los fanáticos del sol y la playa encontrarán a lo largo de toda la costa unas <b>hermosas playas</b> bien cuidadas y provistas de instalaciones turísticas, y para aquellos a quienes les gusta escalar o los paseos por las <b>montañas</b> tendrán las zonas montañosas que pueden satisfacer sus expectativas con excursiones y toda la belleza de la naturaleza alpina.
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