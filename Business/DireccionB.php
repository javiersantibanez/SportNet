<?php
	require_once("Data/DAO/DireccionDAO.php");
	class DireccionB{
		

		 function totalDireccion(){
			$dao = new DireccionDAO();
			$res = count($dao->selectDireccion());				
			return  $res;
		}

	}
	

?>