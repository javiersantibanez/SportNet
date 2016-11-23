<?php
   interface DireccionI{
      public function selectDireccion();
      public function selectDireccionById($id);
      public function insertDireccion(Direccion $direccion);
      public function updateDireccion(Direccion $direccion);
      public function deleteDireccion($id);
   }
?>
