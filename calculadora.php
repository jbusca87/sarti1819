<?php 
	if ($_POST ["valor1"] !="" and $_POST ["valor2"]!=""){
		if ($_POST["operador"] == "suma") {
			print ($resultado = $_POST ["valor1"] + $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "resta") {
			print ($resultado = $_POST ["valor1"] - $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "multiplicacion") {
			print ($resultado = $_POST ["valor1"] * $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		} elseif ($_POST["operador"] == "division") {
			print ($resultado = $_POST ["valor1"] / $_POST ["valor2"]);
			print ('<br /><a href="calculadora.php">Volver</a>');
		}
	} else {
		print("Ingresa alg&uacute;n valor");
		print ('<br /><a href="calculadora.php">Volver</a>');
	}
?>
<html>
        <head>
            <title>Mi primera Calculadora</title>
            <meta charset= utf-8>

        </head>
    <body>
            <h1>Calculadora</h1>
            
                <select name="operador">
				    <option value="suma">Suma</option>
				    <option value="resta">Resta</option>
				    <option value="multiplicacion">Multiplicación</option>
				    <option value="division">Division</option>
			    </select><br />
			            Ingresa tu primer número:<br />
			            <input type="text" name="valor1"><br />
			            Ingresa tu segundo valor:<br />
			        <input type="text" name="valor2"><br>
			        <input type="reset" value="Borrar">
			        <input type="submit" value="Enviar">
		</form>
    </body>
</html>    
