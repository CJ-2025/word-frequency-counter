<?php

function formatString(string $input): string {
    $formattedString = str_replace(' ', '', $input);
    return strtolower($formattedString);
}

function checkEvenOrOdd(int $number): string {
    return ($number % 2 === 0) ? "The number $number is even." : "The number $number is odd.";
}

$originalString = "This is a poorly written program with little structure and readability.";
$modifiedString = formatString($originalString);

echo "\nModified string: " . $modifiedString;

$number = 42;
echo "\n" . checkEvenOrOdd($number);
?>