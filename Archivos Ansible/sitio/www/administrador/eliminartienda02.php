<html>
<html lang="es">
<meta charset="utf-8">

<head>
    <link rel="shortcut icon" href="../ScoreStore/fondos/imperial.jpg">
    <link rel="stylesheet" type="text/css" href="../ScoreStore/ccs/menucss.css" />
    <link rel="stylesheet" type="text/css" href="../ScoreStore/ccs/css1.css" />
    <title>Base de Datos</title>
</head>

<body background="../ScoreStore/fondos/registro.jpg">
    <center>
        <h1>
            <font color="white">Alta de Tiendas</font>
        </h1>
    </center>
    <header>
        <font size="1">
            <script languaje="JavaScript">
            var mydate = new Date()
            var year = mydate.getYear()
            if (year < 1000)
                year += 1900
            var day = mydate.getDay()
            var month = mydate.getMonth()
            var daym = mydate.getDate()
            if (daym < 10)
                daym = "0" + daym
            var dayarray = new Array("Domingo,", "Lunes,", "Martes,", "Miércoles,", "Jueves,", "Viernes,", "Sábado,")
            var montharray = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto",
                "Septiembre", "Octubre", "Noviembre", "Diciembre")
            document.write("<font color='white' face='Georgia' style='font-size:12pt'>" + dayarray[day] + " " + daym +
                " de " + montharray[month] + " de " + year + "</font>")
            </script>
        </font>
    </header>
    <center>
        <br>
        <div id="menu-wrapper">
            <ul id="hmenu">
                <li><a href="../menu.html">Inicio de Interfaz</a></li>
                <li><a href="registrocategoria.html">Registrar Categoria</a></li>
                <li><a href="registrartienda.php">Registrar Tienda</a></li>
                <li><a href="eliminartienda.php">Eliminar otra Tienda</a></li>
                <li><a href="../login.php">Cerrar Sesion</a></li>
            </ul>
        </div>
    </center>
    <br>
    <br>
    <article>
        <div id="article9">
            <font color="white" size="5px">
                <?php
                    $conexion = mysqli_connect("localhost", "root", "admin", "scorestore") or die("problemas en la conexion");
                    $registros = mysqli_query($conexion, "select idTienda,idcategoria,urlT,DescripcionT,NombreT,Link from tienda where idTienda='$_REQUEST[idTienda]'") or die("problemas en el select" . mysqli_error());
                    if ($reg = mysqli_fetch_array($registros)) {
                         mysqli_query($conexion, "Delete from tienda where idTienda='$_REQUEST[idTienda]'") or die("problemas en el select" . mysqli_error("$conexion"));
                         echo "La tienda se ha eliminado exitosamente";
                         echo "<br>";
                    } else {
                         echo "No Existe" . "<br>";
                    }
               ?>
            </font>
    </article>
    </div id="article9">
</body>

</html>