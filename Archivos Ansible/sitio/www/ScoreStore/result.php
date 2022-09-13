<!DOCTYPE HTML>
<html lang="es">
<meta charset="utf-8">

<head>
    <link rel="shortcut icon" href="fondos/imperial.jpg">
    <title>ScoreStore-Busqueda</title>
    <link rel="stylesheet" type="text/css" href="ccs/menucss.css" />
    <link rel="stylesheet" href="ccs/css1.css">

</head>

<body background="White">
    <link rel="stylesheet" type="text/css" href="ccs/css1.css" />
    <header>
        <font size="1">
            <div align='center'>
                <article>
                    <div id="article">
        </font>

        <table align="center" style="width:1298px; height:40px;">
            <tr>
                <th>
                    <div align='left'><img src="fondos/logo.png" width="80px" height="50px">
                </th>
                </div>
                <th>
                    <div align='right'>
                        <div id="menu-wrapper2">
                            <div align='center'><a href="index.php">Iniciar Sesion</a></div>
                        </div>
                    </div>
                </th>
            </tr>
        </table>
        </div>
        </article>
        </div id="article">
    </header>
    <div id="menu-wrapper">
        <ul id="hmenu">
            <table style="width:1298px; height:10px;">
                <tr>
                    <th>
                        <div align='center'>
                            <li><a href="tecnologia.php">Tecnologia</a></li>
                    </th>
    </div>
    <th>
        <div align='center'>
            <li><a href="ropayaccesorios.php">Ropa y Accesorios</a></li>
    </th>
    </div>
    <th>
        <div align='center'>
            <li><a href="hogar.php">Hogar</a></li>
    </th>
    </div>
    </tr>
    </table>
    </ul>
    </div>
    <br>
    <br>
    <article>
        <div id="article12">
            <font color="black" size="6px">Resultados de la Busqueda</font>
    </article>
    </div id="article12">
    <article>
        <div id="article4">
    </article>
    </div id="article4">
    <br>
    <div class="container-fluid" id="contenidoTabla">
        <table align="center" border="1px" style="width:auto; height:auto;">
            <?php
               $conexion=mysqli_connect("localhost","root","admin","scorestore")or die ("problemas en la conexion");
               $registros=mysqli_query($conexion,"select idTienda, idcategoria, DescripcionT, NombreT, Link from tienda where NombreT='$_REQUEST[NombreT]'") or die ("problemas en el select").mysqli_error($conexion);
               while($reg=mysqli_fetch_array($registros)){
                         print("<tr>\n");
                         echo "<td> ","<a href='opiniones.php?idTienda=".$reg['idTienda']." target='_blank'>","<img src='".$reg['Link']."' width='250' height='200'>","</a>","</td>";
                    print("<td>".$reg['DescripcionT']."</td>\n");
                    }
               ?>
    </div>
    </table>
    <article>
        <div id="article4">
    </article>
    </div id="article4">
</body>

</html>