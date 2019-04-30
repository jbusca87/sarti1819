<?php
session_start();
$error="";
if(isset($_REQUEST["submit"])){
        if($_REQUEST["username"]=="USER" &&
        $_REQUEST["passsword"]=="PASSWORD"){
            header('Location:ejercicio5.privado.php'); 
        }
            
           
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

            <form action="password.php" method="post"> 
                <hr />

                <h3>Crea una cuenta</h3>
 <!--Nombre Usuario-->

                <label for="nombre">Nombre de Usuario:</label><br>

                <input type="text" submit="name" value="env">

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