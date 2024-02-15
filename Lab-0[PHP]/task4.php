<?php

    function large($a=0, $b=0, $c=0){
        if(($a>$b)&&($a>$c)){
            echo $a; 
            echo" is largest";
        }
        elseif(($b>$a)&&($b>$c)){
            echo $b;
            echo" is largest";
        }
        else{
            echo $c;
            echo" is largest";
        }
    }
    echo large(10,20,30);
?>