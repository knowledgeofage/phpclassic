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


// => sizeof(array) Function
$colors = ["red","green","blue","yellow","pink"];
echo sizeof($colors); // 5


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



// => array_keys(array) Function
// => array_keys(array,value)
// => array_keys(array,value,strict)


$phones = ["mpt" => "ftth","ooredoo"=>"broadband","telenor"=>"wifi"];

echo "<pre>".print_r(array_keys($phones),true)."</pre>"; // ( [0] => mpt [1] => ooredoo [2] => telenor)
echo array_key($phones)[1]; // ooredoo


echo "<pre>".print_r(array_keys($phones,"broadband"),true)."</pre>"; // ( [0] => ooredoo)
echo array_keys($phones,"broadband")[0]; // ooredoo


$numbers = [10,20,30,"10"];
echo "<pre>".print_r(array_keys($numbers,"10"),true)."</pre>"; // ( [0] => 0 [1] => 3)
echo "<pre>".print_r(array_keys($numbers,10),true)."</pre>"; // ( [0] => 0 [1] => 3)

echo "<pre>".print_r(array_keys($numbers,10,false),true)."</pre>"; // ( [0] => 0 [1] => 3)
echo "<pre>".print_r(array_keys($numbers,"10",false),true)."</pre>"; // ( [0] => 0 [1] => 3)


echo "<pre>".print_r(array_keys($numbers,10,true),true)."</pre>"; // ( [0] => 0)
echo "<pre>".print_r(array_keys($numbers,"10",true),true)."</pre>"; // ( [0] => 3)



// => array_map(callback,array1,array2,array3,...) Function


$males = ["tun tun","aung aung","kyaw kyaw","thura","zaw zaw"];
$females = array("hla hla","su su","nu nu","yu yu","thida");

function genderone($name){
    return ("Mr.".$name);
}

function gendertwo($male,$female){
    return($male." & ".$female);
}

echo "<pre>".print_r(array_map("genderone",$males),true)."</pre>"; // 
echo "<pre>".print_r(array_map("gendertwo",$males,$females),true)."</pre>";// 



// => sort(array) Function

$cars = ["volov","bmw","toyota","mazda","suzuki"];
sort($cars);
echo "<pre>".print_r($cars,true)."</pre>"; // 


$numbers = [10,50,"80",90,35,"100",130,"250",70];
sort($numbers);
echo "<pre>".print_r($numbers,true)."</pre>"; // 



// => array_multisort(array) Function

$carbrands = ["volov","bmw","toyota","mazda","suzuki"];
array_multisort($carbrands);
echo "<pre>".print_r($carbrands,true)."</pre>"; //


$luckynumbers = [10,50,"80",90,35,"100",130,"250",70];
sort($luckynumbers);
echo "<pre>".print_r($luckynumbers,true)."</pre>"; //



// => array_reverse(array) Function

$vehicles = ["volov","bmw","toyota","mazda","suzuki"];
sort($vehicles);
echo "<pre>".print_r(array_reverse($vehicles),true)."</pre>"; //

$winnumbers = [10,50,"80",90,35,"100",130,"250",70];
array_multisort($winnumbers);
echo "<pre>".print_r(array_reverse($winnumbers),true)."</pre>"; //



// => array_pad(array,lenght,value) Function

$colors = ["red","green"];
echo "<pre>".print_r(array_pad($colors,5,"blue"),true)."</pre>"; // 



// => array_reduce(arra,callback,initial) Function


$nums = [10,"20",30];

function calfun($total,$val){
    return $total += $val;
}

echo array_reduce($nums,"calfun",0); // 60

// => array_sum(array) Function
$nums = [10,20,30,40,50];
echo array_sum($nums); // 150

$nums =[10,20,30,"40",-50];
echo array_sum($nums); // 50

$nums = ["a"=>10.2,"b"=>20.3,"c"=>30.3];
echo array_sum($nums); //60.8


// => arary_search(value,array) Function
$myarrs = ["a","b","c","d","e"];
echo array_search("d",$myarrs); // 3

$myarrs = ["a"=>"red","b"=>"green","c"=>"violet","d"=>"black","e"=>"blue"];
echo array_search("green",$myarrs); // b




