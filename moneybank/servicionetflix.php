<html>
<head>
	<title></title>
</head>
<meta http-equiv="Content-type" content="text/html; charset charset=UTF-8"/>
<link rel="stylesheet" href="css/netflix.css" type="text/css" />
<body>
	<body>


		<main>
			<table width="100%">
			<td width="33%">
				<form action="servicionetflix.php" method="post" accept-charset="UTF-8">
				<center><section  class="seciz" >
				<br>
				<h2>Basico</h2>

				<p>Per Month: <br> <strong>$139</strong></p>

				<p>Video Quality: <br> <strong>Buena</strong></p>
				<p>Resolution: <br> <strong> 480p </strong></p>
				<p>Mobile Devices You Can Download On: <br> <strong> 1 </strong></p>
				<p>Enjoy immersive sound with Dolby Atmos: <br> <strong> x </strong></p>
				<p>Watch Netflix on your TV, computer, cell phone and tablet: <br> <strong> √ </strong></p>
				<p>Unlimited movies and series: <br> <strong> √ </strong></p>
				<p>Cancel whenever you want: <br> <strong> √ </strong></p>


				<img src="https://occ-0-1068-92.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABZweDjPRmhKVYuxvbE8EYHuwG3cufEWGxxVfnBoHMARC8qawjvxtG_L1vvok6nob1KiinA34GTvZVMZ7s4RPBi-CDDRJU0FOh3DO.png?r=817" width="160px" height="68px">
				<br><br><br><br><br><br><br><br>
				<?php

				date_default_timezone_set('America/Mexico_city');
				$fecha_actual=date("Y-m-d H:i:s");
				session_start();
				?>
							<input type="datetime" name="fecha" value="<?= $fecha_actual?>" hidden="true">

							<input type="submit" name="ingresar" class="boton2" value="Alquilar"></input>
				<?php
				if(isset($_REQUEST['ingresar'])){
					include("config.php");
						$con=mysqli_connect($HOST,$USER,$PASS,$BD);
							$fecha=$_POST['fecha'];
								$consulta="INSERT into compras (precio,membresia,fecha,compañia_servicio,correo) values('139','Basico','$fecha','Netflix','$_SESSION[Correo]')";
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
			 	<form action="servicionetflix.php" method="post" accept-charset="UTF-8">
			 	<center><section  class="seccen" >
				<br>
				<h2>Estandar</h2>

				<p>Per Month: <br> <strong>$196</strong></p>

				<p>Video Quality: <br> <strong>Mejor</strong></p>
				<p>Resolution: <br> <strong> 1080p </strong></p>
				<p>Mobile Devices You Can Download On: <br> <strong> 2 </strong></p>
				<p>Enjoy immersive sound with Dolby Atmos: <br> <strong> x </strong></p>
				<p>Watch Netflix on your TV, computer, cell phone and tablet: <br> <strong> √ </strong></p>
				<p>Unlimited movies and series: <br> <strong> √ </strong></p>
				<p>Cancel whenever you want: <br> <strong> √ </strong></p>

				<img src="https://occ-0-1068-92.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABZweDjPRmhKVYuxvbE8EYHuwG3cufEWGxxVfnBoHMARC8qawjvxtG_L1vvok6nob1KiinA34GTvZVMZ7s4RPBi-CDDRJU0FOh3DO.png?r=817" width="160px" height="68px">
				<br><br><br><br><br><br><br><br>
				<input type="datetime" name="fecha" value="<?= $fecha_actual?>" hidden="true">
				<input type="submit" name="ingresar2"class="boton2" value="Alquilar" ></input>
				<?php
				if(isset($_REQUEST['ingresar2'])){
					include("config.php");
						$con=mysqli_connect($HOST,$USER,$PASS,$BD);
							$fecha=$_POST['fecha'];
								$consulta="INSERT into compras (precio,membresia,fecha,compañia_servicio,correo) values('196','Estandar','$fecha','Netflix','$_SESSION[Correo]')";
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
				<form action="servicionetflix.php" method="post" accept-charset="UTF-8">
			<center><section  class="secder" >
				<br>
				<h2>Premium</h2>

				<p>Per Month: <br> <strong>$266</strong></p>

				<p>Video Quality: <br> <strong>Optima</strong></p>
				<p>Resolution: <br> <strong> 4K+HDR </strong></p>
				<p>Mobile Devices You Can Download On: <br> <strong> 4 </strong></p>
				<p>Enjoy immersive sound with Dolby Atmos: <br> <strong> √ </strong></p>
				<p>Watch Netflix on your TV, computer, cell phone and tablet: <br> <strong> √ </strong></p>
				<p>Unlimited movies and series: <br> <strong> √ </strong></p>
				<p>Cancel whenever you want: <br> <strong> √ </strong></p>

				<img src="https://occ-0-1068-92.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABZweDjPRmhKVYuxvbE8EYHuwG3cufEWGxxVfnBoHMARC8qawjvxtG_L1vvok6nob1KiinA34GTvZVMZ7s4RPBi-CDDRJU0FOh3DO.png?r=817" width="160px" height="68px">
				<br><br><br><br><br><br><br><br>
				<input type="datetime" name="fecha" value="<?= $fecha_actual?>" hidden="true">
				<input type="submit" name="ingresar3"class="boton2" value="Alquilar" >
				<?php
				if(isset($_REQUEST['ingresar3'])){
					include("config.php");
						$con=mysqli_connect($HOST,$USER,$PASS,$BD);
							$fecha=$_POST['fecha'];
								$consulta="INSERT into compras (precio,membresia,fecha,compañia_servicio,correo) values('266','Premium','$fecha','Netflix','$_SESSION[Correo]')";
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
