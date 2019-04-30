<?php
$name=$_POST["name"];
$pass=$_POST["pass"];
if(!isset($name) && !isset($pass))
{
?>
<html>
<h2>Teclea un Usuario y Password</h2>
<form method="post">
<input type="text" name="name">
<input type="password" name="pass">
<input type="submit" value="Entrar">
</form>
</html>
<?php
}
else if($name=="user1" && $pass=="pass1")
{
echo "<html><h2>C O N T E N I D O S del S I T I O 1 . . .</h2></html>";
}
else if($name=="user2" && $pass=="pass2")
{
echo "<html><h2>C O N T E N I D O S del S I T I O 2 . . .</h2></html>";
}
else
{
echo "<html><h2>Acceso no autorizado.</h2><a href='javascript:window.history.go(-1)'>Volver</a></html>";
}
?>