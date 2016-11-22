<?php
	require_once("Data/DAO/EspecialidadDAO.php");
	class EspecialidadB{
		

		 function totalEspecialidad(){
			$dao = new EspecialidadDAO();
			$res = count($dao->selectEspecialidad());				
			return  $res;
		}

	}
	

?>