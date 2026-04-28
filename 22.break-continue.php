<?php
echo "<h3>Contoh Break</h3>";

for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        break;
    }
    echo "Angka: $i <br>";
}

echo "<h3>Contoh Continue</h3>";

for ($j = 1; $j <= 10; $j++) {
    if ($j == 6) {
        continue;
    }
    echo "Angka: $j <br>";
}
?>