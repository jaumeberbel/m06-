<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Palindromo</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="ui.css">

</head>

<body>
    <h1>Palindromo</h1>
    <!--Formularis-->
    <form method="get" action="palindromo.php">
        <!--Demana els bytes-->
        <label>Inserta una frase:</label>
        <input type="text" name="palabra" value="" placeholder="es un exemple"/>
        </br>

        <input type="submit" name="Verifica" value="Verifica"/>

    </form>

    <?php
    if (isset($_GET['Verifica'])){
        $cadena=$_GET['palabra'];
        $cadenainvertida = strrev($cadena);


      if (strcmp($cadena, $cadenainvertida)==0 || $cadena = strtoupper($cadena)){
          echo "<p>La cadena ".$cadena." es un palíndromo</p>";
          echo "<p>".$cadena."</p>";
          echo "<p>".$cadenainvertida."</p>";
      }
      else{
          echo "<p>La cadena ".$cadena." no es un palíndromo</p>";
          echo "<p>".$cadena."</p>";
          echo "<p>".$cadenainvertida."</p>";
      }

  }

  ?>

</body>

</html>
