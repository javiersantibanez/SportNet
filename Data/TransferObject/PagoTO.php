<?php
   class pago{
    private $Monto;


    public function setMonto($Monto){
        $this->Monto=$Monto;
    }
    public function getMonto(){
        return $this->Monto;
    }
   }
?>
