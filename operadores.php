<?php
echo "<h3>Postincrement</h3>";
$a = 5;
echo "Deberia ser 5: " . $a++ . "<br />\n";
echo " Deberia  ser 6: " . $a++ . "<br />\n";
echo " Deberia  ser 7: " . $a++ . "<br />\n";
echo " Deberia  ser 8: " . $a . "<br />\n";
echo "<h3>Preincrement</h3>";

$a = 5;
echo "Deberia ser 6: " . ++$a . "<br />\n";
echo "Deberia ser 7: " . ++$a . "<br />\n";
echo "Deberia ser 8: " . ++$a . "<br />\n";
echo "Deberia ser 9: " . ++$a . "<br />\n";
?>