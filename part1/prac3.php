<?php
// Define the matrix
$matrix = [
    [12, 23, 34],
    [45, 55, 62],
    [71, 84, 90]
];

echo "<h3>Even Numbers Using While Loop</h3>";
echo "<ul>";

$row = 0;
while ($row < count($matrix)) {
    $col = 0;
    while ($col < count($matrix[$row])) {
        if ($matrix[$row][$col] % 2 == 0) {
            echo "<li>" . $matrix[$row][$col] . "</li>";
        }
        $col++;
    }
    $row++;
}
echo "</ul>";

echo "<h3>Even Numbers Using Do...While Loop</h3>";
echo "<ul>";

$row = 0;
do {
    $col = 0;
    do {
        if ($matrix[$row][$col] % 2 == 0) {
            echo "<li>" . $matrix[$row][$col] . "</li>";
        }
        $col++;
    } while ($col < count($matrix[$row]));
    $row++;
} while ($row < count($matrix));

echo "</ul>";

echo "<h3>Even Numbers Using Foreach Loop</h3>";
echo "<ul>";

foreach ($matrix as $row) {
    foreach ($row as $value) {
        if ($value % 2 == 0) {
            echo "<li>" . $value . "</li>";
        }
    }
}

echo "</ul>";
?>