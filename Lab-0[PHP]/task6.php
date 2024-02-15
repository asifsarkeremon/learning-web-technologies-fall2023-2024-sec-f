<?php

    $i;
    $n=[1,2,3,4,5,6,7,8,9,10];
    function search($num, $n){
        for($i=0; $i<10; $i++){
            if($num==$n){
                return $i;
            }
            else{
                return -1;
            }
        }   
    }

    if(search('6', $n)==-1){
        echo" not found";
        
    }
    else{
        echo"found at index: ";
        echo $i;
    }

    
?>

