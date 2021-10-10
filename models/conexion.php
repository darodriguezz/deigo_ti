<?php

/**
 * Conexion con la base de datos
 *
 */

 $conexion = mysqli_connect("localhost", "root","","deigo_ti");

 	if($conexion){
		 echo "Conectado";
	 }else{
		 echo "no se conecto";
	 }



?>