<html>
<head>
	<title></title>
</head>
<meta http-equiv="Content-type" content="text/html; charset charset=UTF-8"/>
<link rel="stylesheet" href="css/css.css" type="text/css" />
<body>
	<body>
		

		<main>
			<table width="100%">
			<td width="33%">
				<form action="spotify.php" method="post" accept-charset="UTF-8">
				<center><section  class="seciz" >
				<br>
				<h2>Individual</h2>
				
				<p>Individual
					Después de la prueba, solo $ 115.00 al mes</p>
					<p>1 cuenta</p>
				
				<p>Escucha música sin anuncios</p>
				<p>Reproduce tus canciones en cualquier lugar, incluso sin conexión</p>
				<p>Reproducción on-demand</p>
				<p>Usa la opción prepaga o suscríbete</p>
				<br><br><br><br><br><br><br><br>
						<?php

						date_default_timezone_set('America/Mexico_city');
						$fecha_actual=date("Y-m-d H:i:s");
						session_start();
						?>
							<input type="datetime" name="fecha" value="<?= $fecha_actual?>" hidden="true">

							<input type="submit" name="ingresar" class="botonspt" value="Comenzar"></input>
									<?php
						if(isset($_REQUEST['ingresar'])){
							include("config.php");
								$con=mysqli_connect($HOST,$USER,$PASS,$BD);
									$fecha=$_POST['fecha'];
										$consulta="INSERT into compras (precio,membresia,fecha,compañia_servicio,correo) values('115','Individual','$fecha','Spotify','$_SESSION[Correo]')";
											$ejecutar=mysqli_query($con,$consulta);

									if ($ejecutar){
										echo '<script> alert("pago realizado correctamente")</script>';
									}
										else{
											echo '<script> alert("Error")</script>';
										}
						}
						?>
			</section>
				</center>
			</form>
			</td>

			 <td width="33%">
			 	<form action="spotify.php" method="post" accept-charset="UTF-8">
			 	<center><section  class="seccen" >
				<br>
				<h2>Duo</h2>
				
				<p>Después de la prueba, solo $ 149.00 al mes</p>
					<p>2 cuentas</p>
				
				<p>2 cuentas Premium para parejas que viven juntas</p>
				<p>Duo Mix: una playlist para dos, actualizada</p>
				<p>periódicamente con la música que más les gusta</p>
				<br><br><br><br><br><br><br><br>
							<input type="datetime" name="fecha" value="<?= $fecha_actual?>" hidden="true">

							<input type="submit" name="ingresar2" class="botonspt" value="Comenzar"></input>
							<?php
						if(isset($_REQUEST['ingresar2'])){
							include("config.php");
								$con=mysqli_connect($HOST,$USER,$PASS,$BD);
									$fecha=$_POST['fecha'];
										$consulta="INSERT into compras (precio,membresia,fecha,compañia_servicio,correo) values('149','Duo','$fecha','Spotify','$_SESSION[Correo]')";
											$ejecutar=mysqli_query($con,$consulta);

									if ($ejecutar){
										echo '<script> alert("pago realizado correctamente")</script>';
									}
										else{
											echo '<script> alert("Error")</script>';
										}
						}
						?>
				</center>
			</section>
		</form>
			</td>

			<td width="33%">
				<form action="spotify.php" method="post" accept-charset="UTF-8">
			<center><section  class="secder" >
				<br>
				<h2>Familiar</h2>
				
				<p>Después de la prueba, solo $ 179.00 al mes</p>
					<p>Hasta 6 cuentas</p>
				
				<p>6 cuentas Premium para familias que viven juntas</p>
				<p>Family Mix: una playlist para tu familia, actualizada periódicamente con la música que más les gusta</p>
				<p>Bloquea la música explícita</p>
				<p>Reproducción de música sin anuncios, sin conexión y on-demand</p>
				<p>Usa la opción prepaga o suscríbete</p>
				<br><br><br>
							<input type="datetime" name="fecha" value="<?= $fecha_actual?>" hidden="true">

							<input type="submit" name="ingresar3" class="botonspt" value="Comenzar"></input>
							<?php
						if(isset($_REQUEST['ingresar3'])){
							include("config.php");
								$con=mysqli_connect($HOST,$USER,$PASS,$BD);
									$fecha=$_POST['fecha'];
										$consulta="INSERT into compras (precio,membresia,fecha,compañia_servicio,correo) values('179','Familiar','$fecha','Spotify','$_SESSION[Correo]')";
											$ejecutar=mysqli_query($con,$consulta);

									if ($ejecutar){
										echo '<script> alert("pago realizado correctamente")</script>';
									}
										else{
											echo '<script> alert("Error")</script>';
										}
						}
						?>
			</section>
				</center>
			</form>
			</td>
			</table>
		</main>

</body>
</body>
</html>
