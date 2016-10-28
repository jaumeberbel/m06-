<!DOCTYPE html>  
<html xmlns="http://www.w3.org/1999/xhtml">  
    <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title>HTML5 y CSS Formulario de contacto</title>  
        <link href="ui.css" rel="stylesheet" />  
    </head>  
    <body>  
        <form  class="contact_form" action="" id="contact_form" method="post">  
            <div>  
                <ul>  
                    <li>  
                        <h2>Contactos</h2>  
                        <span class="required_notification">* Datos requeridos</span>  
                    </li>  
                     <li>  
                        <label for="nom">Nick *:</label>  
                        <input type="text" name="nick" placeholder="carlos_123" required />  
                    </li>  
                    <li>  
                        <label for="nom">Nombre *:</label>  
                        <input type="text" name="nombre" placeholder="Jose Luis" required />  
                    </li>  
                    <li>  
                        <label for="cognoms">Apellidos *:</label>  
                        <input type="text" name="apellidos"  placeholder="Garcia Garcia" required />  
                    </li>
                    <li>  
                        <label for="edat">Edad :</label> 
                        <input type="number" name="edad" min="18" max="99" step="1" value="18"/>
                                             
                    </li>
                     <li>  
                        <label for="pes">Peso *:</label> 
                        <input type="number" name="peso"  min="18" max="99" step="0.01" required />
                                             
                    </li>
                    <li>  
                        <label for="email">Email *:</label>  
                        <input type="email" name="email" required />  
                        <span class="form_hint">Formato correcto: "name@something.com"</span>  
                    </li> 
                     <li>  
                        <label for="DNI">DNI *:</label>  
                        <input type="text" name="dni"  placeholder="12345678Z" maxlength="9" size="9" />
                        <span class="form_hint">Formato correcto: "12345678Z"</span>  
                    </li>
                     <li>  
                        <label for="sexo">Sexo *:</label>  
                        <input type="radio" name="sexo" value="Hombre" checked /> Hombre <!--me lo invento para ver todos los casos-->
                        <input type="radio" name="sexo" value="Mujer" /> Mujer
                    </li>
                     <li>  
                        <label for="estat">Estado Civil *:</label>  
                        <input type="radio" name="estado" value="Soltero" checked/> Soltero
                        <input type="radio" name="estado" value="Casado" /> Casado
                        <input type="radio" name="estado" value="Otros" /> Otros
                    </li>
                    <li>  
                        <label for="aficions">Aficiones * :</label>  
                        <input type="checkbox" name="hobbies[]" value="Monta&ntilde;a" /> Monta&ntilde;a <!--atencion con los corchetes de hobbies-->
                        <input type="checkbox" name="hobbies[]" value="Cine" /> Cine
                        <input type="checkbox" name="hobbies[]" value="Otros" /> Otros
                    </li>
                    <li>  
                        <button class="submit" type="submit" name="ok">Enviar mensaje</button>  
                    </li>  
                </ul>  
            </div>  
        </form> 
        <div>	
			
			
        <?php
	        if (isset($_POST["ok"])){
				
				//seguridad en los campos que ha intoducido el usuario
				$nick=  test_input (  $_POST["nick"]  );
				$nombre=  test_input (  $_POST["nombre"]  );
				$apellidos=test_input(  $_POST["apellidos"]  );
				$edad=test_input($_POST["edad"]);
				$peso=test_input($_POST["peso"]);
				$email=test_input($_POST["email"]);
				$dni=test_input($_POST["dni"]);
				
				//aquellos campos que el usuario no escribe no hace falta la seguridad
			
				$sexo=$_POST["sexo"];//es un radio, no hace falta pasarle el test_input
			
				$estado=$_POST["estado"];//es un radio, no hace falta pasarle el test_input
				
				if (isset($_POST["hobbies"]))
				$hobbies=$_POST["hobbies"];//es un checkbox, no hace falta pasarle el test_input
				
				
				//empiezo a comprobar valores
				
				$nick=checkNick($nick);
				echo "Nick: ".$nick;
				echo "<br />";
				//letras?
				$nombre=checkLetters($nombre);
				$apellidos=checkLetters($apellidos);
				echo "Nombre: ".$nombre;
				echo "<br />";
				echo "Apellidos: ".$apellidos;
				
				//numeros?
				echo "<br />";
				
				$edad=checkFilter($edad, FILTER_VALIDATE_INT);
				$peso=checkFilter($peso, FILTER_VALIDATE_FLOAT);
				echo "Edad: ". $edad;
				echo "<br />";
				echo "Peso: ".$peso;
				$email=checkFilter($email, FILTER_VALIDATE_EMAIL);
				echo "<br />";
				echo "Email: ".$email;

				//DNI?
				$dni=checkDni($dni);
				echo "<br />";
				echo "DNI: ".$dni;

				//el resto no filtrable
				echo "<br />";
				echo "Sexo: ".$sexo;
				echo "<br />";
				echo "Estado civil: ".$estado;
				
				echo "<br />";
				echo "Aficiones: ";
				echo "<br />";
				if (isset($hobbies)){
					echo"<ul>";
					for ($i=0;$i<count($hobbies);$i++){
						
						echo "<li>".$hobbies[$i]."</li>";
						
					}
					echo"</ul>";
				}
				else{
					
					echo "<ul><li>Te faltaria decir alguna afici&oacute;n</li></ul>";
				}
			}
			
			
			/**
			 * @description the function delete the space of string in frond and behind. Also removes charaters special and
			 *not interpreter tag
			 *@param  $value value of variable
			 * @return false or the value of variable
			*/
			function test_input($value){
				$value = trim($value);// quita espacio por delante y por detras
			 	$value = stripslashes($value);//no interprata tag
			 	$value = htmlspecialchars($value); //deshace posible caracteles especiales
			 	return $value;
			}

			/**
			 * @description the function check the name and last name to avoid charather special
			 *@param  $value value of variable
			 * @return the value of variable or error
			*/
			
			function checkLetters($value){
				$search  = array('á', 'é', 'í', 'ó', 'ú','à','è','ò',' ','Á','É','Í','Ó','Ú','À','È','Ò',);
				$replace = array('a', 'e', 'i', 'o', 'u','a','e','o','','A','E','I','O','U','A','E','O',);
				$subject = $value;
				$removeCharather=str_replace($search, $replace, $subject);//replace the charaters
				if (ctype_alpha($removeCharather)){
					return $value;
				}
				else{
					return "No es valido $value";
				}

			}
			
			/**
			 * @description the function check the email,age and weigth.
			 *@param  value of variable and filter valid
			 * @return the value of variable or error
			*/
			function checkFilter($value,$failter){
				if (filter_var($value,$failter)) {
			   	 	 return $value;
			   	 }
			   	else{
			   		return "Invalid Date $value";
			   	}
			}
			/**
			 * @description the function check the dni.
			 *@param  value of variable ($dni)
			 * @return the value of variable or error
			*/
			function checkDni($dni){
				$error="";
				$rest= substr($dni,0,-1);//take the first 8 values
				$rest2=substr($dni,8);//take the final value.

				if($dni<0 or $dni>999999999){
				$error .="<div class='error'>You must enter 8 numbers and one letter</div>";
				}
				if(!is_numeric($rest)){
					$error .="<div class='error'>You have to enter a valid number</div>";
				}if(!ctype_alpha($rest2)){
					$error .="<div class='error'>You have to enter a letter</div>";
				}

				if($error==""){
					$result= $rest%23;//calculate the rest of division
					$dni_valid=array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E");
					$rest2= strtoupper($rest2);//converte to capital letter
					if($dni_valid[$result]==$rest2){
						return $dni;
					}
					else{return "Invalid DNI $dni";}
				}
				else{ return $error;}
			}
			
			
			function checkNick($nick)
			{
				$permitidos = "abcdefghijklmnopqrstuvwxyz1234567890_";
				
				$result ="";
				
				for ($i=0; $i<strlen($nick);$i++)
				{
						
					if(strpos($permitidos, $nick[$i]) === false)
					{
						//return $nick." no es válido";
						return  $nick." es incorrecto";
						}
						
				}
				
				return $nick;
				
			}
		
		?>
       </div>
    </body>  
</html> 
