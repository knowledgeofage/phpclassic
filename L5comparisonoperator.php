<?php


// => Comparison Operators

// ==
// ===
// !=     not equal
// <>     not equal
// !==
// >
// <
// >=
// <=
// ? (Ternary Operator)

// Ternary Operator
// echo (stm1 comp stm2) ? true:false;

$num1 = 10;
$num2 = 20;

echo $num1 == $num2 ? "Your condition is true" : "Your condition is false"; // true
echo ($num1 == $num2) ? "Your condition is true" : "Your condition is false"; // true
echo ($num1 === $num2) ? "Your condition is true" : "Your condition is false"; // falsse

echo ($num1 <> $num2) ? "Your condition is true" : "Your condition is false"; // false
echo ($num1 != $num2) ? "Your condition is true" : "Your condition is false"; // false
echo ($num1 !== $num2) ? "Your condition is true" : "Your condition is false"; // true


echo ($num1 > $num2) ? "Your condition is true" : "Your condition is false";
echo ($num1 < $num2) ? "Your condition is true" : "Your condition is false"; 
echo ($num1 => $num2) ? "Your condition is true" : "Your condition is false"; 
echo ($num1 <= $num2) ? "Your condition is true" : "Your condition is false"; 



?>