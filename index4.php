<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<link href="indexstyle.css" rel="stylesheet" type="text/css">

<head>
	<title>Comprovant DNI</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
  <h1>Comprovarem el teu DNI</h1>
<!--formularis-->
  <form method="get" action="index3.php">
   <label>Dona'm el numero del DNI:</label>
   <input type="text" name="numero"/>
   <br />

    <label>Dona'm la lletra del teu DNI:</label>
    <input type="text" name="lletra" placeholder="Z"/>
    <br />

   <input type="submit" name="comprovar" value="Comprovar"/>
  </form>
  <?php

  if(isset($_GET["comprovar"])){
  //Definir dues variables
  $numero=$_GET["numero"];//en numeros
  $lletra=$_GET
	if($byte>=0 && $byte <2000000000){
	$bits=$byte*8;//en bits
	$gigabyte=$byte/pow(1024,3);//en gigabytes
  echo "Has insertat ".$byte." bytes,que en bits son: ".$bits." i en gigabytes son: ".$gigabyte;
}else{
	echo "No pots pasar del numero 2000000000";
}
}
  else{
    echo "No has omplert els camps";
  }

	?>

</body>

</html>
