<?php
   interface EspecialidadI{
      public function selectEspecialidad();
      public function selectEspecialidadById($id);
      public function insertEspecialidad(Especialidad $especialidad);
      public function updateEspecialidad(Especialidad $especialidad);
      public function deleteEspecialidad($id);
   }
?>
