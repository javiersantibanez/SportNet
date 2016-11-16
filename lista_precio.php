<?php
   class lista_precio{
    private $total;

    function lista_precio($total){
       $this->setTotal($total);
    }

    public function setTotal($total){
        $this->total=$total;
    }
    public function getTotal(){
        return $this->total;
    }
   }
?>
