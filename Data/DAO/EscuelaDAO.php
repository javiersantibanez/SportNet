<?php

require_once("Data/Interfaces/EscuelaI.php");
require_once("Data/DataSource/DataSource.php");
require_once("Data/TransferObject/EscuelaTO.php");

   class EscuelaDAO implements EscuelaI {

      public function selectEscuela(){

        $data_source = new DataSource();
        $data_table  = $data_source->ejecutarConsulta("SELECT * FROM escuela");
        $escuela = null;
        $array_escuela = array();

          foreach ($data_table as $clave => $valor){
            $escuela = new escuela();
            $escuela->setId_escuela( $data_table[$clave]["id_escuela"] );
            $escuela->setNombre( $data_table[$clave]["nombre"] );
            $escuela->setId_direccion( $data_table[$clave]["id_direccion"] );
            $escuela->setId_especialidad( $data_table[$clave]["id_especialidad"] );
            array_push($array_escuela , $escuela); 
          }
          return $array_escuela;
      }

      public function selectEscuelaById($id){

        $data_source = new DataSource();
        $data_table  = $data_source->ejecutarConsulta("SELECT * FROM escuela WHERE id_escuela = :id_escuela",array(':id_escuela'=>$id));
        $escuela = null;

        if (count($data_table) == 1){    
          foreach ($data_table as $clave => $valor){
            $escuela = new escuela();
            $escuela->setId_escuela( $data_table[$clave] ["id_escuela"] );
            $escuela->setNombre( $data_table[$clave] ["nombre"] );
            $escuela->setId_direccion( $data_table[$clave] ["id_direccion"] );
            $escuela->setId_especialidad( $data_table[$clave] ["id_especialidad"] );
          }
          return $escuela;
        }else{
          return null;
        }
      }

      public function insertEscuela(Escuela $escuela){

        $data_source = new DataSource();
        $sql = "INSERT INTO escuela VALUES (        :id_escuela,        :nombre,        :id_direccion,        :id_especialidad,)";
        $resultado = $data_source->ejecutarActualizacion($sql,array(
            ':id_escuela'=>$id_escuela->getId_escuela(), 
            ':nombre'=>$nombre->getNombre(), 
            ':id_direccion'=>$id_direccion->getId_direccion(), 
            ':id_especialidad'=>$id_especialidad->getId_especialidad()
            )
        );
        return $resultado;
      }

      public function updateEscuela(Escuela $escuela){

        $data_source = new DataSource();
        $sql = "UPDATE escuela SET 
                 id_escuela = :id_escuela,
                 nombre = :nombre,
                 id_direccion = :id_direccion,
                 id_especialidad = :id_especialidad,
                 WHERE idescuela = :idescuela                  ";
        $resultado = $data_source->ejecutarActualizacion($sql,array(
            ':nombre'=>$nombre->getNombre(), 
            ':id_direccion'=>$id_direccion->getId_direccion(), 
            ':id_especialidad'=>$id_especialidad->getId_especialidad(), 
            )
        );
        return $resultado;
      }

      public function deleteEscuela($id){

        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM escuela WHERE idescuela = : idescuela", array (':idescuela'=>$id));
        return $resultado;
      }
   }

?>
