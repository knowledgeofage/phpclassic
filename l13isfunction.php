<?php

//=>Check Variable Type

//is_string(variable) Function

$val1 = "Save Myanmar";
echo "val1 is ".is_string($val1); // 1
echo var_dump($val1); // string(12) "Save Myanmar"
echo gettype($val1); // string

$val2 = 0;
echo "val2 is ".is_string($val2);

$val3 = 50;
echo "val3 is ".is_string($val3);

$val4 = "50";
echo "val4 is ".is_string($val4); // 1

$val5 = true;
echo "val5 is ".is_string($val5);

$val6 = "";
echo "val5 is ".is_string($val6); // 1



//=> is_numeric(variable) Function

$val7 = 50;
echo "val7 is ". is_numeric($val7);// 1
echo "val7 is ". is_int($val7); // 1
echo "val7 is ". is_integer($val7); // 1
echo gettype($val7); // integer


$val8 = 34.56;
echo "val8 is ". is_numeric($val8); // 1
echo "val8 is ". is_int($val8); // 1
echo "val8 is ". is_integer($va;8); // 1
echo gettype($val8); // float
echo gettype($val8); // double

$val9 = "50";
//*********************
echo "val9 is ". is_numeric($val9);// 1
echo "val9 is ". is_int($val9); 
echo "val9 is ". is_integer($val9);



// => is_float(variable) Function



$val10 = 40;
echo "val10 is ". is_float($val10);

$val11 = 34.56;
echo "val11 is ". is_float($val11); // 1

$val12 = "34.56";
echo "val12 is ". is_float($val12);



// => is_bool(variable) Function

$val13 = true;
echo "val13 is ". is_bool($val13); // 1
echo gettype($val13); // boolean

$val14 = FALSE;
echo "val14 is ". is_bool($val14); // 1

$val15 = 1;
echo "val14 is ". is_bool($val15);

$val16 = "true";
echo "val16 is ". is_bool($val16);


// => is_array(variable) Function

$val17 = "Help Myanmar";
echo "val17 is ". is_array($val17);


// $val18 = ["aung aung","su su"];
$val18 = array("aung aung","su su");
echo "val18 is ". is_array($val18); // 1
echo gettype($val18); // array




// => is_null(variable) Function

$val19 = 0;
echo "val19 is ". is_null($val19);

$val20 = null;
echo "val20 is ". is_null($val20); // 1

$val20 = Null;
echo "val20 is ". is_null($val20)// 1

$val21 = NULL;
echo "val21 is ". is_null($val21); // 1

$val22 = "null";
echo "val22 is ". is_null($val22);





// => empty(variable)  VS isset(variable)
// Note:: the following values are empty
// 0
// 0.0
// "0"
// ""
// NULL
// FALSE
//[]


$val21 = [];

if(empty($val21)){
    echo "Your variable is empty";
}


if(isset($val21)){
    echo "Your variable with value";
}else{
    echo "Your variable without value";
}


$val21 = FALSE;

if(empty($val21)){
    echo "Your variable is empty";
}else{
    echo "Your variable is not empty";
}


if(isset($val21)){
    echo "Your variable with value";
}else{
    echo "Your variable without value";
}



// => isset() VS unset()

// $city;
$city = "Yangon";
$country = "Thailand";
echo isset($city) ? "Yea" : "No";
echo $city; // Yangon
echo $country; // Thailand

unset($city,$country);
echo $city;
echo $country;


?>