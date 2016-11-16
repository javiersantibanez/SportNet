<?php
   class pago{
    private $Monto;

    function pago($Monto){
       $this->setMonto($Monto);
    }

    public function setMonto($Monto){
        $this->Monto=$Monto;
    }
    public function getMonto(){
        return $this->Monto;
    }
   }
?>
