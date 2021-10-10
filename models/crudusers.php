<?php

		include 'conexion.php';

			$nombre = $_POST ['nombreRegistro'];
			$apellido = $_POST ['apellidosRegistro'];
			$pass = $_POST ['passwordRegistro'];
			$email = $_POST ['emailRegistro'];


			$query = "INSERT INTO usuarios(nombre, apellido, pass, email) 
					  VALUES ('$nombre', '$apellido', '$pass', '$email')";

			//Verificar que el correo no se repita en la base de datos

			$verificar_email = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' ");
			if(mysqli_num_rows($verificar_emal) > 0){
				echo '
					<script>
							alert("Correo ya Registrado");
							window.location = "../views/pages/Register.php";
					</script>
				
				';
				exit();
			}

			$ejecutar = mysqli_query($conexion, $query);

			if($ejecutar){
				echo '
					<script>
							alert("Usuario Registrado Correctamente");
							window.location = "../index.php";
					</script>
				';
			}else{
				'
					<script>
							alert("Usuario no Registrado intente de nuevo");
							window.location = "../views/pages/login.php";					
					</script>
				
				';
			}

			mysqli_close($conexion);

?> 