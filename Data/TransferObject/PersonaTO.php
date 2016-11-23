<?php
   class persona{
    private $rut;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $telefono;
    private $id_direccion;
    private $email;
    private $contraseña;


    public function setRut($rut){
        $this->rut=$rut;
    }
    public function getRut(){
        return $this->rut;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setFechaNacimiento($fechaNacimiento){
        $this->fechaNacimiento=$fechaNacimiento;
    }
    public function getFechaNacimiento(){
        return $this->fechaNacimiento;
    }
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function setId_direccion($id_direccion){
        $this->id_direccion=$id_direccion;
    }
    public function getId_direccion(){
        return $this->id_direccion;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setContraseña($contraseña){
        $this->contraseña=$contraseña;
    }
    public function getContraseña(){
        return $this->contraseña;
    }
   }
?>
