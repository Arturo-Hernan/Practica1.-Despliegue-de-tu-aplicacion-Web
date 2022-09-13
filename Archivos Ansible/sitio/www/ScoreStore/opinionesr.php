<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="fondos/imperial.jpg">
    <title>ScoreStore-Tecnologia</title>
    <link rel="stylesheet" href="ccs/css1.css">
    <link rel="stylesheet" type="text/css" href="ccs/menucss.css" />
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
                <?php
					$idTienda = $_GET['idTienda'];
					echo "<th>","<div align='right'>","<div id='menu-wrapper2'>","<div align='center'>","<a href=opiniones.php?idTienda=".$idTienda.">Cerrar Sesion</a></div></div></div></th>";
				?>
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
                            <li><a href="tecnologiar">Tecnologia</a></li>
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
    <br>
    <article>
        <div id="article13">
            <font color="black" size="6px">
                <?php
					$idTienda = $_GET['idTienda'];
					$conexion=mysqli_connect("localhost","root","admin","scorestore")or die ("problemas en la conexion");
					$registros=mysqli_query($conexion,"select NombreT from tienda where idTienda='" . $idTienda . "'") or die ("problemas en el select").mysqli_error($conexion);
						while($reg=mysqli_fetch_array($registros)){
						echo "Opiniones de la Tienda ".$reg['NombreT']."";
						}
				?>
            </font>
    </article>
    </div id="article13">
    <table align="center" style="width:auto; height:auto;">
        <tr>
            <td>
                <table align="center" style="width:auto; height:auto;">
                    <td>
                        <div class="container-fluid" id="contenidoTabla">
                            <div class="ctn-form">
                                <?php
									$idTienda = $_GET['idTienda'];
									$conexion=mysqli_connect("localhost","root","admin","scorestore")or die ("problemas en la conexion");
									$registros=mysqli_query($conexion,"select idTienda,urlT, Link from tienda where idTienda='" . $idTienda . "'") or die ("problemas en el select").mysqli_error($conexion);
									echo "<table align='center' style='width:auto; height:auto;'>"; 
									while($reg=mysqli_fetch_array($registros)){
										echo "<tr>";
											echo "<td colspan='2' align='center'>","<img src='".$reg['Link']."' width='250' height='200'>","</a>","</td>";
										echo "</tr>";
										echo "<tr>";
											echo "<td>","<a href='".$reg['urlT']."'>","<input type='submit2' value='Ir a tienda'>","</a>","<br>","</td>";
											echo "<td>","<a href=validarcorreo.php?idTienda=".$idTienda.">","<input type='submit2' value='Dejar Comentario'>","</a>","</td>";
										echo "</tr>";
									}
									echo "</table>"
								?>
                            </div>
                        </div>
                    </td>
                </table>
            </td>
            <td>
                <img src="fondos/persona.jpg" width="100px" height="100px">
            </td>
            <td>
                <table align="center" style="width:auto; height:auto;">
                    <tr>
                        <td>
                            <div id="Layer1" style="width:700px; height:300px; overflow: scroll;">
                                <?php
									$idTienda = $_GET['idTienda'];
									$conexion=mysqli_connect("localhost","root","admin","scorestore")or die ("problemas en la conexion");
									$registros=mysqli_query($conexion,"select nombreu,apellidopaterno,puntuacion,fecha,critica from critica as emple inner join usuarior as departa on emple.email=departa.emailu where idTienda='" . $idTienda . "'") or die ("problemas en el select").mysqli_error($conexion);
									echo "<table align='center' border='1px' style='width: 680px; height: auto;'>"; 
									while($reg=mysqli_fetch_array($registros)){
										echo "<tr>";
											echo "<td>";
												echo "Opinión de: ".$reg['nombreu']." ".$reg['apellidopaterno']."<br><br>";
												echo "".$reg['critica']." ";
												echo "La puntuacion que doy es: ".$reg['puntuacion']."<br><br>";
												echo "Fecha de publicacion: ".$reg['fecha']."";
											echo "</td>";
										echo "</tr>";
									}
								?>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <?php
		$idTienda = $_GET['idTienda'];
		$conexion=mysqli_connect("localhost","root","admin","scorestore")or die ("problemas en la conexion");
		$registros=mysqli_query($conexion,"select ROUND(AVG(puntuacion) ,0) as prom from critica where idTienda='" . $idTienda . "'") or die ("problemas en el select").mysqli_error($conexion);
		while($reg=mysqli_fetch_array($registros)){
			echo "<h3>En escala del 1 al 5</h3>";
			echo "<h3>La puntuacion promedio de la tienda es: ".$reg['prom']."</h3>";
		}
	?>
</body>

</html>