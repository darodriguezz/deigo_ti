 <?php

/**
 * 
 */
class 	enlaceslistas{
	
	public function enlancesListaModel($ListaModel)	{

		if ($ListaModel == "Tables"	||
			$ListaModel == "Menus"	||
			$ListaModel == "Dashboard") {

			$module = "views/pages/".$ListaModel.".php";
		}

		elseif ($ListaModel == "index") {

			$module = "views/pages/Dashboard.php";
			
		}
		else{

			$module = "views/pages/Dashboard.php";

		}

		return $module;
	}
} 


?>