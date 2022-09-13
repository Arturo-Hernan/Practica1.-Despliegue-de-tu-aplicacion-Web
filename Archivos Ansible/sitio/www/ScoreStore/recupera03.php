<?php
    $v1=$_POST['emailu'];
    if(empty($v1)){
        echo "<script>if(confirm('Ingresa tu correo')){
            document.location='recuperar.php';}</script>";       
        exit();
        }
        $conexion=mysqli_connect("localhost","root","admin","scorestore") or die ("problemas en la conexion");
        $result = mysqli_query($conexion,"SELECT emailu, password FROM usuarior where emailu='" . $v1 . "'");  
        
        if($row = mysqli_fetch_array($result)){
            if($row['emailu'] == $v1){ 
                echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
            }
        }else{
            echo "<script>if(confirm('Verifica tu correo')){
                document.location='recuperar.php';}</script>";         
        }
?>