<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Color de fons cookies</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="indexstyle.css">

</head>

<body>
	<form method="get" action="ej18.php">

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
$fons=$_GET["fons"];
$lletra=$_GET["lletra"];

setcookie("colorfons",$_GET["fons"],time()+60*5);
setcookie("colorlletra",$_GET["lletra"],time()+60*5);

	if(!isset($_COOKIE["comptador"])){
		setcookie("comptador",0,time()+60*5);
	}


header('location:ej18_bis.php');
}
?>

</body>

</html>
