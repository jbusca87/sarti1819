<!DOCTYPE html>
<html>
<head>
	<title>PHP Y HTML</title>
	<link rel="stylesheet" type="text/css" href="">
	<meta charset="utf-8">
</head>
<body>
	<h1>PHP HTML</h1>

	<?PHP
		$mensaje_es="Hola";
		$mensaje_en="Hello";
		$idioma= "es";


		$mensaje= "mensaje_" .$idioma;
		print $$mensaje; //lo equivalente a print $mensaje_es
		?>

	<?PHP
		$mensaje_es="Hola";
		$mensaje_en="Hello";
		$idioma= "es";


		$mensaje= "mensaje_" .$idioma;
		print $$mensaje; //lo equivalente a print $mensaje_es
		?>	

		<?php
$x = True; // asigna el valor TRUE a $i
$y = False; // asigna el valor False a $j
$i = 0; // asigna el valor 0 a $i
switch ($i) {
case ($x) :
echo '$i = $x = '.$i.".<br>";
break;
case ($y) :
echo '$i = $y = '.$i.".<br>";
break;
}
?>

</body>
</html>