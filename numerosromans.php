<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
	<form method="get" action="numerosromans.php">
		<!--pide el número-->
	 <label>Dona'm el numero romà per fer-lo àrab</label>
		<input type="text" name="numero"/>
	 <br />
	<input type="submit" name="acceptar" value="acceptar"/>
	</form>
	<?php
	if(isset($_GET["acceptar"])){
	if ($_GET["numero"]>=0) {
	//Definir 1 variable
	$numero=$_GET["numero"];
	$numerox2=2*$numero;
	$sumaDeDivisorsNumero=0;
	for ($i=1; $i <=$numero ; $i++) {
	if ($numero%$i == 0) {
	$sumaDeDivisorsNumero+=$i;
	}
	}
	$abundancia=$sumaDeDivisorsNumero-$numerox2;
	if ($numerox2<$sumaDeDivisorsNumero) {
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
	echo "Els numeros tenen que ser positius";
	}
	}
	else {
	echo "Has d'omplir els camps.";
	}
	?>
</body>

</html>
