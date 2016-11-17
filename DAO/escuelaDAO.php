<?php

require_once ($_SERVER['DOCUMENT_ROOT']."/SportNetv1.0/Conexion/conexion.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/SportNetv1.0/escuela.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/SportNetv1.0/funciones.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/SportNetv1.0/DAO/direccionDAO.php");


class escuelaDAO{


	public function selectEscuela($especialidad){

		$c = conectar();
		$consulta= "SELECT Escuela.nombre,Escuela.id_direccion,Escuela.id_especialidad FROM Escuela INNER JOIN Especialidad on Escuela.id_especialidad = Especialidad.id_especialidad WHERE Especialidad.nombre = '$especialidad' ";

		$resultado= mysqli_query($c,$consulta);

		$obj = new direccionDAO();

		$i=0;

		while ($fila = mysqli_fetch_array($resultado)){

			$nombre = $fila['nombre'];
        	$direccion = $fila['id_direccion'];

			$aux = $obj->selectDireccionID($direccion);
			
	        if($direccion != ""){

	        	$res = buscarCoordenadas($aux);
	        	$coordenadas = explode(" ",$res);

		        $lista[$i][0]=$nombre;
		        $lista[$i][1]=$coordenadas[0];
		        $lista[$i][2]=$coordenadas[1];
	        
	    		$i++;

	 			
			}else{
				return null;
			}

			
		}

		return $lista;
}








}



?>