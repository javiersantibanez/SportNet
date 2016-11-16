<?php
   class reputacion{
    private $id_reputacion;
    private $id_escuela;
    private $nota;

    function reputacion($id_reputacion,$id_escuela,$nota){
       $this->setId_reputacion($id_reputacion);
       $this->setId_escuela($id_escuela);
       $this->setNota($nota);
    }

    public function setId_reputacion($id_reputacion){
        $this->id_reputacion=$id_reputacion;
    }
    public function getId_reputacion(){
        return $this->id_reputacion;
    }
    public function setId_escuela($id_escuela){
        $this->id_escuela=$id_escuela;
    }
    public function getId_escuela(){
        return $this->id_escuela;
    }
    public function setNota($nota){
        $this->nota=$nota;
    }
    public function getNota(){
        return $this->nota;
    }
   }
?>
