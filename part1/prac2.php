<?php
// Array of fruits
$fruits = ["Apple", "Banana", "Cherry", "Mango", "Orange"];

echo "<h3>Displaying Fruits using a For Loop</h3>";
echo "<ol>";

// Using for loop
for ($i = 0; $i < count($fruits); $i++) {
    echo "<li>" . $fruits[$i] . "</li>";
}

echo "</ol>";

echo "<h3>Displaying Fruits using a While Loop</h3>";
echo "<ol>";

// Using while loop
$i = 0;
while ($i < count($fruits)) {
    echo "<li>" . $fruits[$i] . "</li>";
    $i++;
}

echo "</ol>";
?>