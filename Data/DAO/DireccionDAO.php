<?php

require_once("Data/Interfaces/DireccionI.php");
require_once("Data/DataSource/DataSource.php");
require_once("Data/TransferObject/DireccionTO.php");

   class DireccionDAO implements DireccionI {

      public function selectDireccion(){

        $data_source = new DataSource();
        $data_table  = $data_source->ejecutarConsulta("SELECT * FROM direccion");
        $direccion = null;
        $array_direccion = array();

          foreach ($data_table as $clave => $valor){
            $direccion = new direccion();
            $direccion->setId_direccion( $data_table[$clave] ["id_direccion"] );
            $direccion->setRegion( $data_table[$clave] ["region"] );
            $direccion->setCiudad( $data_table[$clave] ["ciudad"] );
            $direccion->setComuna( $data_table[$clave] ["comuna"] );
            $direccion->setCalle( $data_table[$clave] ["calle"] );
            $direccion->setNumero( $data_table[$clave] ["numero"] );
            $direccion->setDepto( $data_table[$clave] ["depto"] );
            array_push($array_direccion , $direccion); 
          }
          return $array_direccion;
      }

      public function selectDireccionById($id){

        $data_source = new DataSource();
        $data_table  = $data_source->ejecutarConsulta("SELECT * FROM direccion WHERE id_direccion = :id_direccion",array(':id_direccion'=>$id));
        $direccion = null;

        if (count($data_table) == 1){    
          foreach ($data_table as $clave => $valor){
            $direccion = new direccion();
            $direccion->setId_direccion( $data_table[$clave] ["id_direccion"] );
            $direccion->setRegion( $data_table[$clave] ["region"] );
            $direccion->setCiudad( $data_table[$clave] ["ciudad"] );
            $direccion->setComuna( $data_table[$clave] ["comuna"] );
            $direccion->setCalle( $data_table[$clave] ["calle"] );
            $direccion->setNumero( $data_table[$clave] ["numero"] );
            $direccion->setDepto( $data_table[$clave] ["depto"] );
          }
          return $direccion;
        }else{
          return null;
        }
      }

      public function insertDireccion(Direccion $direccion){

        $data_source = new DataSource();
        $sql = "INSERT INTO direccion VALUES (        :id_direccion,        :region,        :ciudad,        :comuna,        :calle,        :numero,        :depto,)";
        $resultado = $data_source->ejecutarActualizacion($sql,array(
            ':id_direccion'=>$id_direccion->getId_direccion(), 
            ':region'=>$region->getRegion(), 
            ':ciudad'=>$ciudad->getCiudad(), 
            ':comuna'=>$comuna->getComuna(), 
            ':calle'=>$calle->getCalle(), 
            ':numero'=>$numero->getNumero(), 
            ':depto'=>$depto->getDepto(), 
            )
        );
        return $resultado;
      }

      public function updateDireccion(Direccion $direccion){

        $data_source = new DataSource();
        $sql = "UPDATE direccion SET 
                 id_direccion = :id_direccion,
                 region = :region,
                 ciudad = :ciudad,
                 comuna = :comuna,
                 calle = :calle,
                 numero = :numero,
                 depto = :depto,
                 WHERE id_direccion = :id_direccion                  ";
        $resultado = $data_source->ejecutarActualizacion($sql,array(
            ':id_direccion'=>$id_direccion->getId_direccion(), 
            ':region'=>$region->getRegion(), 
            ':ciudad'=>$ciudad->getCiudad(), 
            ':comuna'=>$comuna->getComuna(), 
            ':calle'=>$calle->getCalle(), 
            ':numero'=>$numero->getNumero(), 
            ':depto'=>$depto->getDepto(), 
            )
        );
        return $resultado;
      }

      public function deleteDireccion($id){

        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM direccion WHERE iddireccion = : id_direccion", array (':id_direccion'=>$id));
        return $resultado;
      }
   }

?>
