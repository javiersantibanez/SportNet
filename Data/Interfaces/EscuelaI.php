<?php
   interface EscuelaI{
      public function selectEscuela();
      public function selectEscuelaById($id);
      public function insertEscuela(Escuela $escuela);
      public function updateEscuela(Escuela $escuela);
      public function deleteEscuela($id);
   }
?>
