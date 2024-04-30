<?php

// => abs (number) Function

echo abs(32); // 32
echo abs(-32); // 32
echo abs(32.75); // 32.75
echo abs(-32.75); // 32.75


// => round(number) Function
// => round(number,percision)

echo round(32.64); // 33
echo round(32.54); // 33
echo round(32.44); // 32
echo round(-32.64); // -33
echo round(32.64345,2); // 32.64
echo round(32.64765,2); // 33.65


// => ceil (number) Function

ehco ceil(32.64); // 33
ehco ceil(32.54); // 33
ehco ceil(32.44); // 33

//**
ehco ceil(-32.64); // -32
ehco ceil(-32.34); // -32


// => floor(number) Function

echo floor(32.64); // 32
echo floor(32.54); // 32
echo floor(32.44); // 32

//**
echo floor(-32.64); // -33
echo floor(-32.64); // -33

?>