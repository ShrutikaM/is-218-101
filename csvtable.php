<?php

$html = '<table border=1>';
echo "<html><body><table border=1>\n\n";
$f = fopen("carSamples.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table border=1></body></html>";

?>
