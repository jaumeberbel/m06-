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
      <h2>Desconectar</h2>
      <?php
        if(!isset($_SESSION["count"])){
            echo "No tens sessió.";
        } else{
          session_destroy();
          echo "Sessió tancada.";
        }
      ?>
    </main>

    <!-- Cridem el footer -->
    <?php // Carreguem el arxiu de funcions i cridem el footer.
      require_once "functions.php";
      footer();
    ?>


  </body>
</html>
