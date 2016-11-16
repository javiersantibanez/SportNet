<?php 

  require('conexion.php');

  session_start();

  if(isset($_SESSION["id_usuario"])){
      header("Location: userProfile.php");
    }

  if(!empty($_POST))
	{
  $email = $_POST['email'];
  $contrasena = $_REQUEST['contrasena'];

  $sha1_pass = sha1($contrasena);


  $consulta = "SELECT email, contraseña FROM Persona WHERE email='$email' AND contraseña = '$sha1_pass' ";

  $resultado = mysqli_query($link,$consulta);

    if($row = $resultado->num_rows >0){

      $row = $resultado->fetch_assoc();
      $_SESSION['id_usuario'] = $row['email'];
      
      header("location: userProfile.php");

    }
    else {
        $error = "El email o contraseña son incorrectos";
    }
   }

?>



<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Ingresar / Registrar </title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">

    
        <link rel="stylesheet" href="css/style.css">

  </head>


  <body>

    <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#login">Ingresar</a></li>
        <li class="tab "><a href="#registro">Registrar</a></li>
        
      </ul>
      
      <div class="tab-content">
        
        <div id="login">   
          <h1>Bienvenido</h1>
          
          <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          
            <div class="field-wrap">
            <label>
              Correo Electronico<span class="req">*</span>
            </label>
            <input name = "email" type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input name="contrasena" type="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Olvidaste tu contraseña?</a></p>
          
          <input name="login" type="submit" class="button button-block" value="Ingresar">
          
          </form>

        </div>
        <br/>
        <div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? $error : '' ; ?></div> 




<!-- REGISTRO -->

<?php
  
  session_start();
  require 'conexion.php';
  
  if(isset($_SESSION["id_usuario"])){
    header("Location: index.php");
  }
  
  $bandera = false;
  
  if(!empty($_POST))
  {
    $rut = $_POST['rut'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fnacimiento = $_POST['fnacimiento'];
    $telefono = $_POST['telefono'];
    $region = $_POST['region'];
    $ciudad = $_POST['ciudad'];
    $comuna = $_POST['comuna'];
    $calle = $_POST['calle'];
    $numero = $_POST['numero'];
    $depto = $_POST['depto'];
    $email2 = $_POST['email2'];
    $contrasena2 = $_REQUEST['contrasena2'];
    $sha1_pass2 = sha1($contrasena2);

    $error = '';

    $verificarExiste = "SELECT rut FROM Persona WHERE rut = '$rut'";
    $resultado = mysqli_query($link,$verificarExiste);
    
    if($rows = $resultado->num_rows > 0) {
      $error = "El usuario ya existe";
      } else {

        

        $insertDirec = "INSERT INTO Direccion (region,ciudad,comuna,calle,numero,depto) 
                        VALUES('$region','$ciudad','$comuna','$calle',$numero,'$depto')";
        $resultadoDirec = mysqli_query($link,$insertDirec);

        

        if($resultadoDirec > 0){
        

          $insertPer = "INSERT INTO Persona (rut,nombre,apellido,fechaNacimiento,telefono,email,contraseña) 
                        VALUES ('$rut','$nombre','$apellido','$fnacimiento',$telefono,'$email2','$sha1_pass2')";

          $resultadoPer = mysqli_query($link,$insertPer);

         
          $bandera = true;

        }else{
          $error = "Error registrar el nuevo usuario";
        }

  }
}

?>


        <div id="registro">   
         
          
         <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          
          <div class="field-wrap">
              <label>
                Rut (sin guión)<span class="req">*</span>
              </label>
              <input name="rut" type="text" required autocomplete="off"/>
          </div>

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Nombre<span class="req">*</span>
              </label>
              <input name="nombre" type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Apellido<span class="req">*</span>
              </label>
              <input name="apellido" type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="top-row">
            <div class="field-wrap">
              <label>
                <span class="req"></span>
              </label>
              <input name="fnacimiento" type="date" required autocomplete="off" value="<?php echo date("Y-m-d");?>" />
            </div>
        
            <div class="field-wrap">
              <label>
                Telefono<span class="req">*</span>
              </label>
              <input name="telefono" type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Región<span class="req">*</span>
              </label>
              <input name="region" type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Ciudad<span class="req">*</span>
              </label>
              <input name="ciudad" type="text" required autocomplete="off"/>
            </div>
          </div>

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Comuna<span class="req">*</span>
              </label>
              <input name="comuna" type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Calle<span class="req">*</span>
              </label>
              <input name="calle" type="text" required autocomplete="off"/>
            </div>
          </div>

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Número<span class="req">*</span>
              </label>
              <input name="numero" type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Depto<span class="req"></span>
              </label>
              <input name="depto" type="text"  autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Correo Electronico<span class="req">*</span>
            </label>
            <input name="email2" type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Contraseña<span class="req">*</span>
            </label>
            <input name="contrasena2" type="password" required autocomplete="off"/>
          </div>
          
          <button name="registro" type="submit" class="button button-block"/>Registrarme</button>
          
          </form>

            <?php if($bandera) { ?>
              <h1>Registro exitoso</h1>
              
              
              <?php }else{ ?>
              <br />
              <div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>
        
            <?php } ?>

        </div>
        
      </div><!-- tab-content -->



</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
  </body>
</html>
