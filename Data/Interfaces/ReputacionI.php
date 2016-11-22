<?php
   interface ReputacionI{
      public function selectReputacion();
      public function selectReputacionById($id);
      public function insertReputacion(Reputacion $reputacion);
      public function updateReputacion(Reputacion $reputacion);
      public function deleteReputacion($id);
   }
?>
