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
  <title>Francia</title>
  <style> .parallaxpais {background-image: url("../imagenes/francia.jpg")!important;}</style>
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
    <p class="textoparallax">Francia </p>
    <p class="subtextoparallax">El Pais de la moda </p>
  </div>
</div>

  </div>

  <br>
  <h2 id="h201">Lugares mas visitados</h2>
  <div class="row">
    <div class="column nature col-lg-3 col-md-6 col-sm-12">
      <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
        <img src="../imagenes/torreE.jpg" alt="Avatar" class="image">
        <div class="overlay">
          <br>
          <br>
          <h4 id="h401">Torre Eiffel</h4>
          <br>
          <div class="text"><br> <br> Es un importante monumento, símbolo de la ciudad y de todo el país que se encuentra situada en el extremo del Campo de Marte, en el VII Distrito de París. </div>
        </div>
      </div>
  </div>

  <div class="column nature col-lg-3 col-md-6 col-sm-12">
    <div class="container"  data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
      <img src="../imagenes/museo.jpg" alt="Avatar" class="image">
      <div class="overlay">
        <br>
        <br>
        <h4 id="h401">Museo del Louvre</h4>
        <br>
        <div class="text"><br> <br> Este es uno de los museos más importantes del mundo y está en el I Distrito de París, dentro del Palacio de Louvre.</div>
      </div>
    </div>
</div>

<div class="column nature col-lg-3 col-md-6 col-sm-12">
  <div class="container"  data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
    <img src="../imagenes/arco.jpg" alt="Avatar" class="image">
    <div class="overlay">
      <br>
      <br>
      <h4 id="h401">Arco del Triunfo</h4>
      <br>
      <div class="text"><br> <br> Este monumento se encuentra ubicado en la Plaza de la Concordia, en el VIII distrito de París. </div>
    </div>
  </div>
</div>

<div class="column nature col-lg-3 col-md-6 col-sm-12">
  <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
    <img src="../imagenes/palacio.jpg" alt="Avatar" class="image">
    <div class="overlay">
      <br>
      <br>
      <h4 id="h401">Palacio de Versalles</h4>
      <br>
      <div class="text"><br> <br> El Palacio de Versalles (en francés Château de Versailles) fue una antigua residencia real ubicada en el municipio de Versalles y su construcción fue dispuesta por Luis XIV. </div>
    </div>
  </div>
</div>

<div class="column nature col-lg-3 col-md-6 col-sm-12">
  <div class="container"  data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
    <img src="../imagenes/campos.jpg" alt="Avatar" class="image">
    <div class="overlay">
      <br>
      <br>
      <h4 id="h401">Campos Eliseos</h4>
      <br>
      <div class="text"><br> <br> Los Campos Elíseos, es la avenida más grande de París. Mide 1880 metros de longitud, y se extiende desde el Arco del Triunfo hasta la Plaza de la Concordia, dentro del VIII distrito de París.</div>
    </div>
  </div>
</div>

<div class="column nature col-lg-3 col-md-6 col-sm-12">
  <div class="container"  data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
    <img src="../imagenes/basilica.jpg" alt="Avatar" class="image">
    <div class="overlay">
      <br>
      <br>
      <h4 id="h401">Basílica de <br> Sacre Coeur</h4>
      <br>
      <div class="text"><br> <br> Esta es una importante iglesia ubicada en el distrito XVIII de París, en la colina de Montmartre, dedicada al Sagrado Corazón de Jesús. </div>
    </div>
  </div>
</div>

<div class="column nature col-lg-3 col-md-6 col-sm-12">
  <div class="container"  data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
    <img src="../imagenes/playaFrancia.jpg" alt="Avatar" class="image">
    <div class="overlay">
      <br>
      <br>
      <h4 id="h401">Playas de Francia</h4>
      <br>
      <div class="text"><br> <br> A lo largo de la costa de Francia podrás encontrar una gran cantidad de hermosas playas para que las disfrutes durante tu viaje. </div>
    </div>
  </div>
</div>

<div class="column nature col-lg-3 col-md-6 col-sm-12">
  <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
    <img src="../imagenes/notre.jpg" alt="Avatar" class="image">
    <div class="overlay">
      <br>
      <br>
      <h4 id="h401">Notre Dame</h4>
      <br>
      <div class="text"><br> <br> Es una de las más antiguas iglesias de estilo gótico. Está dedicada a la Virgen María, de donde deriva su nombre, pues Notre-Dame significa Nuestra Señora.  </div>
    </div>
  </div>
</div>


  </div> 

  <div data-aos="fade-down">
  <p class="subtextoparallax2">
    <b>Descripción:</b><br><br>
        Francia es un país de Europa que goza de gran popularidad como destino turístico, tiene entre sus ciudades grandes atracciones, siendo París, además de su ciudad capital, uno de los lugares más visitados y tambien conocida como <b>"la ciudad del amor"</b>.
            <br> Francia se caracteriza por la oferta turística que presenta, la cual se enfoca en el <b>arte</b>, la <b>historia</b> y la <b>gastronomía</b> que mezclado con las distintas manifestaciones forman un conjunto de experiencias interesantes e inolvidables para el turista.
            <br>La <b>gastronomía</b> de Francia es uno de los principales distintivos del país, la gran cantidad de <b>historia y tradición</b>, así como sus peculiares y delicados platillos son su mejor carta de presentación ante los ojos del mundo, convirtiéndose en importante referente para la gastronomía occidental.
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