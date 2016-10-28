<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<link href="indexstyle.css" rel="stylesheet" type="text/css">

<head>
	<title>Conversio bytes a bits i gigabytes</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
  <h1>Anem a convertir els bytes en bits i gigabytes</h1>
<!--formularis-->
  <form method="get" action="index3.php">
   <label>Dona'm un numero de bytes:</label>
   <input type="text" name="byte"/>
   <br />

	 <label>Dona'm la teva al&ccedil;ada</label>
   <input type="text" name="alsada"/>
   <br />

   <input type="submit" name="convertir" value="Converteix"/>
  </form>
  <?php

  if(isset($_GET["convertir"])){
  //Definir dues variables
  $byte=$_GET["byte"];//en bytes
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
