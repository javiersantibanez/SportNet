<!DOCTYPE html>
<html>
  <head>
    <title>Buscador de escuelas</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">

<?php
	
	require('conexion.php');

	if(!empty($_POST))
  	{
    $nomEscuela = $_POST['nomEscuela'];
	$espe = $_POST['espe'];
	$comuna = $_POST['comuna'];
	$calle = $_POST['calle'];
	$numero = $_POST['numero'];
	$nota = $_POST['nota'];


    $error = '';

    $verificarExiste = "SELECT * FROM Escuela WHERE nombre = '$nomEscuela'";
    $resultado = mysqli_query($link,$verificarExiste);
    
    if($rows = $resultado->num_rows > 0) {
      $error = "El usuario ya existe";
      } else {
      

        $insertDirec = "INSERT INTO Direccion (region,ciudad,comuna,calle,numero) 
                        VALUES('Metropolitana','Santiago','$comuna','$calle',$numero)";
        $resultadoDirec = mysqli_query($link,$insertDirec);

        $conidDirec = "SELECT id_direccion FROM Direccion WHERE comuna = '$comuna' and calle = '$calle' and numero = $numero";
        $resultadoID = mysqli_query($link,$conidDirec);
        $row = $resultadoID->fetch_assoc();
        $idDirec = $row['id_direccion'];



        if($resultadoDirec > 0){
        

          $insertEsc = "INSERT INTO Escuela (nombre,id_direccion,id_especialidad) 
                        VALUES ('$nomEscuela',$idDirec,$espe)";

          $resultadoPer = mysqli_query($link,$insertEsc);

         
          $bandera = true;

        }else{
          $error = "Error registrar el nuevo usuario";
        }

  }
}

?>



	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
		

	<div>
	Nombre escuela<input type="text" name="nomEscuela" ><br>
	Especialidad<input type="text" name="espe" ><br>

	</div >	
	<br>
	<br>	

	Comuna<input type="text" name="comuna" ><br>
	calle<input type="text" name="calle" ><br>
	numero<input type="text" name="numero" ><br>
	nota<input type="text" name="nota" ><br>
	<br>
	<br>
	<input type="submit" value="enviar">


	<div>
		

	</div>


	</form>

	</head>
</html>