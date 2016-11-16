<!DOCTYPE html>
<html>
<head>
	<title>
		

	</title>
</head>
<body>




<?php 



    $html = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?origins=Santa+Isabel+6150+cerro+navia&destinations=Nueva+Extremadura+5270+Quinta+Normal&mode=driving&language=es-ES&key=AIzaSyBb1wFH0HCVnnBa0xIA5vP2HZtKrjnya1w");

    $json = json_decode($html,true);

    print_r($json);


    echo '<br>';

    $distancia = $json['rows'][0]['elements'][0]['distance']['value'];

   

    echo 'la distancia es '.$distancia;




?>
</body>
</html>