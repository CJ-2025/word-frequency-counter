<?php
function calculateSquareRoot($number) {
    $x = $number;
    $y = 1;
    $epsilon = 0.000001; // Precision level
    while ($x - $y > $epsilon) {
        $x = ($x + $y) / 2;
        $y = $number / $x;
    }
    return $x;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $side1 = floatval($_POST['side1']);
    $side2 = floatval($_POST['side2']);
    $side3 = floatval($_POST['side3']);

    if ($side1 > 0 && $side2 > 0 && $side3 > 0 &&
        ($side1 + $side2 > $side3) &&
        ($side1 + $side3 > $side2) &&
        ($side2 + $side3 > $side1)) {

        $s = ($side1 + $side2 + $side3) / 2;
        $area = calculateSquareRoot($s * ($s - $side1) * ($s - $side2) * ($s - $side3));

        echo "<h3>Triangle Area: " . number_format($area, 2) . " square units</h3>";
    } else {
        echo "<h3 style='color:red;'>Invalid triangle sides. Make sure the sum of any two sides is greater than the third side.</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle Area Calculator</title>
</head>
<body>
    <h2>Triangle Area Calculator</h2>
    <form method="post">
        <label for="side1">Enter Side 1:</label>
        <input type="number" step="0.01" id="side1" name="side1" required><br><br>

        <label for="side2">Enter Side 2:</label>
        <input type="number" step="0.01" id="side2" name="side2" required><br><br>

        <label for="side3">Enter Side 3:</label>
        <input type="number" step="0.01" id="side3" name="side3" required><br><br>

        <button type="submit">Calculate Area</button>
    </form>
</body>
</html>