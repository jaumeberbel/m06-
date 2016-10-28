<html>
<body style="font-family:Arial">

<h1> Càlcul de la data dos dies enrere</h1>

<form method="get" action="day.php">

	<label>Dia</label>

	<input type="number" name="dia" step="1" min="1" max="31" />

	<label>Mes</label>
	<input type="number" name="mes" step="1" min="1" max="12" />


	<label>Any</label>
	<input type="number" name="any" step="1" min="1" max="3000" />

	<input type="submit" name="acceptar" value="converteix" />
</form>

<?php
if(isset($_GET["dia"]) & isset($_GET["any"]) & isset($_GET["mes"]))
{


	$mesos = array(1=>31, 2=>28, 3=>31, 4=>30, 5=>31, 6=>30, 7=>31, 8=>30, 9=>30, 10=>31, 11=>30, 12=>31);

	$dia = $_GET["dia"];
	$mes = $_GET["mes"];
	$any = $_GET["any"];

	echo "Data entrada: ".$dia."/".$mes."/".$any."<br/>";


	//Any de traspàs

		if(($any % 4 == 0) && (($any%100 <>0) || ($any % 400 == 0)))
		{
			$mesos[2]=29;
		}

	// Comprovem que el dia entrat sigui correcte

	if($dia > $mesos[$mes])
	{
		echo "Data entrada incorrecta";
	}
	else
	{

		$noudia = $dia-2;

		// Si el nou dia és mes gran que 0 no hem de fer res més. Mes i any queden igual

		// Sinó
		if($noudia<=0)
		{
			// Si es gener posarem el mes 12 de l'any anterior. El dia serà 31 o 30 (noudia és 0 o -1)
			if($mes=1){

				$noudia = 31+$noudia;
				$mes = 12;
				$any=$any-1;
			}
			else // Sinó restem un mes i el dia és l'útim o penúltim del mes anterior (sumem 0 o -1)
			{
				$noudia = $mesos[$mes-1] + $noudia;
				$mes = $mes-1;
			}
		}

		echo "Nova data: ".$noudia."/".$mes."/".$any."<br/>";
	}
}



?>



</body>

</html>
