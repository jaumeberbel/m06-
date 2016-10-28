<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Comprovar DNI</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="indexstyle.css">

</head>

<body>
    <h1>Comprovar DNI</h1>
    <!--Formularis-->
    <form method="get" action="dni.php">
        <!--Demana els bytes-->
        <label>Inserta el teu número i lletra de DNI</label>
        <input type="text" name="numero" value="" placeholder="12345678"/>
        <input type="text" name="lletra" value="" placeholder="Z"/>
        </br>

        <input type="submit" name="Verifica" value="Verifica"/>

    </form>

    <?php
        if(isset($_GET["Verifica"])){
            // Definir variables
            $dni=$_GET["numero"];
            $nie=$_GET["lletra"];
            $modul=$dni%23;
            $lletra="I";
            // Assigna la lletra correcte...
            switch ($modul){
                case 0: $lletra="T";break;
                case 1:    $lletra="R";break;
                case 2:    $lletra="W";break;
                case 3:    $lletra="A";break;
                case 4:    $lletra="G";break;
                case 5:    $lletra="M";break;
                case 6:    $lletra="Y";break;
                case 7: $lletra="F";break;
                case 8:    $lletra="P";break;
                case 9:    $lletra="D";break;
                case 10:$lletra="X";break;
                case 11:$lletra="B";break;
                case 12:$lletra="N";break;
                case 13:$lletra="J";break;
                case 14:$lletra="Z";break;
                case 15:$lletra="S";break;
                case 16:$lletra="Q";break;
                case 17:$lletra="V";break;
                case 18:$lletra="H";break;
                case 19:$lletra="L";break;
                case 20:$lletra="C";break;
                case 21:$lletra="K";break;
                case 22:$lletra="E";break;
                default:$lletra="";break;
            }
            if ($nie == $lletra){
                echo "El DNI ".$dni."-".$nie." és correcte";
            } else{
                echo "El DNI ".$dni."-".$nie." és incorrecte";
            }

    }
     ?>

</body>

</html>
