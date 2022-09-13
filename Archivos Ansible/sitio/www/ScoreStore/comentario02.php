<?php
    $time = time();
	$v1=$_GET['idTienda'];
	echo $v1;
$conexion=mysqli_connect("localhost","root","admin","scorestore") or die ("Problemas en la conexión");
mysqli_query($conexion,"insert into critica(email,idTienda,puntuacion,fecha,critica) values ('".$_GET['email']."','".$_GET['idTienda']."','$_REQUEST[puntuacion]','".date("Y-m-d H:i:s", $time)."','$_REQUEST[critica]')") or die ("Problemas en el Select".mysqli_error($conexion));
mysqli_close($conexion);
$v1=$_GET['idTienda'];
header("Location: opinionesr.php?idTienda=".$v1."");
?>