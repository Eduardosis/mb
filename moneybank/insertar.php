<html>
<head>

</head>
<body>
<?php

echo "antes de insertar";
echo "<br>";
$vnombre = $_POST['nombre'];
$vape_pat = $_POST['ape_pat'];
$vape_mat = $_POST['ape_mat'];
$vcorreo = $_POST['correo'];
$vcontra = $_POST['contra'];

include("config.php");
$con=mysqli_connect($HOST,$USER,$PASS,$BD);
	if ($con){
			$bd=mysqli_select_db($con,$BD);
			if($bd){
				echo "ya estas en la bd";
		$Iregistro="insert into registro (correo, contraseña, nombre, appat, apmat, numtarjeta, cvv) 
		values ('$vcorreo','$vcontra','$vnombre','$vape_pat','$vape_mat','null','null');";
	}

mysqli_query($con,$Iregistro);
			echo "<script>
			alert('registrado');
			window.location = 'index.html';
			</script>";
		}
			

	else{
		echo "error con la conexion";
	}

	die();
?>
</body>
</html>