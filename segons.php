<html>

<body>

<h1>Conversió segons</h1>

<form method="get" action="">

	<label>Entra els segons</label>

	<input type="number" name="segons" step="1" min="1" max="10000000000" />

	<input type="submit" name="acceptar" value="converteix" />
</form>

<?php

if(isset($_GET["segons"]))
{
	$segons = $_GET["segons"];

	$minuts = round($segons / 60);

	$segons = $segons % 60;

	$hores = round($minuts / 60);

	$minuts = $minuts % 60;

	echo $hores." hores ".$minuts." minuts i".$segons." segons";
}

?>

</body>

</html>
