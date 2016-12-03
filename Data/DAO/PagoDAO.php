<?php

require_once("Data/Interfaces/PagoI.php");
require_once("Data/DataSource/DataSource.php");
require_once("Data/TransferObject/PagoTO.php");

   class PagoDAO implements PagoI {

      public function selectPago(){

        $data_source = new DataSource();
        $data_table  = $data_source->ejecutarConsulta("SELECT * FROM pago");
        $pago = null;
        $array_pago = array();

          foreach ($data_table as $clave => $valor){
            $pago = new pago();
            $pago->setMonto( $data_table[$clave] ["Monto"] );
            array_push($array_pago , $pago); 
          }
          return $array_pago;
      }

      public function selectPagoById($id){

        $data_source = new DataSource();
        $data_table  = $data_source->ejecutarConsulta("SELECT * FROM pago WHERE id_pago = :id_pago",array(':id_pago'=>$id));
        $pago = null;

        if (count($data_table) == 1){    
          foreach ($data_table as $clave => $valor){
            $pago = new pago();
            $pago->setMonto( $data_table[$clave] ["Monto"] );
          }
          return $pago;
        }else{
          return null;
        }
      }

      public function insertPago(Pago $pago){

        $data_source = new DataSource();
        $sql = "INSERT INTO pago VALUES (        :Monto,)";
        $resultado = $data_source->ejecutarActualizacion($sql,array(
            ':Monto'=>$Monto->getMonto(), 
            )
        );
        return $resultado;
      }

      public function updatePago(Pago $pago){

        $data_source = new DataSource();
        $sql = "UPDATE pago SET 
                 Monto = :Monto,
                 WHERE idpago = :idpago                  ";
        $resultado = $data_source->ejecutarActualizacion($sql,array(
            ':Monto'=>$Monto->getMonto(), 
            )
        );
        return $resultado;
      }

      public function deletePago($id){

        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM pago WHERE idpago = : idpago", array (':idpago'=>$id));
        return $resultado;
      }
   }

?>
