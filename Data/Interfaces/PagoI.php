<?php
   interface PagoI{
      public function selectPago();
      public function selectPagoById($id);
      public function insertPago(Pago $pago);
      public function updatePago(Pago $pago);
      public function deletePago($id);
   }
?>
