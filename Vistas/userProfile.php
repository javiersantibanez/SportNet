<?php
	
	session_start();
	
	require 'conexion.php';
	
	if(!isset($_SESSION["id_usuario"])){
		header("Location: login.php");
	}
	
	$idUsuario = $_SESSION['id_usuario'];
	
	$consulta = "SELECT * FROM Persona WHERE email = '$idUsuario'";
	$resultado = mysqli_query($link,$consulta);
	
	$row = $resultado->fetch_assoc();
?>


<!DOCTYPE html>
<html>
<head>
	<title>SportNet - Ingresar / Registrar </title>
 	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style2.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700" rel="stylesheet" />
    
   
</head>



<body>
	<header class="main-header">
	         <div class="container">
	            <div class="header-content">
	               <a href="index.html">
	                  <img src="" alt="" />
	               </a>

	               <nav class="site-nav">
	                  <ul class="clean-list site-links">
	                     <li>
	                        <a href="index.php">Inicio</a>
	                     </li>
	                     <li>
	                        <a href="#">Escuelas</a>
	                     </li>
	                     <li>
	                        <a href="#">Añade Tu Escuela</a>
	                     </li>
	                  </ul>

	                  <a href="#" class="btn btn-outlined"><?php echo 'Bienvenido '.$row['nombre'];?></a>
	               </nav>
	            </div>
	         </div>
	</header>




	<div class="userprofile" >
	    <div class="row profile">
			<div class="col-md-2">
				<div class="profile-sidebar">
					<!-- SIDEBAR USERPIC -->
					<div class="profile-userpic">
						<img src="img/profile2.png" class="img-responsive" alt="Responsive image">
					</div>
					<!-- END SIDEBAR USERPIC -->
					<!-- SIDEBAR USER TITLE -->
					<div class="profile-usertitle">
						<div class="profile-usertitle-name">
							<?php echo $row['nombre'];?>
						</div>
						<div class="profile-usertitle-job">
							<?php echo $row['apellido'];?>
						</div>
					</div>
					<!-- END SIDEBAR USER TITLE -->
					<!-- SIDEBAR BUTTONS -->
					<div class="profile-userbuttons">
						
						<a href="logout.php" target="_self"><button  type="button" class="btn btn2 btn-danger btn-sm">Cerrar Sesión</button>
					</div>
					<!-- END SIDEBAR BUTTONS -->
					<!-- SIDEBAR MENU -->
					<div class="profile-usermenu">
						<ul class="nav">
							<li class="active">
								<a href="#resumen">
								<i class="glyphicon glyphicon-home"></i>
								Resumen </a>
							</li>
							<li>
								<a href="#ajustes">
								<i class="glyphicon glyphicon-user"></i>
								Ajustes del perfil </a>
							</li>
						
							<li>
								<a href="#ayuda">
								<i class="glyphicon glyphicon-flag"></i>
								Ayuda </a>
							</li>
						</ul>
					</div>
					<!-- END MENU -->
				</div>
			</div>
			<div class="col-md-9">
	            <div class="profile-content">
				   <h1>Aqui ira el detalle de cada seccion</h1>
	            </div>
			</div>
		</div>
	</div>





	<center>
	<strong>Desarrollado por SportLabs</a></strong>
	</center>
	<br>
	<br>

</body>
</html>

