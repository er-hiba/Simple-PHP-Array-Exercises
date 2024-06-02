<?php
$original_array = [10, 2, -6, 4, 57, 7];

$reversed_array = [];

for ($i = count($original_array) - 1; $i >= 0; $i--) {
   $reversed_array[] = $original_array[$i];
} 

// or use the built-in function
// $reversed_array = array_reverse($original_array);

echo "Original array: &nbsp;";
print_r($original_array);
echo "<br> <br>Reversed array: &nbsp;";
print_r($reversed_array);
?>
