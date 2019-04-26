	<!DOCTYPE html>
<html>
<head>
	<title>TABLA DE MULTIPLICAR</title>
	<link rel="stylesheet" type="text/css" href="">
	<meta charset="utf-8">
</head>
<body>
	<?php

	print("<ul> <= 10");
	$num= 0;
	for ($x=0; $x<=10; $x++) {
	$resultado= $x; * $num;
	print("<li> $num x $x = $resultado <li>\n");
	}
	print("</ul\n");
	?>

</body>
</html>	
