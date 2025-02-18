
<?php

$fruits = ['apple', 'banana', 'orange'];

// count() - get array length
echo count($fruits) . "\n"; // Output: 3

// in_array() - search array
var_dump(in_array('banana', $fruits)); // Output: bool(true)

// array_push() and array_unshift() - add element to an array
$fruits[] = 'grape'; // Adds to the end (similar to array_push)
array_push($fruits, 'mango', 'raspberry');
array_unshift($fruits, 'kiwi'); // Adds to the beginning
print_r($fruits); // Output: Array ( [0] => kiwi [1] => apple [2] => banana [3] => orange [4] => grape [5] => mango [6] => raspberry )


// array_pop() and array_shift() - remove element from array
array_pop($fruits); // Removes last ('raspberry')
array_shift($fruits); // Removes first ('kiwi')

// unset() - remove specific element
unset($fruits[2]); // Removes 'banana' (index 2)

// array_chunk() - split array
$chunkedArray = array_chunk($fruits, 2);

// Question 15: What is the output of var_dump($chunkedArray);?
var_dump($chunkedArray);

?>