<?php 

require_once ($_SERVER['DOCUMENT_ROOT']."/SportNetv1.0/Conexion/conexion.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/SportNetv1.0/direccion.php");



class direccionDAO{
	


	public function selectDireccionID($id){

		$c = conectar();
		$consulta= "SELECT calle,numero,comuna FROM Direccion WHERE id_direccion= $id";

		$resultado= mysqli_query($c,$consulta);
		$aux = array();

        if($row = $resultado->num_rows >0){
        	$direcc = new Direccion();
	        $row = mysqli_fetch_array($resultado);
	        $direcc->setCalle($row['calle']);
	        $direcc->setNumero($row['numero']);
	        $direcc->setComuna($row['comuna']);
 			array_push($aux, $direcc);

 			return $aux;
		}else{
			return null;
		}
	}
	

}




?>