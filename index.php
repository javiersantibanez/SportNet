<?php

require 'DAO/DAOdireccion.php';







?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php

$dao = new DAOdireccion();

$resultado = $dao->selectDireccionID(1);


print_r ($resultado);


?>

</body>
</html>