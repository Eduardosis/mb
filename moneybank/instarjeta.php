<html>
	<head>

	</head>
		<body>
<?php

			$tarjeta2 = $_POST['tarjeta2'];
			$CVV2 = $_POST['CVV2'];
			include("config.php");
			session_start();
			$con2=mysqli_connect($HOST,$USER,$PASS,$BD);
				if ($con2){
						$bd2=mysqli_select_db($con2,$BD);
						if($bd2){
							echo "ya estas en la bd";
					$Itarjeta="insert into tarjeta (numtarjeta, cvv, Dinero, correo) values ('$tarjeta2','$CVV2','10000','$_SESSION[Correo]');";
				}

			mysqli_query($con2,$Itarjeta);
						echo "<script>
						alert('registrado');
						window.location = 'usuario.php';
						</script>";
					}
						

				else{
					echo "error con la conexion";
				}

				die();
			?>
		</body>
</html>