<?php
   class escuela{
    private $id_escuela;
    private $nombre;
    private $id_direccion;
    private $id_especialidad;

    

    public function setId_escuela($id_escuela){
        $this->id_escuela=$id_escuela;
    }
    public function getId_escuela(){
        return $this->id_escuela;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setId_direccion($id_direccion){
        $this->id_direccion=$id_direccion;
    }
    public function getId_direccion(){
        return $this->id_direccion;
    }
    public function setId_especialidad($id_especialidad){
        $this->id_especialidad=$id_especialidad;
    }
    public function getId_especialidad(){
        return $this->id_especialidad;
    }
   }
?>
