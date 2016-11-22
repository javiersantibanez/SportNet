<?php
	require_once("Data/DAO/EscuelaDAO.php");
	
	//$dao->selectEscuela();
	//$vars = get_object_vars($dao);
		//print_r($vars);
		//$arr = (array)$dao;
	//print_r($dao->selectEscuelaById(2));
	class EscuelaB{
		

		 function totalEscuelas(){
			$dao = new EscuelaDAO();
			$res = count($dao->selectEscuela());	
			return $res;	
		}

	}
	

?>
