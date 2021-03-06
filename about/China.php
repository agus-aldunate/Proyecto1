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
        <script src="../js/function.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <title> China </title>
        <style> .parallaxpais {background-image: url("../imagenes/china.jpg")!important;}</style>
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
          <p class="textoparallax"> China </p>
          <p class="subtextoparallax">El Pais mas rico del mundo</p>
        </div>
      </div> 
      
        </div>
        <br>
        <h2 id="h201">Lugares mas visitados</h2>
          <div class="row">
            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/pekin.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <br>
                    <h4 id="h401">Pekin</h4>
                    <br>
                    <div class="text"><br> <br> La capital de China es una ciudad grandiosa y no solo por su descomunal densidad poblacional (más de 22 millones de habitantes) sino por la ingente cantidad de puntos de interés a visitar.</div>
                  </div>
                </div>
            </div>

            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/chengdu.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <br>
                    <h4 id="h401">Chengdu</h4>
                    <br>
                    <div class="text"><br> <br> En Chengdu abundan los centros de conservación y cría de estos animales en peligro de extinción, en muchos de ellos podrás ver a los osos panda en semi-libertad rodeados de bambú. </div>
                  </div>
                </div>
            </div>

            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/muralla.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <h4 id="h401">La gran muralla</h4>
                    <br>
                    <div class="text"><br> <br> Al contrario de lo que dice el mito, la Gran Muralla no se ve desde el espacio; sin embargo, la espectacular muralla de más de 21.000 kilómetros de longitud es una de las atracciones principales de China. </div>
                  </div>
                </div>
            </div>
           
            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/Shanghái.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <br>
                    <h4 id="h401">Shanghái</h4>
                    <br>
                    <div class="text"><br> <br> El skyline de Shanghái es uno de los más impresionantes del mundo, sobre todo si se contempla desde el Bund, el malecón con aires coloniales de la ciudad.  </div>
                  </div>
                </div>
            </div>
          </div>

          <div data-aos="fade-down">
          <p class="subtextoparallax2">
            <b>Descripción:</b><br><br>
                La gran historia de China cuenta con un gran muro, una ciudad prohibida y unos miles de guerreros de terracota. Algunos de los paisajes incluyen el horizonte de ciencia ficción de Shanghái, los picos sobresalientes de Zhangjiajie y las playas tropicales de Hainan, pero la historia de este reino antiguo comenzó hace mucho tiempo.<br>
                La arquitectura tradicional china está influida por el <b> arte grecobudista del siglo I </b> . Son construcciones generalmente de madera y ladrillo. Las columnas suelen tener una altura baja y carecen de capitel. Las cubiertas cuentan con aleros gruesos y encorvados ligeramente hacia arriba.​ Además, se usan variadas <b>decoraciones policromadas</b>, con gran variedad de detalles.<br>
                La <b>gastronomía </b>china es <b>muy diversa</b>, y se desarrolló a lo largo de milenios de historia culinaria. El <b>alimento básico de China es el arroz</b> . El <b>cerdo es la carne más consumida</b> en el país, que supone las tres cuartas partes del total de carne. ​Las <b>especias</b> juegan un papel central en la cocina china.          
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