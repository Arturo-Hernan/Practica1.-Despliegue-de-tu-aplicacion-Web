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
                <li><a href="eliminartienda.php">Eliminar Tienda</a></li>
                <li><a href="../login.php">Cerrar Sesion</a></li>
            </ul>
        </div>
    </center>
    <br>
    <br>
    <article>
        <div id="article9">
            <font color="white" size="3px">
                <form action="guarda02.php" method="post">
                    Ingresa el id de categoria al que pertenece:
                    <select name="idcategoria">
                        <?php
                              $conexion=mysqli_connect("localhost","root","admin","scorestore")or die ("problemas en la conexion"); 
                              $result=mysqli_query($conexion,"select idcategoria, NombreCat from categoria"); 
                              while ($reg = mysqli_fetch_array($result)){
                                   echo "<option value=\"$reg[idcategoria]\">$reg[NombreCat]</option>";
                              }
                         ?>
                    </select>
                    <br>
                    <br>
                    Ingresa la url de la Tienda:
                    <input type="text" name="urlT">
                    <br>
                    <br>
                    Ingresa la Descripcion de la Tienda:
                    <input type="text" name="DescripcionT">
                    <br>
                    <br>
                    Ingresa el Nombre de la Tienda:
                    <input type="text" name="NombreT">
                    <br>
                    <br>
                    Ingresa el Link de ubicacion de la foto de la Tienda:
                    <input type="text" name="Link">
                    <br>
                    <br>
                    <input type="submit" value="Registra">
                    <br>
                    <br>
                </form>
    </article>
    </div id="article9">
</body>

</html>