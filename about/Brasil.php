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
        <title>Brasil</title>
        <style> .parallaxpais {background-image: url("../imagenes/brasil.jpg")!important;}</style>
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
          <p class="textoparallax"> Brasil </p>
          <p class="subtextoparallax">El Pais de la playa</p>
        </div>
      </div>
      
        </div>
        <br>
  <h2 id="h201">Lugares mas visitados</h2>
        <div class="row">

            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/porto.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <br>
                    <h4 id="h401">Porto Seguro</h4>
                    <br>
                    <div class="text"><br> <br>  Una ciudad con construcciones viejas, pero con servicios modernos y espacios para el descubrimiento de la vida cultural y nocturna de uno de los lugares turísticos más visitados.</div>
                  </div>
                </div>
            </div>

            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/copacabana.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <h4 id="h401">Playa de Copacabana </h4>
                    <br>
                    <div class="text"><br> <br> Esta es la playa más famosa de Río de Janeiro, aquí encontrarás el mayor número de alojamientos y los famosos bares patrimoniales de Río, por lo que es uno de los mejores lugares de Brasil para hospedarte.</div>
                  </div>
                </div>
            </div>

            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/brasilia.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <h4 id="h401">Brasilia </h4>
                    <br>
                    <div class="text"><br> <br> Brasilia es la capital de Brasil y es donde te encontrarás con la modernidad frente a frente. No puedes perderte la Catedral de Brasilia, uno de los grandes atractivos culturales de Brasil.</div>
                  </div>
                </div>
            </div>

            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/archipielago.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <h4 id="h401">Archipiélago <br> Fernando de Noronha  </h4>
                    <br>
                    <div class="text"><br> <br> Este archipiélago volcánico brasileño está conformado por 21 islas, de las cuales solo una está habitada y lleva el mismo nombre que el archipiélago. <br> Es considerado el mejor lugar para bucear.</div>
                  </div>
                </div>
            </div>


            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/floripa.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <br>
                    <h4 id="h401"> Florianopolis </h4>
                    <br>
                    <div class="text"><br> <br> Es la capital de Santa Catarina, uno de los importantes destinos al sur de Brasil, ya que está calificada como de los mejores lugares del país para conocer. Cuenta con 24 playas y un centro de actividades náuticas. </div>
                  </div>
                </div>
            </div>

            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/cristo.jpg" alt="Avatar" class="image">
                  <div class="overlay">
                    <h4 id="h401"> Cristo Redentor </h4>
                    <br>
                    <div class="text"><br> <br> Por ser catalogado como una de las 7 maravillas del mundo, si vas a Río de Janeiro es imposible irte sin haber visto esta enorme estatua de Jesús de Nazaret. Mide 30 metros de altura y pesa 1200 toneladas, su base mide 8 metros de alto justo en la cima del Cerro del Corcovado. </div>
                  </div>
                </div>
                
            </div>

                <div class="column nature col-lg-3 col-md-6 col-sm-12">
                    <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                      <img src="../imagenes/buzios.jpg" alt="Avatar" class="image">
                      <div class="overlay">
                        <h4 id="h401"> Buzios </h4>
                        <br>
                        <div class="text"><br> <br> Ubicada a 180 kilómetros al nordeste de Río de Janeiro, pasó a ser de una tranquila aldea de pescadores a uno de los destinos más famosos y buscados en el 2019 para el disfrute. Además de tener encantadoras playas, posee una excelente arquitectura de casas tradicionales.</div>
                      </div>
                    </div>
                    </div>

    

            <div class="column nature col-lg-3 col-md-6 col-sm-12">
                <div class="container" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="700">
                  <img src="../imagenes/pao.jpg" alt="Avatar" class="image">
                    <div class="overlay">
                    <br>
                    <h4 id="h401"> Pao de Azucar </h4>
                        <br>
                        
                     <div class="text"><br> <br>Este pico es uno de los más llamativos entre lo varios morros de Brasil. Un teleférico de cristal artesonado con capacidad para 65 pasajeros, recorre una ruta de 1.401 metros entre los morros de Babilonia y Urca cada cinco minutos. </div>
                   </div>
                   </div>
                   </div>


        </div>
        
        <div data-aos="fade-down">
        <p class="subtextoparallax2">
          <b>Descripción:</b><br><br>
              Garotas, caipirihna, samba, baile, capoeira, todas estas palabras evocan el soleado Brasil, perfecto para unas vacaciones inolvidables.
              <br> Desde los lugares típicos de Brasil como el Casco Histórico de Porto Seguro, hasta espacios increíbles donde podrás conectarte con la naturaleza como el Parque Nacional Marino de Albrolhos, este país te ofrece una gama infinita de espacios donde podrás escoger el estilo que mejor se adapte a ti.
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