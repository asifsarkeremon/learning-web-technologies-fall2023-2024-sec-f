<?php

    for($i=0; $i<4; $i++){
        for($j=0; $j<$i; $j++){

            echo "*";
        }
        echo "\r\n";
    }  

    echo "\r\n";

    for($i=4; $i>0; $i--){
        for($j=1; $j<$i; $j++){

            echo $j;
        }
        echo "\r\n";
    } 

    echo "\r\n";

    $a='A';
    for($i=0; $i<4; $i++){
        for($j=0; $j<$i; $j++){
            echo $a;
            $a++;
        }
        echo "\r\n";
    } 
    
?>

