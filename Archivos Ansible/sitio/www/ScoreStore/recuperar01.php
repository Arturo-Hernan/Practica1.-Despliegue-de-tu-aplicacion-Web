<?php
    $v1=$_POST['emailu'];
    if(empty($v1)){
        echo "<script>if(confirm('Ingresa tu correo')){
            document.location='recuperar.php';}</script>";       
        exit();
        }
        $conexion=mysqli_connect("localhost","root","admin","scorestore") or die ("problemas en la conexion");
        $result = mysqli_query($conexion,"SELECT emailu FROM usuarior where emailu='" . $v1 . "'");  
        
        $to = $_POST['emailu'];
        $subject = "Restablecer Contraseña";
        $message = "Se hizo una solicitud de cambio de password, sino has sido tu ignora el correo
                    si deseas actualizar tu password da click en el siguiente enlace.
                    http://localhost:8080/SCORESTORE/ScoreStore/password.php";
        $headers = "From: scorestorepruebadephp@gmail.com";
        $exito=mail($to, $subject, $message,$headers);
        
        if($exito){
            header("Location: recuperar02.php");
        }else{
            echo "<script>if(confirm('Verifica tu correo')){
                document.location='recuperar.php';}</script>";         
        }
?>