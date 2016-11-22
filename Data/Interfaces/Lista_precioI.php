<?php
   interface Lista_precioI{
      public function selectLista_precio();
      public function selectLista_precioById($id);
      public function insertLista_precio(Lista_precio $lista_precio);
      public function updateLista_precio(Lista_precio $lista_precio);
      public function deleteLista_precio($id);
   }
?>
