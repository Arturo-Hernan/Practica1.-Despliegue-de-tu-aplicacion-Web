<html>
<html lang="es">
<meta charset="utf-8">

<head>
    <link rel="shortcut icon" href="../ScoreStore/fondos/imperial.jpg">
    <link rel="stylesheet" type="text/css" href="../ScoreStore/ccs/menucss.css" />
    <link rel="stylesheet" type="text/css" href="../ScoreStore/ccs/css1.css" />
    <title>Base de datos</title>
</head>

<body>

    <body background="../ScoreStore/fondos/registro.jpg">
        <center>
            <div id="menu-wrapper">
                <ul id="hmenu">
                    <li><a href="../menu.html">Inicio de Interfaz</a></li>
                    <li><a href="registrartienda.php">Registrar Tienda</a></li>
                    <li><a href="registrocategoria.html">Registrar Categoria</a></li>
                    <li><a href="eliminartienda.php">Eliminar Tienda</a></li>
                    <li><a href="../login.php">Cerrar Sesion</a></li>
                </ul>
            </div>
            <br>
            <br>
            <article>
                <div id="article9">
                    <font color="white" size="5px">
                        <?php
                              $conexion = mysqli_connect("localhost", "root", "admin", "scorestore") or die("problemas en la conexion");
                              mysqli_query($conexion, "insert into categoria(NombreCat) values('$_REQUEST[NombreCat]')") or die("problemas en el select" . mysqli_error());
                              mysqli_close($conexion);
                              echo "La categoria ha sido dado de alta";
                         ?>
                    </font>
            </article>
            </div id="article9">
    </body>

</html>