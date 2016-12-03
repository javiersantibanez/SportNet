<?php

require_once("Data/Interfaces/Lista_precioI.php");
require_once("Data/DataSource/DataSource.php");
require_once("Data/TransferObject/Lista_precioTO.php");

   class Lista_precioDAO implements Lista_precioI {

      public function selectLista_precio(){

        $data_source = new DataSource();
        $data_table  = $data_source->ejecutarConsulta("SELECT * FROM lista_precio");
        $lista_precio = null;
        $array_lista_precio = array();

          foreach ($data_table as $clave => $valor){
            $lista_precio = new lista_precio();
            $lista_precio->setTotal( $data_table[$clave] ["total"] );
            array_push($array_lista_precio , $lista_precio); 
          }
          return $array_lista_precio;
      }

      public function selectLista_precioById($id){

        $data_source = new DataSource();
        $data_table  = $data_source->ejecutarConsulta("SELECT * FROM lista_precio WHERE id_lista_precio = :id_lista_precio",array(':id_lista_precio'=>$id));
        $lista_precio = null;

        if (count($data_table) == 1){    
          foreach ($data_table as $clave => $valor){
            $lista_precio = new lista_precio();
            $lista_precio->setTotal( $data_table[$clave] ["total"] );
          }
          return $lista_precio;
        }else{
          return null;
        }
      }

      public function insertLista_precio(Lista_precio $lista_precio){

        $data_source = new DataSource();
        $sql = "INSERT INTO lista_precio VALUES (        :total,)";
        $resultado = $data_source->ejecutarActualizacion($sql,array(
            ':total'=>$total->getTotal(), 
            )
        );
        return $resultado;
      }

      public function updateLista_precio(Lista_precio $lista_precio){

        $data_source = new DataSource();
        $sql = "UPDATE lista_precio SET 
                 total = :total,
                 WHERE idlista_precio = :idlista_precio                  ";
        $resultado = $data_source->ejecutarActualizacion($sql,array(
            ':total'=>$total->getTotal(), 
            )
        );
        return $resultado;
      }

      public function deleteLista_precio($id){

        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM lista_precio WHERE idlista_precio = : idlista_precio", array (':idlista_precio'=>$id));
        return $resultado;
      }
   }

?>
