<!DOCTYPE HTML>  
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="/Proyecto1/js/function.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

</head>
<body>


<?php session_start();
           
  ?>

  <div id="navbar">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <a class="navbar-brand" href="/Proyecto1/Index.html"><i class="fa fa-fw fa-home"></i>Inicio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <div class="dropdown">
              <button onclick="myFunction1()" class="dropbtn "><i class="fa fa-fw fa-plane"></i>Destinos</button>
              
              <div id="myDropdown" class="dropdown-content">
                <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                <a href="/Proyecto1/about/EEUU.html">Estados Unidos</a>
                <a href="/Proyecto1/about/China.html">China</a>
                <a href="/Proyecto1/about/España.html">España</a>
                <a href="/Proyecto1/about/Francia.html">Francia</a>
                <a href="/Proyecto1/about/Italia.html">Italia</a>
                <a href="/Proyecto1/about/Brasil.html">Brasil</a>
                <a href="/Proyecto1/about/Inglaterra.html">Inglaterra</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Proyecto1/about/Descuentos.html"><i class="fa fa-fw fa-dollar"></i>Descuentos</a>
          </li>
          </ul>
        </div>  

        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <?php
                if(isset ($_SESSION['vuname'])){
                  $username = $_SESSION['vuname'];    
                  $buttonvisible = "lognotinvisible";
                  $uservisible = "uservisible";
                }else{
                  $buttonvisible = "loginvisible";
                  $uservisible = "usernotvisible";
                }
                ?>   
          <li class="nav-item">
                  <div style="float:left" class="<?php echo $uservisible?>">
                    <button onclick="document.getElementById('id02').style.display='block'" class="nav-link"><i class="fa fa-fw fa-user"></i> <?php echo $username?></button> 
                  </div>
                  <div style="float:right" class="<?php echo $buttonvisible ?>">
                    <button onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-fw fa-user"></i>Iniciar Sesion</button>
              </div>
      <div id="id01" class="modal">
        <form class="modal-content animate" action="/Proyecto1/php/login.php" method="post">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Cerrar">&times;</span>
            <img src="/Proyecto1/imagenes/img_avatar2.png" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <label for="uname"><b>Usuario</b></label>
            <input type="text" placeholder="Nombre de ursuario" name="uname" required>

            <label for="psw"><b>Contraseña</b></label>
            <input type="password" placeholder="Contraseña" name="psw" required>

            <button type="submit">Iniciar Sesion</button>
          </div>

        </form>
      </div>

      <div id="id02" class="modal">
      <form class="modal-content animate" action=<?php session_destroy(); ?> >
          <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="/Proyecto1/imagenes/img_avatar2.png" alt="Avatar" class="avatar">
          </div>

          <div class="container">
            <h1><b>Desea cerrar sesion?</b></h1>

            <button href="/Proyecto1/Index.html" type="submit">Cerrar Sesion</button>
          </div>

        </form>
      </div>

            </li>    
          </ul>
        </div>  
      </nav>
  </div>
  </div>
</body>
</html>