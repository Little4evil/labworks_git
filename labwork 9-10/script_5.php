<?php
/* echo "<table border='1'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>" . $j . " * " . $i . " = " . $j * $i . "</td>";
    }
    echo "</tr>";
}
echo "</table>"; */

echo "<table>";
$counter = 1;
for ($k = 0; $k < 2; $k++) {
    echo "<tr>";
    for ($l = 0; $l < 5; $l++) {
        echo "<td>";
        echo "<table border='1' width='100%'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td style='min-width: 89px;'>" . $counter . " * " . $i . " = " . $counter * $i . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</td>";
        $counter++;
    }
    echo "</tr>";
}
echo "</table>";
?>
