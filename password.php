<?php
session_start();
$error="";
if(isset($_REQUEST["submit"])){
        if($_REQUEST["username"]=="username"){
            $_SESSION["login"]=true;
            $_SESSION["nom"]=$_REQUEST["username"];
            header('Location:ejemplo_privado.php');           
        }else{
            $error="Usuario o contraseña incorrecta.";
        }
}
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Password</title>
            <meta charset= utf-8>
            <link rel="stylesheet" type="text/css" href="estilos2.css" />
        </head>
        <body>
            <header>
                <h1>Registrate</h1>
            </header> 

            <form action="registrar-usuario.php" method="post"> 
                <hr />

                <h3>Crea una cuenta</h3>
 <!--Nombre Usuario-->

                <label for="nombre">Nombre de Usuario:</label><br>

                <input type="text" name="username" maxlength="32" required>

                <br/><br/>

 <!--Password-->
                <label for="pass">Password:</label><br>
                <input type="password" name="password" maxlength="8" required>

                <br/><br/>

                <input type="submit" name="submit" value="OK">

              

            </form>

            <br>
            <footer>

            ©2019 <a href="">Jb</a>

            </footer> 


        </body>
    </html>   