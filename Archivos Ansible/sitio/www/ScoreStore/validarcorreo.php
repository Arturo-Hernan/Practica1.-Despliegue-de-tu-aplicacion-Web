<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">

<head>
    <link rel="shortcut icon" href="fondos/imperial.jpg">
    <title>verificar-ScoreStore</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="ccs/menucss.css" />
</head>

<body>

    <div class="container-all">

        <div class="ctn-form">
            <img src="imagenes/Logo5.png" alt="" class="logo">

            <?php
            $idTienda = $_GET['idTienda'];
            echo "<form method='post' action='validar2.php?idTienda=" . $idTienda . "'>";
            ?>
            <label for="" align="center">Verifica Tu Correo</label>
            <br>
            <label for="">Email</label>
            <input type="text" name="emailu" />
            <span class="msg-err"></span>
            <!--Poner un mensaje de error si se deja vacio el campo-->
            <label for="">Password</label>
            <input type="password" name="password" />
            <span class="msg-err"></span>
            <input type="submit" value="Iniciar sesion">
            </form>
        </div>
        <div class="ctn-text">
            <br>
            <h1 class="title-description">¡Favor de Verificar tu correo!</h1>
            <img src="imagenes/—Pngtree—computer online shopping_4986603.png" alt="" class='logo2'>
        </div>
    </div>
</body>

</html>