<?php
   class especialidad{
    private $id_especialidad;
    private $nombre;
    private $descripcion;
    private $valor_clase;

    function especialidad($id_especialidad,$nombre,$descripcion,$valor_clase){
       $this->setId_especialidad($id_especialidad);
       $this->setNombre($nombre);
       $this->setDescripcion($descripcion);
       $this->setValor_clase($valor_clase);
    }

    public function setId_especialidad($id_especialidad){
        $this->id_especialidad=$id_especialidad;
    }
    public function getId_especialidad(){
        return $this->id_especialidad;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setDescripcion($descripcion){
        $this->descripcion=$descripcion;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setValor_clase($valor_clase){
        $this->valor_clase=$valor_clase;
    }
    public function getValor_clase(){
        return $this->valor_clase;
    }
   }
?>
