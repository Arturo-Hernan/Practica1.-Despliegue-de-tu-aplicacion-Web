<!DOCTYPE HTML>
<html lang="es">
<meta charset="utf-8">

<head>
    <link rel="shortcut icon" href="fondos/imperial.jpg">
    <title>ScoreStore-Tecnologia</title>
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
                <th><dfn>
                        <form action="resultr.php" method="post" target="_blank">
                            <p><input type="search" size="60px" name="NombreT"
                                    placeholder="Busca entre las diferentes tiendas">
                                <input type="submit" value="Buscar">
                            </p>
                        </form>
                    </dfn></th>
                <th>
                    <div align='right'>
                        <div id="menu-wrapper2">
                            <div align='center'><a href="tecnologia.php">Cerrar Sesion</a></div>
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
                            <li><a href="Contenido.php">Menu Inicio</a></li>
                    </th>
    </div>
    <th>
        <div align='center'>
            <li><a href="ropayaccesoriosr.php">Ropa y Accesorios</a></li>
    </th>
    </div>
    <th>
        <div align='center'>
            <li><a href="hogarr.php">Hogar</a></li>
    </th>
    </div>
    </tr>
    </table>
    </ul>
    </div>
    <article>
        <div id="article4">
            <font color="black" size="6px">Tecnología</font>
    </article>
    </div id="article4">
    <article>
        <div id="article4">
    </article>
    </div id="article4">
    <div class="container-fluid" id="contenidoTabla">
        <table align="center" border="1px" style="width:auto; height:auto;">
            <?php
               $conexion=mysqli_connect("localhost","root","admin","scorestore")or die ("problemas en la conexion");
               $registros=mysqli_query($conexion,"select idTienda, idcategoria, DescripcionT, Link from tienda where idcategoria='1'") or die ("problemas en el select").mysqli_error($conexion);
               while($reg=mysqli_fetch_array($registros)){
                         print("<tr>\n");
                         echo "<td> ","<a href='opinionesr.php?idTienda=".$reg['idTienda']." target='_blank'>","<img src='".$reg['Link']."' width='250' height='200'>","</a>","</td>";
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