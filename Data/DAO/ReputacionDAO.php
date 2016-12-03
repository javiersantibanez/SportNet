<?php

require_once("Data/Interfaces/ReputacionI.php");
require_once("Data/DataSource/DataSource.php");
require_once("Data/TransferObject/ReputacionTO.php");

   class ReputacionDAO implements ReputacionI {

      public function selectReputacion(){

        $data_source = new DataSource();
        $data_table  = $data_source->ejecutarConsulta("SELECT * FROM reputacion");
        $reputacion = null;
        $array_reputacion = array();

          foreach ($data_table as $clave => $valor){
            $reputacion = new reputacion();
            $reputacion->setId_reputacion( $data_table[$clave] ["id_reputacion"] );
            $reputacion->setId_escuela( $data_table[$clave] ["id_escuela"] );
            $reputacion->setNota( $data_table[$clave] ["nota"] );
            array_push($array_reputacion , $reputacion); 
          }
          return $array_reputacion;
      }

      public function selectReputacionById($id){

        $data_source = new DataSource();
        $data_table  = $data_source->ejecutarConsulta("SELECT * FROM reputacion WHERE id_reputacion = :id_reputacion",array(':id_reputacion'=>$id));
        $reputacion = null;

        if (count($data_table) == 1){    
          foreach ($data_table as $clave => $valor){
            $reputacion = new reputacion();
            $reputacion->setId_reputacion( $data_table[$clave] ["id_reputacion"] );
            $reputacion->setId_escuela( $data_table[$clave] ["id_escuela"] );
            $reputacion->setNota( $data_table[$clave] ["nota"] );
          }
          return $reputacion;
        }else{
          return null;
        }
      }

      public function insertReputacion(Reputacion $reputacion){

        $data_source = new DataSource();
        $sql = "INSERT INTO reputacion VALUES (        :id_reputacion,        :id_escuela,        :nota,)";
        $resultado = $data_source->ejecutarActualizacion($sql,array(
            ':id_reputacion'=>$id_reputacion->getId_reputacion(), 
            ':id_escuela'=>$id_escuela->getId_escuela(), 
            ':nota'=>$nota->getNota(), 
            )
        );
        return $resultado;
      }

      public function updateReputacion(Reputacion $reputacion){

        $data_source = new DataSource();
        $sql = "UPDATE reputacion SET 
                 id_reputacion = :id_reputacion,
                 id_escuela = :id_escuela,
                 nota = :nota,
                 WHERE idreputacion = :idreputacion                  ";
        $resultado = $data_source->ejecutarActualizacion($sql,array(
            ':id_reputacion'=>$id_reputacion->getId_reputacion(), 
            ':id_escuela'=>$id_escuela->getId_escuela(), 
            ':nota'=>$nota->getNota(), 
            )
        );
        return $resultado;
      }

      public function deleteReputacion($id){

        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM reputacion WHERE idreputacion = : idreputacion", array (':idreputacion'=>$id));
        return $resultado;
      }
   }

?>
