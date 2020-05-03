<!DOCTYPE HTML>  
<html>
<head>
<meta charset="utf-8">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="js/function.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/diseño.css">
</head>
<body class = "php" onload="hfindex()"> 

<div id="header"></div>
<div class="container" id="fondoblanco">
        <?php
        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Nombre es obligatorio";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Solo letras y espacios aceptados";
            }
        }
        
        if (empty($_POST["email"])) {
            $emailErr = "Email es obligatorio";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Formato de email invalido";
            }
        }
            
        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "URL invalido";
            }    
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Genero es obligatorio";
        } else {
            $gender = test_input($_POST["gender"]);
        }
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        ?>

        <h2>Ingrese sus datos:</h2>
        <p><span class="error">* infromacion obligatoria</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <div class="label">Name: </div><input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        <div class="label">E-mail: </div><input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        <div class="label">Website: </div><input type="text" name="website">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        <div class="label">Comment:</div> <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        <div class="label">Gender:</div>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Enviar">  
        </form>

        <?php
        echo "<br>";
        echo "<h5>Gracias por iniciar sesion!</h5>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
        ?>
</div>
<div id="footer"></div>
</body>
</html>
            

