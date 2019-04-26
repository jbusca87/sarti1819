<?php


$numeros=array();
for($i=0;$i<10;$i++){
        $numeros[]=rand(0,100);
        
}
echo "<br>Contenido del array:<br>";
print_r($numeros);

?>