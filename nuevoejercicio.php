<?php
session_start();
include_once "conexion.php";

?>
<html>
		<head>
  			<meta charset="utf-8" />
  			<meta name="viewport" content="width=device-width, initial-scale=1.0">
   			<link rel="stylesheet" type="text/css" href="">
  				<title></title>
		</head>

	    <body>

        <fieldset>
            <legend>REGISTRATE</legend>

                <form method="post">
                    <label>Usuario</label>
                    <p><input type="text" name="name" /></p><span id="error_nombre"></span>
                    <label>Contraseña</label>
                    <p><input type="password" name="pass" /></p><span id="error_apellido"></span>
                    <label>Confirmar Contraseña</label>
                    <p><input type="password" name="pass" /></p><span id="error_confirmar"></span>


                    <input type="submit" value="Entrar">
                </form>
        </fieldset>        
        </body>       
</html>
