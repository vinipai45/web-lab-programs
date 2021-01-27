<?php

    $a = array(array(1,2,3),array(4,5,6),array(7,8,9));
    $b = array(array(7,8,9),array(4,5,6),array(1,2,3));

    $m=count($a);
    $n=count($a[2]);
    $p=count($b);
    $q=count($b[2]);

    //print Matrix a[][]
    echo "First Matrix: <br>";
    for($i = 0; $i<$m ;$i++){
        for($j = 0; $j<$n ;$j++){
            echo $a[$i][$j] . " ";
        }
        echo "<br>";
    } 

    echo "<br>";
    
    //print - Matrix b[][]
    echo "Second Matrix: <br>";
    for($i = 0; $i<$p ;$i++){
        for($j = 0; $j<$q ;$j++){
            echo $b[$i][$j] . " ";
        }
        echo "<br>";
    } 

    echo "<br>";

    //print - Transpose of a[][]
    echo "Transpose of First Matrix : <br>";
    for($i = 0; $i<$n ;$i++){
        for($j = 0; $j<$m ;$j++){
            echo $a[$i][$j] . " ";
        }
        echo "<br>";
    } 

    //print - Transpose of b[][]
    echo "Transpose of Second Matrix : <br>";
    for($i = 0; $i<$q ;$i++){
        for($j = 0; $j<$p ;$j++){
            echo $b[$i][$j] . " ";
        }
        echo "<br>";
    } 

    echo "<br>";

    //print production of a[][] X b[][]
    echo "Product of Matrices : <br>";
    if($n==$p){
        for($i=0;$i<$m;$i++){
            for($j=0;$j<$q;$j++){
                $result[$i][$j]=0;

                for($k=0;$k<$n;$k++){
                    $result[$i][$j] += $a[$i][$k]*$b[$k][$j];
                } 
            }  
        }     
        for ($row=0;$row<$m; $row++){
            for ($col=0; $col<$q; $col++){
                echo $result[$row][$col] . " ";
            }
            echo "<br>";
        } 
    }
   



?>