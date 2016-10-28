<?php
    session_start();

 ?>

<html>

<body style="background:<?php echo $_SESSION['fons'] ?>">


<h1 style="color:<?php echo $_SESSION['lletra'] ?>">Has estat en aquest lloc web <?php echo $_SESSION['comptador'] ?> vegades</h1>

</body>
</html>
