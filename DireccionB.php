<?php
	require_once("Data/DAO/DireccionDAO.php");
	//class DireccionB{
		echo "string";

		// function totalDireccion(){
			$dao = new DireccionDAO();
			$obj = $dao->selectDireccion();	
			$num = 0;
			print_r($obj);
			foreach ($obj as $key =>$value) {
				# code...
				//if ($value) {
					# code...
				//}
				print_r($value);
				echo "<br>";
				echo "<br>";
				echo "$value=>";
				
			}//print_r($value);

			//print_r($obj)
			//return  1;
		//}

	//}
	

?>