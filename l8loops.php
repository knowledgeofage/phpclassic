<?php

// => PHP Looping

// for
// foreach
// while
// do..while


$colorsones = ["red","green","blue","white","black","gray","pink"];//indexed array
echo count($colorsones);
var_dump($colorsones);

$colorsoneskey = arry_keys($colorsones);
echo $colorsoneskey; // error
var_dump($colorsoneskey); // [0,1,2,3,4,5,6]

for($i=0;$i < count($colorsones);$i++){
    // echo $i; 0 to 6

    // echo "This is indexed array or manual array by forloop = index key is " . $i ."and value is = " . $colorsones[$i] . <br/>

    echo "This is indexed array or manual array by forloop = index key is " . $$coloroneskey[$i] ."and value is = " . $colorsones[$i] . <br/>
}

foreach($coloraones as $colorone){
    echo"This is indexed array or manual array by foreach = ".$colorone;
}

foreach($colorones as $key =>$colorone){
    echo $key;
    echo "This is indexed array or manual array by foreach = index key is ".$key . "and value is ".$colorone;
}


$x = 0;
while($x < count($colorones)){
    echo $colorones($x);
    $x++;


    // echo "This is indexed array or manual array by while = index key is ".$x . "and value is ". $colorones[$x];
    echo "This is indexed array or manual array by while = index key is ".$coloronoeskey[$x] . "and value is " . $colorones[$x];

}

$y=0;

do{
     // echo "This is indexed array or manual array by while = index key is ".$y . "and value is ". $colorones[$y];
     echo "This is indexed array or manual array by while = index key is ".$coloronoeskey[$y] . "and value is " . $colorones[$y];
}while($y < count($colorones);)

?>