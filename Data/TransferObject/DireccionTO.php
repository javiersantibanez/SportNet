<?php
   class direccion{
    private $id_direccion;
    private $region;
    private $ciudad;
    private $comuna;
    private $calle;
    private $numero;
    private $depto;


    public function setId_direccion($id_direccion){
        $this->id_direccion=$id_direccion;
    }
    public function getId_direccion(){
        return $this->id_direccion;
    }
    public function setRegion($region){
        $this->region=$region;
    }
    public function getRegion(){
        return $this->region;
    }
    public function setCiudad($ciudad){
        $this->ciudad=$ciudad;
    }
    public function getCiudad(){
        return $this->ciudad;
    }
    public function setComuna($comuna){
        $this->comuna=$comuna;
    }
    public function getComuna(){
        return $this->comuna;
    }
    public function setCalle($calle){
        $this->calle=$calle;
    }
    public function getCalle(){
        return $this->calle;
    }
    public function setNumero($numero){
        $this->numero=$numero;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function setDepto($depto){
        $this->depto=$depto;
    }
    public function getDepto(){
        return $this->depto;
    }
   }
?>
