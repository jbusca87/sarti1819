
<?php

echo "Hola mundo";

print ("<h1>Hola Mundo</h1>");



/*Las variables se definen siempre con el símbolo $ delante:
    $a = 1;
    $b= “cadena”;

$a=9;

print ('a vale $a\n'); 
print ("a vale $a\n");

/*‘simples’: admite los caracteres de escape \’ (comilla simple) y \\
(barra). Las variables NO se interpretan.
• “dobles”: admite más caracteres de escape, como \n, \r, \t, \\, \$, \”.
Los nombres de variables SÍ se interpretan*/

?>
<?php
/*insertando imagen en php*/

print ("Mi primer GIF");
print ("<img src='imagenes/elefante.gif'>");
    
?>

<?php
/*probando en idioma español*/
$mensaje_es="Hola";
$mensaje_en="Hello";
$idioma= "es"; 

$mensaje="mensaje_" .$idioma;
print $$mensaje; 
?>

<?php
$mensaje_es="Hola";
$mensaje_en="Hello";
$idioma="en";


$mensaje="mensaje_" .$idioma;
print $$mensaje;
?>

<?php
echo "<h3>Postincrement</h3>";
$a = 5;
echo "Deberia ser 5: " . $a++ . "<br />\n";
echo " Deberia  ser 6: " . $a . "<br />\n";
echo "<h3>Preincrement</h3>";
$a = 5;
echo "Deberia ser 6: " . ++$a . "<br />\n";
echo "Deberia ser 6: " . $a . "<br />\n";
?>

<?php
$numero1 = 10;
$numero2 = 5;

$resultado = $numero1 / $numero2; // $resultado = 2
$resultado = 3 + $numero1; // $resultado = 13
?>