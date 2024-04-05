<?php
$colors = [
    ["name" => "Black", "hex" => "#000000", "rgb" => "rgb(0, 0, 0)"],
    ["name" => "White", "hex" => "#FFFFFF", "rgb" => "rgb(255, 255, 255)"],
    ["name" => "Red", "hex" => "#FF0000", "rgb" => "rgb(255, 0, 0)"],
    ["name" => "Lime", "hex" => "#00FF00", "rgb" => "rgb(0, 255, 0)"],
    ["name" => "Blue", "hex" => "#0000FF", "rgb" => "rgb(0, 0, 255)"],
];

echo "<table border='1'>";
echo "<tr><th>Название</th><th>Цвет</th><th>Hex</th><th>RGB</th></tr>";
foreach ($colors as $color) {
    echo "<tr><td>" . $color["name"] . "</td><td style='background-color: " . $color["hex"] . ";'></td><td>" . $color["hex"] . "</td><td>" . $color["rgb"] . "</td></tr>";
}
echo "</table>";
?>
