<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<link href="indexstyle.css" rel="stylesheet" type="text/css">

<head>

</head>

<body>

  <?php

if(isset($_GET["setmanes"]))
{
  $setmanes = $_GET["setmanes"];
  $taula="<table>";

  $taula.= "<tr><th>Dilluns</th><th>Dimarts</th><th>Dimecres</th><th>Dijous</th><th>Divendres</th><th>Dissabte</th><th>Diumenge</th></tr>";

  for($i=0; $i<$setmanes; $i++)
  {
        $taula.="<tr>";

        for($j=0;$j<7;$j++)
        {
          $taula.="<td>";
          $taula.="<input type='checkbox' name='dies[]' value='.$i.$j' />";
          $taula.="</td>";
        }

        $taula.="</tr>";

  }

  $taula.= "</table>";


}else{

  echo "Has d'entrar les setmanes";
}

	?>

  <form method="get" action="pagina3.php">

    <?php

      echo $taula;

     ?>

    <input type="submit" name="ok" value="enviar"/>

  </form>

</body>

</html>
