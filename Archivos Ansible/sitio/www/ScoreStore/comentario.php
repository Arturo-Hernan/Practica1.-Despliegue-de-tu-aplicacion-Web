<!DOCTYPE HTML>
<html lang="es">
<meta charset="utf-8">

<head>
    <link rel="shortcut icon" href="fondos/imperial.jpg">
    <title>ScoreStore-Comentario</title>
    <link rel="stylesheet" type="text/css" href="ccs/menucss.css" />
    <link rel="stylesheet" href="ccs/css1.css">
    <link rel="stylesheet" href="ccs/css2.css">
</head>

<body background="White">
    <link rel="stylesheet" type="text/css" href="ccs/css1.css" />
    <link rel="stylesheet" type="text/css" href="ccs/css2.css">
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
                                <button type="submit" value="Buscar">Buscar</button>
                        </form>
                    </dfn></th>
                </p>
                <?php
					session_start(); 
					echo "<th>","<div align='right'>","<div id='menu-wrapper2'>","<div align='center'>","<a href=opiniones.php?idTienda=".$_SESSION['idTienda'].">Cerrar Sesion</a></div></div></div></th>";
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
    <article>
        <div id="article13">
            <font color="black" size="6px">
                <?php 
					$conexion=mysqli_connect("localhost","root","admin","scorestore")or die ("problemas en la conexion");
					$registros=mysqli_query($conexion,"select NombreT from tienda where idTienda='" . $_SESSION['idTienda'] . "'") or die ("problemas en el select").mysqli_error($conexion);
						while($reg=mysqli_fetch_array($registros)){
						echo "Mi opinión a: ".$reg['NombreT']."";
						}
				?>
            </font>
    </article>
    </div id="article13">
    <article>
        <div id="article4">
    </article>
    </div id="article4">
    <?php
			echo "<table align='center' style='width:auto; height:auto;'>";
				echo "<tr>";
					echo "<td>";
						echo "<img src='fondos/persona.jpg' width='100px' height='100px'>";
					echo "</td>";
					echo "<td>";
						echo "<table align='center' border='1px' style='width:auto; height:auto;'>";
							echo "<tr>";
								echo "<td>";
									echo "<h2>Mi opinión de la tienda</h2>";
									echo "<div id='Layer1' style='width:600px; height:250px; overflow: scroll;'>";
										echo "<form action='comentario02.php?email=".$_SESSION['usuario']."&idTienda=".$_SESSION['idTienda']."' method='post'>";
											echo "<table align='center' style='width:700px; height:300px;'>";
												echo "<tr>";
													echo "<td style='height:10px;'>";
														echo "Puntuación:";
														echo "<input type='text' name='puntuacion'></input>";
													echo "</td>";
												echo "</tr>";
												echo "<tr>";	
													echo "<td style='height:100px;'>";
														echo "<h3>Deja tu opinión sobre la tienda</h3><br>";
														echo "<input align='left' type='text' name='critica' placeholder='Escribe tu Opinión' style='width:560px; height:auto;'></input>";
													echo "</td>";
												echo "</tr>";
											echo "</table>";	
									echo "</div>";
								echo "</td>";
							echo "</tr>";
						echo "</table>";
					echo "</td>";	
					echo "<td>";
						echo "<table align='center' style='width:auto; height:auto;'>";
							echo "<td>";
								echo "<div class='container-fluid' id='contenidoTabla'>";
									echo "<div class='ctn-form'>";
											$conexion=mysqli_connect("localhost","root","admin","scorestore")or die ("problemas en la conexion");
											$registros=mysqli_query($conexion,"select idTienda,urlT, Link from tienda where idTienda='" . $_SESSION['idTienda']. "'") or die ("problemas en el select").mysqli_error($conexion);
											echo "<table align='center' style='width:auto; height:auto;'>"; 
											while($reg=mysqli_fetch_array($registros)){
												echo "<tr>";
													echo "<td>","<img src='".$reg['Link']."' width='250' height='200'>","</a>","</td>";
													echo "<td>","<a href='".$reg['urlT']."'>","<input type='submit2' value='Ir a tienda'>","</a>","<br>","</td>";
												echo "</tr>";
												echo "<tr>";
													echo "<td>","<input type='submit' value='Enviar Comentario'>","</a>","</td>";
													echo "</form>";
													echo "<td>","<a href=comentario.php?email=".$_SESSION['usuario']."&idTienda=".$_SESSION['idTienda']."target='_blank'>","<input type='submit2' value='Cancelar Comentario'>","</a>","</td>";
												echo "</tr>";
											}
											echo "</table>";
									echo "</div>";
								echo "</div>";
							echo "</td>";
						echo "</table>";
					echo "</td>";
				echo "</tr>";
			echo "</table>";
		?>
    <article>
        <div id="article4">
    </article>
    </div id="article4">
</body>

</html>