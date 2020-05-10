<!DOCTYPE HTML>  
<html>
    <head>
    <meta charset="utf-8">
    <link rel="icon" href="/Proyecto1/favicon.ico"> 
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="../js/function.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css" type="text/css">
    <title> LogIn </title>

    </head>
    <body class ="php" onload="hfabout()">

        <div id="header"></div>
            <?php session_start();

            $username = $_POST['uname'] ;
            $password =  $_POST['psw'] ;

            $_SESSION['vuname'] =$username;

            ?>


            <form class="modal-content animate" action="/Proyecto1/Index.php" method="post">
                <div class="tam">
                <h4><b>Gracias por iniciar sesion!!!!</b></h4>
                <p>Tus datos son: </p>
                <?php
                    echo"<p><b>Nombre de usuario: </b></p>";
                    echo  $username;
                    echo "<br>";
                    echo "<br>";
                    echo"<p><b>Contraseña: </b></p>";
                    echo $password;
                    ?>
                </div>
                <div class="container" style="background-color:#f1f1f1">
                <button href="/Proyecto1/Index.php" >Volver al Inicio</button>
                </div>
            </form>

            <div id="footer"></div>
    </body>
</html>