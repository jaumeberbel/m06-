<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
	<form method="get" action="ejercicio9.php">
		<!--pide el número-->
   <label>Dona'm el numero</label>
	  <input type="text" name="numero"/>
   <br />
 <input type="submit" name="acceptar" value="acceptar"/>
 </form>
<?php
	if(isset($_GET["acceptar"])){
	if ($_GET["numero"]>=0) {
	//Definir 1 variable
	$numero=$_GET["numero"];
	$numero2=2*$numero;
	$suma=0;
	for ($i=1; $i <=$numero ; $i++) {
	if ($numero%$i == 0) {
	$suma+=$i;
	}
	}
	$abundancia=$suma-$numero2;
	if ($numero2<$suma) {
	//Imprimir per pantalla
	echo "El $numero es abundant.
	";
	echo "La seva abundancia es: $abundancia";
	}
	else {
	//Imprimir per pantalla
	echo "El $numero no es abundant";
	}
	}
	else {
	echo "Ha de ser positiu";
	}
	}
	else {
	echo "Has d'omplir els camps.";
	}
	?>



</body>

</html>
