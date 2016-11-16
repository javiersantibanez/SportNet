<?php 


include ('Conexion/conexion.php');
include ('/Negocio/direccion.php');


class DAOdireccion{
	
	

	public function selectDireccionID($id){

		$c = conectar();
		$consulta2= "SELECT calle,numero,comuna FROM Direccion WHERE id_direccion= $id";

		$resultado2= mysqli_query($c,$consulta2);


        if($row = $resultado2->num_rows >0){

	        $row = mysqli_fetch_array($resultado2);
	        $direcc = $row['calle'];
	        $direcc .= $row['numero'];
	        $direcc .= ' ';
	        $direcc .= $row['comuna'];
 			
 			return $direcc;
		}else{
			return null;
		}
	}
	

}




?>