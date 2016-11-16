<?php

require_once ($_SERVER['DOCUMENT_ROOT']."/SportNetv1.0/DAO/direccionDAO.php");


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$direcc = new direccionDAO();
$escuela = new escuelaDAO();

$resultado = $direcc->selectDireccionID(1);






?>

</body>
</html>