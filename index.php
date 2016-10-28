<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<link href="indexstyle.css" rel="stylesheet" type="text/css">

<head>
	<title>Index de massa corporal</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
  <h1>Anem a calcular el teu I.M.C</h1>
<!--formularis-->
  <form method="get" action="index.php">
   <label>Dona'm el teu pes</label>
   <input type="text" name="pes"/>
   <br />

   <label>Dona'm la teva al&ccedil;ada</label>
   <input type="text" name="alsada"/>
   <br />
   <input type="submit" name="acceptar" value="Calcula"/>
  </form>
  <?php

  if(isset($_GET["acceptar"])){
  //Definir dues variables
  $pes=$_GET["pes"];//en kilos
  $alsada=$_GET["alsada"];//en mb_convert_variables
  //$imc=$pes/$alsada**2;
  $imc=round($pes/pow($alsada,2),4);
  echo "<br />El teu index de massa corporal es: ".$imc;

  if($imc<18.5) echo "<br />Estas prim";
  if($imc >=18.5 && $imc <=24.99) echo "<br />Estas perfecte";
  if($imc >=25.0) echo "<br /> Tens sobrepes";

}
  else{
    echo "Has d'omplir els camps";
  }
  //Exemples de prova
  /*
  //declare
  $a=2;
  //$a="lalala";
  $_a=3.4;
  $a3="hola";
  define("CONSTANT","Hola mundo");
  //echo CONSTANT;
  echo "Aixo es un exemple ".$a." i aixi es com es concatena";
  echo "<br/>";
  $vector=array(2,3,4);
  $vector[0]=43;
  echo $vector[0];
  echo "<br>VECTOR2<br/>";
  $vector2=array();
  $vector2[]="hola";
  $vector2[]="adeu";
  $vector2[]="44";
  echo $vector2[2];
  echo "<br>VECTOR3<br/>";
  $vector3=array("daw"=>"segon","smx"=>"primer");
  echo $vector3["daw"];
  echo "<br/>";
  //abreviem el foreach
  foreach ($vector3 as $value) {
    echo "Valor: $value.\n";
  }
  //echo is_string($a3);*/
  ?>

</body>

</html>
