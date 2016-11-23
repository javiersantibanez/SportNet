<?php
	require_once("Data/DAO/PersonaDAO.php");
	class PersonaB{
		

		 function totalPersonas(){
			$dao = new PersonaDAO();
			$res = count($dao->selectPersona());	
			return $res;	
		}

	}
	

?>