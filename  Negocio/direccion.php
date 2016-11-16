<?php 

class Direccion{

	var $id_direccion;
	var $region;
	var $ciudad;
	var $comuna;
	var $calle;
	var $numero;
	var $depto;


	public function getID(){
		return $this->$id_direccion;
	}

	public function getRegion(){
		return $this->$region;
	}

	public function getCiudad(){
		return $this->$ciudad;
	}
	
	public function getComuna(){
		return $this->$comuna;
	}

	public function getCalle(){
		return $this->$calle;
	}

	public function getNumero(){
		return $this->$numero;
	}

	public function getDepto(){
		return $this->$depto;
	}

	public function setID($valor){
		$this->id_direccion =$valor; 
	}

	public function setRegion($valor){
		$this->nombre =$valor; 
	}	

	public function setCiudad($valor){
		$this->ciudad =$valor; 
	}

	public function setComuna($valor){
		$this->comuna =$valor; 
	}

	public function setCalle($valor){
		$this->calle =$valor; 
	}

	public function setNumero($valor){
		$this->numero =$valor; 
	}

	public function setDepto($valor){
		$this->depto =$valor; 
	}



}




?>