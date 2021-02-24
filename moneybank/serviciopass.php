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
				<form action="serviciopass.php" method="post" accept-charset="UTF-8">
				<center><section  class="seciz" >
				<br>
				<h2>Ultimate</h2>
				
				<h3>Consigue los tres primeros meses por $10, luego $229 por mes* (Este producto se puede utilizar en PC y consola)</h3>
				
				<p>Acceso a más de 100 juegos de alta calidad para consola y PC</p>
				<p>Nuevos juegos agregados constantemente</p>
				<p>Títulos de Xbox Game Studios el mismo día de su lanzamiento</p>
				<p>Descuentos y ofertas exclusivas para miembros</p>
				<p>Ventajas gratuitas, como contenido en el juego y ofertas de socios</p>
				
				<br><br><br>
				<?php

						date_default_timezone_set('America/Mexico_city');
						$fecha_actual=date("Y-m-d H:i:s");
						session_start();
				?>
							<input type="datetime" name="fecha" value="<?= $fecha_actual?>" hidden="true">

							<input type="submit" name="ingresar" class="boton3" value="Alquilar"></input>
									<?php
						if(isset($_REQUEST['ingresar'])){
							include("config.php");
								$con=mysqli_connect($HOST,$USER,$PASS,$BD);
									$fecha=$_POST['fecha'];
										$consulta="INSERT into compras (precio,membresia,fecha,compañia_servicio,correo) values('299','Ultimate','$fecha','GeForce','$_SESSION[Correo]')";
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
			 	<form action="serviciopass.php" method="post" accept-charset="UTF-8">
			 	<center><section  class="seccen" >
				<br>
				<h2>PC</h2>
				<h2>Consigue tu primer mes por $10, luego como estándar por$149 por mes*</h2>
				<p>Acceso a más de 100 juegos de alta calidad para PC</p>
				
				<p>Nuevos juegos agregados constantemente</p>
				<p>Títulos de Xbox Game Studios el mismo día de su lanzamiento</p>
				<p>Descuentos y ofertas para miembros</p>
				
				<br><br><br><br><br>
							<input type="datetime" name="fecha" value="<?= $fecha_actual?>" hidden="true">

							<input type="submit" name="ingresar2" class="boton3" value="Alquilar"></input>
									<?php
						if(isset($_REQUEST['ingresar2'])){
							include("config.php");
								$con=mysqli_connect($HOST,$USER,$PASS,$BD);
									$fecha=$_POST['fecha'];
										$consulta="INSERT into compras (precio,membresia,fecha,compañia_servicio,correo) values('149','PC','$fecha','GeForce','$_SESSION[Correo]')";
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
				<form action="serviciopass.php" method="post" accept-charset="UTF-8">
			<center><section  class="secder" >
				<br>
				<h2>Consola</h2>
				
				<p>Acceso a más de 100 juegos de alta calidad para consola</p>
				
				<p>Nuevos juegos agregados constantemente</p>
				<p>Títulos de Xbox Game Studios el mismo día de su lanzamiento</p>
				<p>Descuentos y ofertas para miembros</p>
				
				<br><br><br><br><br><br><br><br><br><br><br><br>
							<input type="datetime" name="fecha" value="<?= $fecha_actual?>" hidden="true">

							<input type="submit" name="ingresar3" class="boton3" value="Alquilar"></input>
									<?php
						if(isset($_REQUEST['ingresar3'])){
							include("config.php");
								$con=mysqli_connect($HOST,$USER,$PASS,$BD);
									$fecha=$_POST['fecha'];
										$consulta="INSERT into compras (precio,membresia,fecha,compañia_servicio,correo) values('149','Consola','$fecha','GeForce','$_SESSION[Correo]')";
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
