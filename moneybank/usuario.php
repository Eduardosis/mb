<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="css/css.css" type="text/css" />
<body>
	<body>
		<table class="nav2">
		<tr>
		<td width="14%"><a href="#">Resumen</a></td>
		<td width="14%"><a href="servicios.html">Pagar servicios</a></td>
		<td width="14%"><a href="tarjeta.html">Tarjeta</a></td>
		<td width="14%"><a href="logout.php">Cerrar sesion</a></td>
		</tr>	
		</table>
	
	<main class="usmain">
		<section class="ussec">
		<?php
		include("config.php");
		session_start();
		$Qtarjeta="select numtarjeta,cvv,Dinero,correo from tarjeta where correo='".$_SESSION['Correo']."';";
		$conexion1= new mysqli($HOST,$USER,$PASS,$BD) or die("error al conectar".$conexion1->error);
		if ($conexion1)
		{
				$consulta1=mysqli_query($conexion1,$Qtarjeta);
				if ($consulta1){
				//echo"consulta correcta";
					while($fila1=mysqli_fetch_assoc($consulta1)){
						$arreglo1[]=$fila1;
					}
					echo '<table>';
						echo "<tr>";
						echo "<td>";
						echo "Numero de Tarjeta";
						echo "</td>";
						echo "<td>";
						echo "Dinero";
						echo "</td>";
						echo "</tr>";
				
					foreach($arreglo1 as $elemento1){
						
						echo "<tr>";
						echo'<td width="10%">';
						echo "{$elemento1['numtarjeta']}";
						echo'</td>';
						echo'<td width="10%">';
						echo "{$elemento1['Dinero']}";
						echo'</td>';
						echo "</tr>";
					}
					
					echo "</table>";
					}//cierra if consulta
						else{
							echo"error en la consulta";
						}
			}
		
		?>
		</section>
		<section class="ussec2">
			<?php
		$Qcompras="select idcompra,precio,membresia,fecha,compañia_servicio from compras where correo='".$_SESSION['Correo']."';";
		$conexion= new mysqli($HOST,$USER,$PASS,$BD) or die("error al conectar".$conexion->error);
		if ($conexion)
		{
				$consulta=mysqli_query($conexion,$Qcompras);
				if ($consulta){
				//echo"consulta correcta";
					while($fila=mysqli_fetch_assoc($consulta)){
						$arreglo[]=$fila;
					}
					echo '<table>';
					
						echo "<tr>";
						echo "<td>";
						echo "Precio";
						echo "</td>";
						echo "<td>";
						echo "Membresia";
						echo "</td>";
						echo "<td>";
						echo "Fecha";
						echo "</td>";
						echo "<td>";
						echo "Servicio";
						echo "</td>";
						echo "</tr>";
					foreach($arreglo as $elemento){
						
						echo "<tr>";
						echo'<td width="33%">';
						echo "{$elemento['precio']}";
						echo'</td>';
						echo'<td width="33%">';
						echo "{$elemento['membresia']}";
						echo'</td>';
						echo'<td width="33%">';
						echo "{$elemento['fecha']}";
						echo'</td>';
						echo'<td width="33%">';
						echo "{$elemento['compañia_servicio']}";
						echo'</td>';
						echo "</tr>";
					}
					
					echo "</table>";
					}//cierra if consulta
						else{
							echo"error en la consulta";
						}
			}
		?>
		</section>
	</main>

</body>
</html>