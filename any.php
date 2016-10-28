<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
	<form method="get" action="any.php">
   <label>Dona'm l'any</label>
	  <input type="text" name="any"/>
   <br />
 <input type="submit" name="acceptar" value="acceptar"/>
 </form>

<?php
  if(isset($_GET["acceptar"]))
	{
	$any=$_GET["any"];
	if($any>=0 && $any <10000)
	{
		if (($any%4==0)&& !($any%100==0))
		{
			echo ("es de traspas");
		}
		else if ($any%400==0)
		{
			echo ("es de traspas");
		}
		else
		 {
			echo (" no es de traspas");
		}
	}
}
?>


</body>

</html
