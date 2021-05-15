<!-- ASCII value of all characters from A to Z and a to z -->
<?php
// A to Z
foreach (range('A', 'Z') as $char) {
    echo "$char -" .ord($char) . "\n";
}
echo "<br><br><br>";
// a to z
foreach (range('a', 'z') as $char) {
    echo "$char -" .ord($char) . "\n";
}

?>