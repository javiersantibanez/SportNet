<?php

require_once("Data/Interfaces/PersonaI.php");
require_once("Data/DataSource/DataSource.php");
require_once("Data/TransferObject/PersonaTO.php");

   class PersonaDAO implements PersonaI {

      public function selectPersona(){

        $data_source = new DataSource();
        $data_table  = $data_source->ejecutarConsulta("SELECT * FROM persona");
        $persona = null;
        $array_persona = array();

          foreach ($data_table as $clave => $valor){
            $persona = new persona();
            $persona->setRut( $data_table[$clave] ["rut"] );
            $persona->setNombre( $data_table[$clave] ["nombre"] );
            $persona->setApellido( $data_table[$clave] ["apellido"] );
            $persona->setFechaNacimiento( $data_table[$clave] ["fechaNacimiento"] );
            $persona->setTelefono( $data_table[$clave] ["telefono"] );
            $persona->setId_direccion( $data_table[$clave] ["id_direccion"] );
            $persona->setEmail( $data_table[$clave] ["email"] );
            //$persona->setContraseña( $data_table[$clave] ["contraseña"] );
            array_push($array_persona , $persona); 
          }
          return $array_persona;
      }

      public function selectPersonaById($id){

        $data_source = new DataSource();
        $data_table  = $data_source->ejecutarConsulta("SELECT * FROM persona WHERE rut = :rut",array(':rut'=>$id));
        $persona = null;

        if (count($data_table) == 1){    
          foreach ($data_table as $clave => $valor){
            $persona = new persona();
            $persona->setRut( $data_table[$clave] ["rut"] );
            $persona->setNombre( $data_table[$clave] ["nombre"] );
            $persona->setApellido( $data_table[$clave] ["apellido"] );
            $persona->setFechaNacimiento( $data_table[$clave] ["fechaNacimiento"] );
            $persona->setTelefono( $data_table[$clave] ["telefono"] );
            $persona->setId_direccion( $data_table[$clave] ["id_direccion"] );
            $persona->setEmail( $data_table[$clave] ["email"] );
            $persona->setContraseña( $data_table[$clave] ["contraseña"] );
          }
          return $persona;
        }else{
          return null;
        }
      }

      public function insertPersona(Persona $persona){

        $data_source = new DataSource();
        $sql = "INSERT INTO persona VALUES (        :rut,        :nombre,        :apellido,        :fechaNacimiento,        :telefono,        :id_direccion,        :email,        :contraseña,)";
        $resultado = $data_source->ejecutarActualizacion($sql,array(
            ':rut'=>$rut->getRut(), 
            ':nombre'=>$nombre->getNombre(), 
            ':apellido'=>$apellido->getApellido(), 
            ':fechaNacimiento'=>$fechaNacimiento->getFechaNacimiento(), 
            ':telefono'=>$telefono->getTelefono(), 
            ':id_direccion'=>$id_direccion->getId_direccion(), 
            ':email'=>$email->getEmail(), 
            ':contraseña'=>$contraseña->getContraseña(), 
            )
        );
        return $resultado;
      }

      public function updatePersona(Persona $persona){

        $data_source = new DataSource();
        $sql = "UPDATE persona SET 
                 rut = :rut,
                 nombre = :nombre,
                 apellido = :apellido,
                 fechaNacimiento = :fechaNacimiento,
                 telefono = :telefono,
                 id_direccion = :id_direccion,
                 email = :email,
                 contraseña = :contraseña,
                 WHERE idpersona = :idpersona                  ";
        $resultado = $data_source->ejecutarActualizacion($sql,array(
            ':rut'=>$rut->getRut(), 
            ':nombre'=>$nombre->getNombre(), 
            ':apellido'=>$apellido->getApellido(), 
            ':fechaNacimiento'=>$fechaNacimiento->getFechaNacimiento(), 
            ':telefono'=>$telefono->getTelefono(), 
            ':id_direccion'=>$id_direccion->getId_direccion(), 
            ':email'=>$email->getEmail(), 
            ':contraseña'=>$contraseña->getContraseña(), 
            )
        );
        return $resultado;
      }

      public function deletePersona($id){

        $data_source = new DataSource();
        $resultado = $data_source->ejecutarActualizacion("DELETE FROM persona WHERE idpersona = : idpersona", array (':idpersona'=>$id));
        return $resultado;
      }
   }

?>
