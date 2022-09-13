<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">
<head>
    <link rel="shortcut icon" href="fondos/imperial.jpg">
    <link rel="stylesheet" type="text/css" href="ccs/menucss.css" />
    <meta charset="UFT-8">
    <title>Login-ScoreStore</title>
    <link rel="stylesheet" href="css/estilos.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="container-all">
        <div class="ctn-form">
			<font color="Blue" SIZE=4> 
                <?php
                     $conexion=mysqli_connect("localhost","root","admin","scorestore") or die ("Problemas en la conexión");
                    //mysqli_select_db($conexion,"scorestore") or die ("Problemas al seleccionar la Base de Datos");
                    mysqli_query($conexion,"insert into usuarior(emailu,nombreu,apellidopaterno,apellidomaterno,password)values('$_REQUEST[emailu]','$_REQUEST[nombreu]','$_REQUEST[apellidopaterno]','$_REQUEST[apellidomaterno]',$_REQUEST[password])") or die ("Problemas en el Select".mysqli_error($conexion));
                    mysqli_close($conexion);
                    echo "Has sido dado de Alta";
                ?>
            </font>
			<form method="get" action="index.php"><input type="submit" value="Iniciar sesion"></form>
        </div>
        <div class="ctn-text">
            <br>
            <h1 class="title-description">¡Bienvenido!</h1>
            <img src="imagenes/—Pngtree—computer online shopping_4986603.png" alt="" class='logo2'>
        </div>
    </div>
</body>
</html>