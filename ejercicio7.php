<?php
 
 /* Mostrar un formulario y que se muestre en pantalla*/

print_r($_REQUEST);
echo"<br>";

if(isset($_REQUEST["enviar"])){
    //mostrar el numero
    echo "El número es".$_REQUEST["numero"];
}else{



?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name= viewport content= width=device-width initial-scale=1>
        <meta http-equiv= x-ua-compatible content= ie=edge>
        <title></title>
    <body>
        <form  method="POST">
            Edad: <input type="text" name="numero">
            <input type="submit" name="enviar" VALUE="enviar">
</form>
</body>
</html>

<?php

}

?>

