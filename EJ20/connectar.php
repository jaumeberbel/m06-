<!DOCTYPE html >
  <head>
    <title>Session. Ex.20</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="formulari.css">
  </head>
  <body>

    <nav> <!--nav-->
      <!-- Cridem el menu -->
      <?php // Carreguem el arxiu de funcions i cridem el menú.
        require_once "functions.php";
        menu();
      ?>

    </nav> <!--nav-->

    <main>
      <h2>Conectar</h2>
      <?php
        if(!isset($_SESSION["count"])){
            $_SESSION["count"]=1;
        } else{
          $_SESSION["count"]++;
        }
        echo "Has entrat ".$_SESSION['count']." cops.";
      ?>
    </main>

    <!-- Cridem el footer -->
    <?php // Carreguem el arxiu de funcions i cridem el footer.
      require_once "functions.php";
      footer();
    ?>

  </body>
</html>
