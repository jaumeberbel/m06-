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
        // o bé, require "functions.php".
        // o bé, include_once "functions.php".
        // o bé, include "functions.php".
        menu();
      ?>
    </nav> <!--nav-->


    <main>
        <h2>Inicio</h2>
    </main>

    <footer> <!--footer-->
      <!-- Cridem el footer -->
      <?php // Carreguem el arxiu de funcions i cridem el footer.
        require_once "functions.php";
        footer();
      ?>
    </footer> <!--footer-->

  </body>
</html>
