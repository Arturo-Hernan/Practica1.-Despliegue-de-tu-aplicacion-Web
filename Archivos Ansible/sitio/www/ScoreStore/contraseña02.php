<?php
    $usuario = $_POST['emailu'];
    $pass = $_POST['password'];
    if(empty($usuario)||empty($pass)){
        echo "<script>if(confirm('Ingresa tu correo')){
            document.location='password.php';}</script>";       
        exit();
    }
    $conexion=mysqli_connect("localhost","root","admin","scorestore") or die ("problemas en la conexion");
    $result = mysqli_query($conexion,"UPDATE usuarior SET password='".$pass."' where emailu='" . $usuario . "'");  

    header("Location: contraseña03.php");
          
?>