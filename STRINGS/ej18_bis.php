	<?php
			if(isset($_COOKIE["colorfons"]) && isset($_COOKIE["colorlletra"])){

				$cookieFons= $_COOKIE["colorfons"];
				$cookieLletra= $_COOKIE["colorlletra"];
				$cookieComptador= $_COOKIE["comptador"]+1;
				setcookie("comptador",$cookieComptador,time()+60*5);

			}


	 ?>
<html>
<body style="background:<?php echo $cookieFons;?>">


	<h1 style="color:<?php echo $cookieLletra;?>">Has estat en aquest lloc web <?php echo $cookieComptador ?> vegades</h1>

</body>
</html>
