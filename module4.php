<?php
// 1.Write a PHP function to sort an array of strings by their length, in ascending order. 
// (Hint: You can use the usort() function to define a custom sorting function.)

$fruits = ["apple","Banana","orange","sajib","for"];
usort($fruits, fn($x,$y) => strlen($x) <=> strlen($y));

print_r($fruits);

PHP_EOL;


// 2.Write a PHP function to concatenate two strings, 
// but with the second string starting from the end of the first string.

$firstStr = "karim";
$secondStr = "Miah";

function concatenate($firstStr,$secondStr){
    return $firstStr.$secondStr;
}

echo concatenate($firstStr,$secondStr);
 
PHP_EOL;

// 3.Write a PHP function to remove the first and last element from an array 
// and return the remaining elements as a new array.

$student = ["sajib","saiful","sajid","sadia","jannat"];

function removeEle($student){
    $new_arr = [];
    $first = array_shift($student);
    $last = array_pop($student);
     return $new_arr =  [$first,$last];
}

var_dump(removeEle($student));


