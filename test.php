<?php

$rows = 5;
for ($i = $rows; $i > 0; $i--) {
    // Print leading spaces
    for ($j = $rows - $i; $j > 0; $j--) {
        echo "&nbsp;";
    }
    // Print stars
    for ($k = 0; $k < $i; $k++) {
        echo "*";
    }
    // Move to the next line
    echo "<br>";
}
?>