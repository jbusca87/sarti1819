    <?php
    require("functions.php")
    /*
    - Aprovecharemos que tenemos funciones definidas para hacer una
    calculadora que haga las diferentes operacion 
    */
    if(isset($_REQUESt)   )
    
    ?>
   
<!DOCTYPE html>
    <html>
        <head>
            <title>Mi primera Calculadora</title>
            <meta charset= utf-8>
            <link rel="stylesheet" type="text/css" href="estiloT.css" />
            


        </head>
        <body>
            <form action="" method="post">
			    
				    <input type="radio" value="suma">Suma<br>
				    <input type="radio" value="resta">Resta<br>
				    <input type="radio" value="multiplicacion">multiplicación<br>
				    <input type="radio" value="division" checked>Division<br>
			    
			        Ingresa tu primer número:<br />
			        <input type="text" name="valor1"><br />
			        Ingresa tu segundo valor:<br />
			        <input type="text" name="valor2"><br>
			        <input type="reset" value="Borrar">
			        <input type="submit" value="Enviar">
		    </form>
    
            <?php 
	            
            ?>
        
        </body>
 </html>