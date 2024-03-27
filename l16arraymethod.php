<?php

// => array_combine(key,value) Function

$name = array("aung aung","su su","kyaw kyaw","hla hla");
$age = [30,25,35,40];

$result = array_conbine($name,$age);
echo "<pre>".print_r($result,true)."</pre>" // ( [aung aung] => 30 [su su] => 25 [kyaw kyaw] => 35 [hla hla] => 40)
echo $result["kyaw kyaw"]; // 35


// => count(array) Function
$vehicles = ["toyota","ford","audi","mazda","suzuki","ford","mazda","bmw"];
echo count($vehicles); // 8



// => array_count_values(array) Function
$cars = ["toyota","ford","audi","mazda"];
echo "<pre>".print_r(array_count_values($cars),true)."</pre>"; // [toyota] => 1 [ford] => 1 [audi] => 1 [mazda] => 1
$brands = ["toyota","ford","audi","mazda","suzuki","ford","mazda","bmw","Toyota"];
echo "<pre>".print_r(array_count_values($brands),true)."</pre>"; //    [toyota] => 1 [ford] => 2 [audi] => 1 [mazda] => 2 [suzuki] => 1 [bmw] => 1 [Toyota] => 1



// => array_chunk(array,lenght) Function
// => array_chunk(array,lenght,preservekey)
// preservekey = true/false

$couples = ["aung aung","su su","kyaw kyaw","nu nu","tun tun","yin yin","zaw zaw","aye aye"];

$result1 = array_chunk($couples,2);
echo "<pre>".print_r($result1,true)."</pre>";
echo $result[0][1]; // su su

$result2 = array_chunk($couples,2,true);
echo "<pre>".print_r($result2,true)."</pre>"; // 0 1 2 3 4 5

$result3 = array_chunk($couples,2,false);
echo "<pre>".print_r($result3,true)."</pre>"; //01 01 01 01



// => array_diff(array1,array2,....) Function
// Note:: we don't need to consider any index or keyname

$colors1 = ["red","green","blue","pink"];
$colors2 = ["red","blue","pink","silver"];
$colors3 = ["green","blue","orange","violet"];

echo "<pre>".print_r(array_diff($colors1,$colors2),true)."</pre>"; // ( [1] => green )
echo "<pre>".print_r(array_diff($colors2,$colors1),true)."</pre>"; // ( [3] => silve r)
echo "<pre>".print_r(array_diff($colors1,$colors2,$colors3),true)."</pre>"; // ()

$col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$col2 = ["e"=>"red","f"=>"green","g"=>"black"];
echo "<pre>".print_r(array_diff($col1,$col2),true)."</pre>"; // ( [c] => blue [d] => yellow )
echo "<pre>".print_r(array_diff($col2,$col1),true)."</pre>"; // ( [b] => black )


// => array_diff_assoc(array1,array2,...) Function
// Note :: we need to consider any keyname and value  (just for assoc array)

$col1 = ["a"=>"red","b"=>"yellow","c"=>"blue","d"=>"green"];
$col2 = ["a"=>"red","b"=>"green","c"=>"blue"];
echo "<pre>".print_r(array_diff_assoc($col1,$col2),true)."</pre>"; // ( [b] => yellow [d] => green )
echo "<pre>".print_r(array_diff_assoc($col2,$col1),true)."</pre>"; // ( [b] => green )




// => array_diff_key(array1,array2,...) Function
// Note :: we need to consider any keyname  (just for assoc array)

$col1 = ["a"=>"red","b"=>"yellow","c"=>"blues","d"=>"green", "f"=>"pink"];
$col2 = ["a"=>"red","b"=>"green","c"=>"blue","e"=>"orange"];
echo "<pre>".print_r(array_diff_key($col1,$col2),true)."</pre>"; // ( [d] => green [f] => pink )
echo "<pre>".print_r(array_diff_key($col2,$col1),true)."</pre>"; // ( [e] => orange )




// => array_intersect(array1,array2,...) Function
// Note :: we don't need to consider keyname
$num1 = [10,20,30,40,60,70,80];
$num2 = array(10,20,30,40,50,90,80);
echo "<pre>".print_r(array_intersect($num1,$num2),true)."</pre>"; // ( [0] => 10 [1] => 20 [2] => 30 [5] => 80)
echo "<pre>".print_r(array_intersect($num2,$num1),true)."</pre>"; // ( [0] => 10 [1] => 20 [2] => 30 [5] => 80)

$col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow",];
$col2 = ["a"=>"red","f"=>"green","d"=>"orange"];
echo "<pre>".print_r(array_intersect($col1,$col2),true)."</pre>"; // ( [a] => red [b] => green )
echo "<pre>".print_r(array_intersect($col2,$col1),true)."</pre>"; // ( [a] => red [f] => green )



// => array_fill(startindex,count,value) Function
echo "<pre>".print_r(array_fill(0.5,"green"),true)."</pre>"; //
echo "<pre>".print_r(array_fill(2.5,"blue"),true)."</pre>"; // 



// => array_fill_keys(key,value) Function
$keys = ["a","b","c","d"];
$values = ["red","green","blue","pink"];
echo "<pre>".print_r(array_fill_keys($key,"pink"),true)."</pre>"; // 
echo "<pre>".print_r(array_fill_keys($keys,$values),true)."</pre>"; //


// => array_key_exists(key,array) Function ( just for assoc array)
$operators = ["mpt" => "ftth", "ooredoo" => "broadvand"];

if(array_key_exists("mpt",$operators)){
    echo "key exists;"
}else{
    echo "key does not exists";
}



// => array_merge(array1,array2,...) Function
$arr1 = ["red","green"];
$arr2 = array("blue","yellow");
$arr3 = ["orange","violet"];

echo "<pre>".print_r(array_merge($arr1,$arr2),true)."</pre>"; //
echo "<pre>".print_r(array_merge($arr1,$arr2,$arr3),true)."</pre>"; //


?>
