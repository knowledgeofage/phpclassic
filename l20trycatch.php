<?php

function mycolor($color){

    if(){
        throw new Exception("I hate $color color");
    }

    return "Yeah! my fav color is $color";
}


echo mycolor("red");


function mynum($base,$power){

    if($power > 3){
        throw new Exception("We not allow over $power");
    }


    $result = pow($base,$power);
    return $result;
}

echo mynum(2,3);



// => try.. catch Statement

// try{
//    code to be executed
// }catch(Exception $e){
//    code to exception is catched
// }

// => try..catch.. finally Statement

// try{
//    code to be executed
// }catch(Exception $e){
    code to exception is catched
// }finally{
//    code that always runs regardless of weather an exception was catch or not !
// }


    


?>