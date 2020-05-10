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
    <title>España</title>
    <style> .parallaxpais {background-image: url("../imagenes/vistavion.jpg");}</style>
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
      <p class="textoparallax"> España </p>
      <p class="subtextoparallax">El Pais de la Alegría</p>
    </div>
    <div>
    
    
  </div>
    <br>
  <h2 id="h201">Lugares mas visitados</h2>
    <div class="row">

      <div class="column nature col-lg-3 col-md-6 col-sm-12">
        <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
          <img src="../imagenes/madrid.jpg" alt="Avatar" class="image">
          <div class="overlay">
            <br>
            <br>
            <h4 id="h401">Madrid</h4>
            <br>
            <div class="text"><br> <br> Es la capital de España. Tiene una gran variedad cultural que se puede ver en sus museos. Además se caracteriza por tener una agitada vida nocturna. </div>
          </div>
        </div>
    </div>

    <div class="column nature col-lg-3 col-md-6 col-sm-12">
      <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
        <img src="../imagenes/barcelona.jpg" alt="Avatar" class="image">
        <div class="overlay">
          <br>
          <br>
          <h4 id="h401">Barcelona</h4>
          <br>
          <div class="text"><br> <br> Es la capital de Cataluña. Se conoce por ser una ciudad cosmopolita y por su variedad de lugares culturales e historicos para conocer, ademas de ser reconocida obviamente por los deportes, sobre todo el futbol. </div>
        </div>
      </div>
  </div>

      <div class="column nature col-lg-3 col-md-6 col-sm-12">
          <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
          <img src="../imagenes/malaga.jpg" alt="Avatar" class="image">
          <div class="overlay">
         <br>
         <br>
         <h4 id="h401">Malaga</h4>
         <br>
        <div class="text"><br> <br> Capital de la Costa del Sol, es la ciudad más soleada del año, presenta muchas playas a lo largo de toda su costa, además podemos visitar La Catedral y el Museo Picasso. </div>
      </div>
    </div>
</div>

    <div class="column nature col-lg-3 col-md-6 col-sm-12">
        <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
        <img src="../imagenes/pamplona.jpg" alt="Avatar" class="image">
        <div class="overlay">
        <br>
        <br>
        <h4 id="h401">Pamplona</h4>
        <br>
        <div class="text"><br> <br> Conocida mundialmente por las fiestas de San Fermín que se llevan a cabo en esta ciudad. </div>
        </div>
        </div>
      </div>



      <div class="column nature col-lg-3 col-md-6 col-sm-12">
        <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
        <img src="../imagenes/sanS.jpg" alt="Avatar" class="image">
        <div class="overlay">
        <br>
        <br>
        <h4 id="h401">San Sebastian</h4>
        <br>
        <div class="text"><br> <br> Famosa por sus playas, San Sebastián fue elegida por el periódico inglés The Guardian como «una de las cinco mejores ciudades de veraneo» del mundo.</div>
        </div>
        </div>
      </div>

      <div class="column nature col-lg-3 col-md-6 col-sm-12">
        <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
        <img src="../imagenes/mallorca.jpg" alt="Avatar" class="image">
        <div class="overlay">
        <br>
        <h4 id="h401">Mallorca</h4>
        <br>
        <div class="text"><br> <br> Conocida por su turismo de sol y playa, posee además un precioso casco antiguo. La Catedral, el Palacio de la Almudaina, la Lonja y la Plaza Mayor son algunos de los rincones en los que el viajero deberá detenerse. </div>
        </div>
        </div>
      </div>

      <div class="column nature col-lg-3 col-md-6 col-sm-12">
        <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
        <img src="../imagenes/valencia.jpg" alt="Avatar" class="image">
        <div class="overlay">
        <br>
        <br>
        <h4 id="h401">Valencia</h4>
        <br>
        <div class="text"><br> <br> Valencia puede ser una ciudad de tópicos: la luz, la luna, la pólvora, la paella, las flores, las fallas. Son claves para tratar de explicar lo que, en realidad, no se puede contar con palabras.  </div>
        </div>
        </div>
      </div>

      <div class="column nature col-lg-3 col-md-6 col-sm-12">
        <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
        <img src="../imagenes/toledo.jpg" alt="Avatar" class="image">
        <div class="overlay">
        <br>
        <h4 id="h401">Toledo</h4>
        <br>
        <div class="text"><br> <br> A pesar de ser una ciudad relativamente pequeña, tiene un casco antiguo reducido en tamaño pero muy denso en monumentos. Más de 100 museos y monumentos pueblan las estrechas y laberínticas calles.  </div>
        </div>
        </div>
      </div>

    </div>

    <div data-aos="fade-down"> 
    <p class="subtextoparallax2">
      <b>Descripción:</b><br><br>
      España es un país turístico con una desarrollada infraestructura en el sector servicios, situándose entre los  <b>tres más visitados del mundo</b>, al que acuden anualmente millones de viajeros atraídos por sus <b>playas y agradable clima</b>, el abundante <b>patrimonio artístico del país y la riqueza gastronómica</b>, además de ser una de las naciones más ricas en patrimonio cultural del planeta debido al gran número de civilizaciones que dejaron su impronta y legado en la península ibérica.
    <br> Debido a la diversidad de productos y regiones que posee España, existen muchas cocinas y platos que se forman parte de su amplia <b>cultura gastronómica</b>, algo muy caracteristico de España. 
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

</body>
</html>