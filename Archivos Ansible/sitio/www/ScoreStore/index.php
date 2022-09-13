<!DOCTYPE html>
<html lang="es">
<meta charset="utf-8">

<head>
    <link rel="shortcut icon" href="fondos/imperial.jpg">
    <title>Login-ScoreStore</title>
    <link rel="stylesheet" type="text/css" href="ccs/menucss.css" />
    <link rel="stylesheet" href="css/estilos.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <div class="container-all">

        <div class="ctn-form">
            <img src="imagenes/Logo5.png" alt="" class="logo">
            <form method="POST" action="validar.php">
                <label for="">Email</label>
                <input type="text" name="emailu" />
                <span class="msg-err"></span>
                <!--Poner un mensaje de error si se deja vacio el campo-->
                <label for="">Password</label>
                <input type="password" name="password" />
                <span class="msg-err"></span>
                <input type="submit" value="Iniciar sesion">
            </form>

            <span class="text-footer">¿Olvidaste tu contraseña?
                <a href="recuperar.php">Restablecela</a>
            </span>

            <span class="text-footer">¿Aún no tienes cuenta?
                <a href="register.php">Registrate</a>
            </span>
        </div>
        <div class="ctn-text">
            <br>
            <h1 class="title-description">¡Bienvenido!</h1>
            <img src="imagenes/—Pngtree—computer online shopping_4986603.png" alt="" class='logo2'>
        </div>
    </div>
</body>

</html>