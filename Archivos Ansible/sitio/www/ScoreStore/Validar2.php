<?php
$usuario = $_POST['emailu'];
$pass = $_POST['password'];
$idTienda = $_GET['idTienda'];
 
echo $idTienda;
if(empty($usuario) || empty($pass)){
header("Location: index.php");
exit();
}
$conexion=mysqli_connect("localhost","root","admin","scorestore") or die ("problemas en la conexion");
$result = mysqli_query($conexion,"SELECT emailu, password FROM usuarior where emailu='" . $usuario . "'");  
 
if($row = mysqli_fetch_array($result)){
if($row['password'] == $pass){
session_start();
$_SESSION['usuario'] = $usuario;
$_SESSION['idTienda'] = $idTienda;
header("Location: comentario.php");
}else{
header("Location: menu2.html");
exit();
}
}else{
header("Location: menu2.html");
exit();
}
?>