// => array_pop(array) Function

$colors = ["red","green","blue"];
array_pop($colors);
echo "<pre>".print_r($colors,true)."</pre>"; // 


// => array_shift() Function

$colors = ["red","green","blue"];
array_shift($colors);
echo "<pre>".print_r($colors,true)."</pre>"; // ([0] => green [1] => blue)

$colors = ["a"=>"red","b"=>"green","c"=>"blue","d"=> "violet"];
array_shift($colors);
echo "<pre>".print_r($colors,true)."</pre>"; // ([b] => green [c] => blue [d] => violet)


// => unset(arrayindex) Function and array_values(array)
$colors = ["red","green","blue"];
// unset($colors[1]);
echo "<pre>".print_r($colors,true)."</pre>"; // ([0] => red [2] => blue)

unset($colors[1]);
echo "<pre>".print_r(array_values($colors),true)."</pre>"; // ([0] => red [1] => blue)


$infos = ["name" => "aung aung","age" => 20, "city" => "yangon"];
unset($infos["age"]);
echo "<pre>".print_r(array_value($infos),true)."</pre>"; // ([0] => aung aung [1] => yangon)


// => array_unshift(array,value1,value2,value3,...) Function

$colors = ["red","green","blue"];
array_unshift($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>"; //



$colors = ["0"=>"red","1"=>"green","2"=>"blue"];
array_unshift($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>"; //


$colors = ["a"=>"red","b"=>"green","c"=>"blue"];
array_unshift($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>"; //





// => array_pusht(array,value1,value2,value3,...) Function

$colors = ["red","green","blue"];
array_push($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>"; //



$colors = ["0"=>"red","1"=>"green","2"=>"blue"];
array_push($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>"; //


$colors = ["a"=>"red","b"=>"green","c"=>"blue"];
array_push($colors,"silver","violet");
echo "<pre>".print_r($colors,true)."</pre>"; //



// => array_slice(array,offset/index) Function
// => array_slice(array,offset/index,lenght)
// => array_slice(array,index,lenght,preserve)

$candycolors = ["red","green","blue","yellow","pink"];
echo "<pre>".print_r(array_slice($candycolors,0),true)."</pre>"; // [ red to pink ]
echo "<pre>".print_r(array_slice($candycolors,2),true)."</pre>"; // [ blue to pink ]

echo "<pre>".print_r(array_slice($candycolors,0,2),true)."</pre>"; // ( [0] => red [1] => green)
echo "<pre>".print_r(array_slice($candycolors,2,2),true)."</pre>"; // ( [0] => blue [1] => yellow)
echo "<pre>".print_r(array_slice($candycolors,2,5),true)."</pre>"; // ( [0] => blue [1] => yellow [2] => pink )


echo "<pre>".print_r(array_slice($candycolors,2,5,false),true)."</pre>"; // ( [0] => blue [1] => yellow [2] => pink )
echo "<pre>".print_r(array_slice($candycolors,2,5,true),true)."</pre>"; // ( [2] => blue [3] => yellow [4] => pink )



$males = ["aung aung","maung maung","kyaw kyaw","zaw zaw","naung naung"];
$females = ["su su","yu yu","nu nu"]
// array_splice($males,0,2,$females);
// echo "<pre>".print_r($males,true)."</pre>";//

// array_splice($males,0,3,$females);
// echo "<pre>".print_r($males,true)."</pre>"; //

// array_splice($males,1,3,$females);
// echo "<pre>".print_r($males,true)."</pre>"; //


// => array_unique(array)Function

$num = [10,20,30,50,10,30,60,70,80,10];
echo "<pre>".print_r(array_unique($num),true)."</pre>"; // ([0] => 10[1] => 20[2] => 30[3] => 50[6] => 60[7] => 70[8] => 80)


$colors = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"red","e"=>"blue"];
echo "<pre>".print_r(array_unique($colors),true)."</pre>"; // ([a] => red[b] => green[c] => blue)



// => array_walk(array,callbackfunction) Function
// => array_walk(array,callbackfunction,parameter)

$colors = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"pink","e"=>"violet"];

function myfunone($val,$key){
    echo "Key is = $key and Value is = $val.";
}

array_walk($colors,"myfunone"); // Key is = a and Value is red.


function myfuntwo($val,$key,$p){
    echo "Key is = $key and Value is $val $p. ";
}

array_walk($colors,"myfunone","colour"); // Key is = a and Value is red colour. Key is = b and Value is green colour.


function myfunthree(&$val){
    $val = "orange";
    return $val;
}

array_walk($colors,"myfunthree");
echo "<pre>".print_r($colors,true)."</pre>"; // [a] => orange [b] => orange [c] => orange [d] => orange [e] => orange




// => compact(var1,var2,var3,...) Function

$name = "Aung Aung";
$age = "25";
$city = "Yangon";

$result = compact("name","age","city");
echo "<pre>".print_r($result,true)."</pre>"; //([name] => Aung Aung [age] => 25 [city] => Yangon)



// => range(start,end) Function
// => range(start,end,step)

$num1 = range(0,5);
echo "<pre>".print_r($num1,true)."</pre>"; // ([0] => 0[1] => 1[2] => 2[3] => 3[4] => 4[5] => 5)
    
$num2 = range(0,50,10);
echo "<pre>".print_r($num2,true)."</pre>"; // ([0] => 0[1] => 10[2] => 20[3] => 30[4] => 40[5] => 50)

$char1 = range("a","k");
echo "<pre>".print_r($char1,true)."</pre>"; // ([0] => a[1] => b[2] => c[3] => d[4] => e[5] => f[6] => g[7] => h[8] => i[9] => j[10] => k)    

$char2 = range("k","g");
echo "<pre>".print_r($char2,true)."</pre>"; // ([0] => k[1] => j[2] => i[3] => h[4] => g)



// => current() , post() , next() , end() , pre() , reset() Function

$students = ["aung aung","maung maung","zaw zaw","tun tun","kyaw kyaw"];
echo current($students); // aung aung
echo post($students); // aung aung

echo end($students); // kyaw kyaw
echo current($students); // kyaw kyaw


echo current($students); //aung aung
echo next($students); // maung maung
echo current($students); // maung maung
echo next($students);// zaw zaw
echo prev($students); // maung maung



echo end($students); // kyaw kyaw
echo current($students); // kyaw kyaw
echo prev($students);// tun tun

echo reset($students); 
echo current($students); // aung aung



// => serialize() , unserialize() Function

$staffs = [
    ["aung aung","maung maung","kyaw kyaw","tun tun","zaw zaw"],
    ["su su","yu yu","nu nu","aye aye","hla hla"]
];

echo "<pre>".print_r($staffs,true)."</pre>"; // ([0] => Array([0] => aung aung[1] => maung maung[2] => kyaw kyaw[3] => tun tun[4] => zaw zaw) [1] => Array ([0] => su su [1] => yu yu [2] => nu nu [3] => aye aye [4] => hla hla))
    
         
$seriadatas = serialize($staffs);
echo $seriadatas; // a:2:{i:0;a:5:{i:0;s:9:"aung aung";i:1;s:11:"maung maung";i:2;s:9:"kyaw kyaw";i:3;s:7:"tun tun";i:4;s:7:"zaw zaw";}i:1;a:5:{i:0;s:5:"su su";i:1;s:5:"yu yu";i:2;s:5:"nu nu";i:3;s:7:"aye aye";i:4;s:7:"hla hla";}}
var_dump($seriadatas); // string(209) "a:2:{i:0;a:5:{i:0;s:9:"aung aung";i:1;s:11:"maung maung";i:2;s:9:"kyaw kyaw";i:3;s:7:"tun tun";i:4;s:7:"zaw zaw";}i:1;a:5:{i:0;s:5:"su su";i:1;s:5:"yu yu";i:2;s:5:"nu nu";i:3;s:7:"aye aye";i:4;s:7:"hla hla";}}"

$unseriadatas = unserialize($seriadatas);
echo "<pre>".print_r($unseriadatas,true)."</pre>"; // ([0] => Array([0] => aung aung[1] => maung maung[2] => kyaw kyaw[3] => tun tun[4] => zaw zaw) [1] => Array ([0] => su su [1] => yu yu [2] => nu nu [3] => aye aye [4] => hla hla))

?>
