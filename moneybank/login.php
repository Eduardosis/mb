<?php
$vcorreo = $_POST['correo'];
$vcontra = $_POST['contra'];
include ("config.php");
$Qlogin="SELECT correo,contraseña FROM registro where correo='".$vcorreo. "' AND contraseña='".$vcontra."'";
    $con=mysqli_connect($HOST,$USER,$PASS,$BD);
    if ($con){
        // echo $Qlogin;

    }
     $consulta=mysqli_query($con,$Qlogin);
             if($consulta){
                 $count=mysqli_num_rows($consulta);
                 $fila=mysqli_fetch_assoc($consulta);
                 // echo "<br>";
                 // echo $count."<br>";
                 // print_r($fila);
                 if ($count==1){
                     session_start();
                     $_SESSION['Correo']=$fila['correo'];
                     $_SESSION['Contraseña']=$fila['contraseña'];
                     echo "<br>";
                     echo $_SESSION['Correo'];
                 }

             }
             /*echo $_SESSION['Correo'];
             echo $_SESSION['Contraseña']; */
              header("Location: usuario.php"); 
             ?>