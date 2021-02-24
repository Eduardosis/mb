<?php
	$conexion = mysqli_connect('localhost','root','','moneybank');
?>
<html>
<head>
	<title></title>
</head>
<meta http-equiv="Content-type" content="text/html; charset charset=UTF-8"/>
<link rel="stylesheet" href="css/css.css" type="text/css" />
<body>
	<body>
		<table class="nav2">
		<tr>
		<td width="14%"><a href="usuario.html">Resumen</a></td>
		<td width="14%"><a href="movimientos.html">Movimientos</a></td>
		<td width="14%"><a href="servicios.html">Pagar servicios</a></td>
		<td width="14%"><a href="#">Cartera</a></td>
		<td width="14%"><a href="index.html">Cerrar sesion</a></td>
		</tr>	
		</table>
	
	
		<?php
		include ("config.php");
			$sql = "SELECT * FROM tarjeta";
				$result = mysqli_query($conexion,$sql)

		while($mostrar=mysqli_fetch_array($result)){
		?>
		
				<main class="usmain">
					<section class="ussec">
						<div><?php echo $mostrar ['numtarjeta'] ?></div> <br>
						<div><?php echo $mostrar ['cvv'] ?></div> <br>
						<div><?php echo $mostrar ['Dinero'] ?></div>
						</section>

			<?php
		}

			?>
		
		
	</main>

</body>
</html>