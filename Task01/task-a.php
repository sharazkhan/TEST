<?php
///// in local now
$string = "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16"; // sample string
$array = explode(',', $string);  // converted to arrray splitting with comma.
$count = sizeof($array); //get the count

foreach ($array as $key => $val) { // loop through each items
    if ($val % 3 == 0 && $val % 5 != 0) {  // Case1 : if multiples of 3
        echo "Fizz<br>";
    } elseif ($val % 5 == 0 && $val % 3 != 0) { // Case1 : if multiples of 5
        echo "Buzz<br>";
    } elseif ($val % 3 == 0 && $val % 5 == 0) { // Case1 : if both
        echo "FizzBuzz<br>";
    } else {
        echo $val . '<br>';   // Default
    }
}
?>
