<?php

require_once("Data/Interfaces/EspecialidadI.php");
require_once("Data/DataSource/DataSource.php");
require_once("Data/TransferObject/EspecialidadTO.php");

   class EspecialidadDAO implements EspecialidadI {

      public function selectEspecialidad(){

        $data_source = new DataSource();
        $data_table  = $data_source->ejecutarConsulta("SELECT * FROM especialidad");
        $especialidad = null;
        $array_especialidad = array();

          foreach ($data_table as $clave => $valor){
            $especialidad = new especialidad();
            $especialidad->setId_especialidad( $data_table[$clave] ["id_especialidad"] );
            $especialidad->setNombre( $data_table[$clave] ["nombre"] );
            $especialidad->setDescripcion( $data_table[$clave] ["descripcion"] );
            $especialidad->setValor_clase( $data_table[$clave] ["valor_clase"] );
            array_push($array_especialidad , $especialidad); 
          }
          return $array_especialidad;
      }

      public function selectEspecialidadById($id){

        $data_source = new DataSource();
        $data_table  = $data_source->ejecutarConsulta("SELECT * FROM especialidad WHERE id_especialidad = :id_especialidad",array(':id_especialidad'=>$id));
        $especialidad = null;

        if (count($data_table) == 1){    
          foreach ($data_table as $clave => $valor){
            $especialidad = new especialidad();
            $especialidad->setId_especialidad( $data_table[$clave] ["id_especialidad"] );
            $especialidad->setNombre( $data_table[$clave] ["nombre"] );
            $especialidad->setDescripcion( $data_table[$clave] ["descripcion"] );
            $especialidad->setValor_clase( $data_table[$clave] ["valor_clase"] );
          }
          return $especialidad;
        }else{
          return null;
        }
      }

      public function insertEspecialidad(Especialidad $especialidad){

        $data_source = new DataSource();
        $sql = "INSERT INTO especialidad VALUES (        :id_especialidad,        :nombre,        :descripcion,        :valor_clase,)";
        $resultado = $data_source->ejecutarActualizacion($sql,array(
            ':id_especialidad'=>$id_especialidad->getId_especialidad(), 
            ':nombre'=>$nombre->getNombre(), 
            ':descripcion'=>$descripcion->getDescripcion(), 
            ':valor_clase'=>$valor_clase->getValor_clase(), 
            )
        );
        return $resultado;
      }

      public function updateEspecialidad(Especialidad $especialidad){

        $data_source = new DataSource();
        $sql = "UPDATE especialidad SET 
                 id_especialidad = :id_especialidad,
                 nombre = :nombre,
                 descripcion = :descripcion,
                 valor_clase = :valor_clase,
                 WHERE idespecialidad = :idespecialidad                  ";
        $resultado = $data_source->ejecutarActualizacion($sql,array(
            ':id_especialidad'=>$id_especialidad->getId_especialidad(), 
            ':nombre'=>$nombre->getNombre(), 
            ':descripcion'=>$descripcion->getDescripcion(), 
            ':valor_clase'=>$valor_clase->getValor_clase(), 
            )
        );
        return $resultado;
      }

      public function deleteEspecialidad($id){

        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM especialidad WHERE idespecialidad = : idespecialidad", array (':idespecialidad'=>$id));
        return $resultado;
      }
   }

?>
