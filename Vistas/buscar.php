   <?php

     

      function buscar(){

      $espe = $_POST['espe'];

      require('conexion.php');
      

      $consulta ="SELECT Escuela.nombre,Escuela.id_direccion,Escuela.id_reputacion,Escuela.id_especialidad FROM Escuela INNER JOIN Especialidad on Escuela.id_especialidad = Especialidad.id_especialidad WHERE Especialidad.nombre = '$espe' ";

      $resultado = mysqli_query($link,$consulta);

      $numero_filas = $resultado->num_rows;

      $i = 1;
     
      
      while ($fila = mysqli_fetch_array($resultado)){
       
        $nombre = $fila['nombre'];
        $direccion = $fila['id_direccion'];
        $consulta2= "SELECT calle,numero,comuna FROM Direccion WHERE id_direccion= $direccion";
        $resultado2= mysqli_query($link,$consulta2);


        if($row = $resultado->num_rows >0){

          $row = mysqli_fetch_array($resultado2);
          $direcc = $row['calle'];
          $direcc .= $row['numero'];
          $direcc .= ' ';
          $direcc .= $row['comuna'];
        }
        //esto busca las lat y log segun la direc
        $aux= urlencode($direcc);
         
        //Buscamos la direccion en el servicio de google
        $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$aux.'&sensor=false');
         
         //decodificamos lo que devuelve google, que esta en formato json
        $output= json_decode($geocode);
         
        //Extraemos la informacion que nos interesa
        $lat = $output->results[0]->geometry->location->lat;
        $long = $output->results[0]->geometry->location->lng;

    

        $lista[$i][0]=$nombre;
        $lista[$i][1]=$lat;
        $lista[$i][2]=$long;
        

        $i++;


      }

      return $lista;
    
      
    }

  
    ?>
   