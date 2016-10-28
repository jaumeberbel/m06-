<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<link href="indexstyle.css" rel="stylesheet" type="text/css">

<head>

</head>

<body>

  <form method="get" action="Pagina3.php">

    <label>Dona'm un numero:</label>
    <input type="number" name="number" step="1" max="100" min="0"/>
    <input type="submit" name="ok" value="enviar"/>

  </form>

  <?php

if(isset($_GET["numbers"]))
{
  $total = $_GET["numbers"];
  $numero=$_GET["number"];
  $numeros= array();
  $media=$numeros/$total;
  $mayor=max($numeros);


  for($i=0;$i<=count($numero);$i++){

    $numeros[]=$numero;
  }

}else{

  echo "Has d'entrar les setmanes";
}

	?>


</body>

</html>
