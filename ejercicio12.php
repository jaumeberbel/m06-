<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
	<link rel="stylesheet" type="text/css" href="ejercicio12.css" media="screen"/>
</head>

<body>
<form method="get" action="ejercicio12.php">
<div>
<label>Nom</label>
	<input type="text" name="name"/>
	   <br />

<label>Edat</label>
	<input type="text" name="age"/>
	   <br />
<!--<label>Pes</pes>
	<input type="text" name="pes"/>
	   <br />
!-->
 <label>Sexe</label>
		 <input type="radio" name="genere" value="Femeni">Femení</option>
		 <input type="radio" name="genere" value="Masculi">Masculí</option>
		 <br />
	<label>Estat civil: </>
		 	<br />
		 		<select multiple name="Estat civil">
		 					<option value="Solter">Solter/a</option>
		 					<option value="Casat">Casat/da</option>
		 						<option value="Viud">Viud/da</option>
		 		</select>
		 			<br />

	<label>Aficions: </label>
		<br />
		<input type="checkbox" name="llegir">LLegir</input>
		<input type="checkbox" name="nedar">Nedar</input>
		<input type="checkbox" name="videogames">Videojocs</input>
			<br />
 <label>Email</label>
		 <input type="text" name="email"/>
			<br />



	<input type="submit" name="acceptar" value="acceptar"/>
	<br />
</div>
</form>
<?php
if(isset($_GET["acceptar"]))
{
$age=$_GET["age"];
$name=$_GET["name"];
$email=$_GET["email"];
//$pes=$_GET["pes"];
//validamos en nombre
if (!preg_match("/^[a-zA-Z]*$/",$name))
{
	echo ("No válido,SÓLO SE ACEPTA LETRAS");
}
else
{
	echo ("El nombre es válido");
}
//hacemos que haya el interválo de 16 a 99 años
if($age<16)
{
echo ("HA DE SER MAYOR DE 16\t");
}
if($age>99)
{
echo ("HA DE SER MENOR DE 99\t");
}
if(filter_var($age,FILTER_VALIDATE_INT))
{
	echo("El número es válido\t");
}
else
{
	 echo("El número no es válido\t");
}
//validamos el correo
if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
	echo ("El correo es válido\t");
}
else
{
	echo ("El correo no es válido\t");
}


}


?>
</body>

</html>
