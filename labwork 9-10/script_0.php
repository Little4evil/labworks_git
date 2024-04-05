<?php
$rows = 5;
$columns = 3;
echo '<html><body>';
echo '<table border="1">';
for ($i = 1;$i <= $rows;$i++)
{
    echo '<tr>';
    for ($j = 1;$j <= $columns;$j++)
    {
        if ((($i + $j) % 2) == 0)
        {
            $color = "#000000";
        }
        else
        {
            $color = "#ffffff";
        }

        echo "<td bgcolor=$color>$i,$j</td>";
    } /* end of for $j*/
    echo '</tr>';
} /* end of for $i*/
echo '</table>';
echo '</body></html>';
?>
