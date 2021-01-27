<?php
    $states = "Mississippi Alabama Texas Massachusetts Kansas";
    $statesArray = [];
    $state_1 = explode(' ',$states);
    
    echo "Original Array : <br>";
    foreach($state_1 as $i => $value){
        echo "States[$i] =>  $value <br> "; 
    }

    foreach($state_1 as $state){
        if(preg_match('/xas$/',$state)){
            $statesArray[0] = $state;
        }
    }

    foreach($state_1 as $state){
        if(preg_match('/^k.*s$/i',$state)){
            $statesArray[1]=$state;
        }
    }

    foreach($state_1 as $state){
        if(preg_match('/^M.*s$/',$state)){
            $statesArray[2]=$state;
        }
    }

    foreach($state_1 as $state){
        if(preg_match('/a$/',$state)){
            $statesArray[3]=$state;
        }
    }


    echo "<br><br>";
    foreach($statesArray as $i=>$value){
        echo "STATES_ARRAY[$i]=>$value <br>";
    }




?>