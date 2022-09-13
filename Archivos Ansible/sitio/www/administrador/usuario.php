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
            <br>
            <br>
            <article>
                <div id="article9">
                    <font align="center" color="white" size="5px">
                        <?php
                            $usuario = $_GET['user'];
                            $pass = $_GET['password'];
                               
                            if(empty($usuario) || empty($pass)){
                                header("Location: ../login.php");
                                exit();
                            }

                            $conexion=mysqli_connect("localhost","root","admin","scorestore") or die ("problemas en la conexion");
                            $result = mysqli_query($conexion,"SELECT nombre, password FROM administradores where nombre='" . $usuario . "'");  
                               
                            if($row = mysqli_fetch_array($result)){
                            
                                if($row['password'] == $pass){
                              
                                    session_start();
                              
                                    $_SESSION['usuario'] = $usuario;
                              
                                    header("Location: menu.html");
                             
                                }else{
                              
                                    header("Location: ../login.php");
                                    exit();
                               }
                            }else{
                                header("Location: ../login.php");   
                                exit();
                            }
                              
                        ?>
                    </font>
            </article>
            </div id="article9">
    </body>

</html>