 <?php

 # Iniciamos  una clase
class inicio {
	
 # Una funcion Publica que llame a la plantilla

	public function Template()
	{
		#Atravez del  metodo 'Include' icluimos Template 
		require_once "views/template.php";
	}
#--------------------------------------------------------------------------------------
 #Interacion con el usuario

 public function enlaceListaController(){

 	if (isset($_GET["action"])) {

 		$enlacesController = $_GET["action"];
 	}

 	else {
 		$enlacesController = "index";
 	} 	

 	$respuesta = enlaceslistas::enlancesListaModel($enlacesController);

 	include $respuesta;

  	}

	#REGISTRO DE USUARIOS
	#------------------------------------
	public function registroUsuarioController(){

		if(isset($_POST["nombreRegistro"])){

			$datosController = array( "nombre"=>$_POST["nombreRegistro"],
									  "apellidos"=>$_POST["apellidosRegistro"],
								      "password"=>$_POST["passwordRegistro"],
								      "email"=>$_POST["emailRegistro"]);

			$respuesta = Datos::registroUsuarioModel($datosController, "usuarios");

		
			echo $respuesta;


		}

	}


}

?>