<html>
   <head>
      <title>Login de Base de Datos</title>
	  <link rel="shortcut icon" href="ScoreStore/fondos/imperial.jpg">
     <link rel="stylesheet" type="text/css" href="../ScoreStore/ccs/menucss.css" />
      <link rel="stylesheet" type="text/css" href="administrador/estilos.css">
   </head>
   <body>
      <div id="login">
         <form action= "administrador/usuario.php" method="GET">
            <label>Usuario: </label>
            <input type="text" name="user"/><br>
            <label>Contraseña: </label>
            <input type="password" name="password"/><br><br>
            <input type="submit" value="Enviar"/>
         </form>
      </div>
   </body>
</html>
