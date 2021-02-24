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
				<form action="serviciortx.php" method="post" accept-charset="UTF-8">
				<center><section  class="seciz" >
				<br>
				<h2>4.99</h2>
				
				<p>Per Month</p>
				
				<p>Priority Access</p>
				<p>Extended Session lenght</p>
				<p>RTX ON</p>
				<img src="https://www.nvidia.com/content/dam/en-zz/Solutions/gfn/webassets/memberships/icon-nvidia-rtx-d.png">
				<br><br><br><br><br><br><br><br>
				<?php

						date_default_timezone_set('America/Mexico_city');
						$fecha_actual=date("Y-m-d H:i:s");
						session_start();
						include("config.php");
				?>
							<input type="datetime" name="fecha" value="<?= $fecha_actual?>" hidden="true">

							<input type="submit" name="ingresar" class="boton2" value="Alquilar"></input>
									<?php
						if(isset($_REQUEST['ingresar'])){
							
							
								$con=mysqli_connect($HOST,$USER,$PASS,$BD);
									$fecha=$_POST['fecha'];
										$consulta="INSERT into compras (precio,membresia,fecha,compañia_servicio,correo) values('4.99','Mensual','$fecha','GeForce','$_SESSION[Correo]')";
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
			</td>
			
			 <td width="33%">
			 	<form action="serviciortx.php" method="post" accept-charset="UTF-8">
			 	<center><section  class="seccen" >
				<br>
				<h2>24.99</h2>
				
				<p>For 6 Months</p>
				
				<p>Priority Access</p>
				<p>Extended Session lenght</p>
				<p>RTX ON</p>
				<img src="https://www.nvidia.com/content/dam/en-zz/Solutions/gfn/webassets/memberships/icon-nvidia-rtx-d.png">
				<br><br><br><br><br><br><br><br>

							<input type="datetime" name="fecha" value="<?= $fecha_actual?>" hidden="true">

							<input type="submit" name="ingresar2" class="boton2" value="Alquilar"></input>
									<?php
						if(isset($_REQUEST['ingresar2'])){
							include("config.php");
								$con=mysqli_connect($HOST,$USER,$PASS,$BD);
									$fecha=$_POST['fecha'];
										$consulta="INSERT into compras (precio,membresia,fecha,compañia_servicio,correo) values('24.99','semestral','$fecha','GeForce','$_SESSION[Correo]')";
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
				<form action="serviciortx.php" method="post" accept-charset="UTF-8">
			<center><section  class="secder" >
				<br>
				<h2>99.99</h2>
				
				<p>For 1 year</p>
				
				<p>Priority Access</p>
				<p>Extended Session lenght</p>
				<p>RTX ON</p>
				<img src="https://www.nvidia.com/content/dam/en-zz/Solutions/gfn/webassets/memberships/icon-nvidia-rtx-d.png">
				<br><br><br><br><br><br><br><br>
							<input type="datetime" name="fecha" value="<?= $fecha_actual?>" hidden="true">

							<input type="submit" name="ingresar3" class="boton2" value="Alquilar"></input>
									<?php
						if(isset($_REQUEST['ingresar3'])){
							include("config.php");
								$con=mysqli_connect($HOST,$USER,$PASS,$BD);
									$fecha=$_POST['fecha'];
										$consulta="INSERT into compras (precio,membresia,fecha,compañia_servicio,correo) values('99.99','anual','$fecha','GeForce','$_SESSION[Correo]')";
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
