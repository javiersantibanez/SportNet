<?php
   interface PersonaI{
      public function selectPersona();
      public function selectPersonaById($id);
      public function insertPersona(Persona $persona);
      public function updatePersona(Persona $persona);
      public function deletePersona($id);
   }
?>
