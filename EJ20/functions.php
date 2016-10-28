<?php
function menu(){
  session_start();
  echo <<<HERE
    <a href="index.php">Inicio</a> |
    <a href="connectar.php">Conectar</a> |
    <a href="desconnectar.php">Desonectar</a> |
    <a href="comprobar.php">Comprobar</a>
HERE;
}
function footer(){
  echo "Exercici 20. David Oporto";
}

?>
