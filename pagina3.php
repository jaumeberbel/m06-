<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<link href="indexstyle.css" rel="stylesheet" type="text/css">

<head>

</head>

<body>

  <?php
  $dies= array();

  $dies= $_GET["dies"];
	$day= array('Dilluns','Dimarts','Dimecres','Dijous','Divendres','Dissabte','Diumenge');

  for($i=0;$i<count($dies);$i++)
	{

		$semana= substr($dies[$i],0,strlen($dies[$i])-1);
		$semana= $semana+1;

		$numdia = substr($dies[$i],-1);

		echo "<p>dia ".$day[$numdia]." de la setmana ".$semana."</p>";
  }


	?>



</body>

</html>
