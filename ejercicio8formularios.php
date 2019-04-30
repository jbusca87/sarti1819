
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php

$name = $apellidos = $edad = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $apellidos = test_input($_POST["apellidos"]);
  $edad = test_input($_POST["edad"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["comment"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Validación  Formularios</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  Apellidos: <input type="text" name="apellidos">
  <br><br>
  edad: <input type="number" name="edad">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
   
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>