<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">

<head>
    <link rel="shortcut icon" href="fondos/imperial.jpg">
    <title>Recuperar-Cuenta</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="ccs/menucss.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="container-all">

        <div class="ctn-text">
            <br>
            <h1 class="title-description">¡Ingresa tu correo para Restablecer tu contraseña!</h1>
            <img src="imagenes/img registro.png" alt="" class='logo2'>
        </div>

        <div class="ctn-form2">
            <img src="imagenes/Logo5.png" alt="" class="logo">
            <form action="recuperar01.php" method="post" enctype="multipart/form-data">
                <label for="">Email</label>
                <input type="text" name="emailu">
                <span class="msg-err"></span>
                <input type="submit" value="Enviar correo">
            </form>
        </div>
    </div>
</body>

</html>