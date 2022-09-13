<!DOCTYPE HTML>
<html lang="es">
<meta charset="utf-8">

<head>
    <link rel="shortcut icon" href="fondos/imperial.jpg">
    <link rel="stylesheet" type="text/css" href="ccs/menucss.css" />
    <title>ScoreStore</title>
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
                        <form action="result.php" method="post" target="_blank">
                            <p><input type="search" size="60px" name="NombreT"
                                    placeholder="Busca entre las diferentes tiendas">
                                <input type="submit" value="Buscar">
                            </p>
                        </form>
                    </dfn></th>
                <th>
                    <div align='right'>
                        <div id="menu-wrapper2">
                            <div align='center'><a href="../menu.html">Cerrar Sesion</a></div>
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
                            <li><a href="tecnologiar.php">Tecnologia</a></li>
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
    </article>
    </div id="article4">

    <article>
        <div id="article5">
            <table align="center" style="width:1000px; height:auto;">
                <tr>
                    <th>
                        <div align='center'>
                            <font color="white" size="11px">ScoreStore</font><br />
                            <p>
                                <font color="white">
                                    <?php
                                        session_start();  
                                             $conexion=mysqli_connect("localhost","root","admin","scorestore")or die ("problemas en la conexion");
                                        $registros=mysqli_query($conexion,"select emailu, nombreu, apellidopaterno, apellidomaterno from usuarior where emailu='" . $_SESSION['usuario'] . "'") or die ("problemas en el select").mysqli_error($conexion);
                                             while($reg=mysqli_fetch_array($registros)){
                                        echo "Hola ".$reg['nombreu']." ".$reg['apellidopaterno']." ".$reg['apellidomaterno'];
                                        }
                                   ?>
                                    <br />
                                </font>
                            </p>
                            <font color="white" size="5px">Más que brindar una reseña brindamos seguridad y confianza
                            </font>
                    </th>
        </div>
        <th>
            <div align='center'><img src="fondos/inicio.png" width="450px" height="400px"></div>
        </th>
        </tr>
        </table>
    </article>
    </div id="article5">
    <article>
        <div id="article4">
    </article>
    </div id="article4">
</body>

</html>