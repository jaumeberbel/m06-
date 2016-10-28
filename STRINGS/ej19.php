<?php

  session_start();

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Color de fons sessions</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="indexstyle.css">

</head>

<body>
	<form method="get" action="ej19.php">

		<legend>Escull el teu color de fons:</legend>
		<select name="fons">
		<option value="red">Vermell</option>
		<option value="yellow">Groc</option>
		<option value="blue">Blau</option>
		</select>
		<legend>Escull el teu color de lletra:</legend>
		<select name="lletra">
		<option value="red">Vermell</option>
		<option value="yellow">Groc</option>
		<option value="blue">Blau</option>
		</select>
		<input type="submit" name="acceptar" value="accepta"/>
		<br />
		<br />

</form>

<?php
if (isset($_GET['acceptar'])){
$_SESSION['fons']=$_GET["fons"];
$_SESSION['lletra']=$_GET["lletra"];

setcookie("colorfons",$_GET["fons"],time()+60*5);
setcookie("colorlletra",$_GET["lletra"],time()+60*5);

	if(!isset($_SESSION["comptador"])){
    $_SESSION["comptador"]=1;
	}else{
    $_SESSION["comptador"]++;
  }

  if($_SESSION["comptador"] == 10){
    unset($_SESSION["comptador"]);
    session_destroy();
  }

header('Location:ej19_bis.php');
}
?>

</body>

</html>
