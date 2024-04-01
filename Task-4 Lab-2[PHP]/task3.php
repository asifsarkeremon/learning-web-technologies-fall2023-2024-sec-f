<?php

    function oddeven($num=0){
        if(($num%2)==0){
            echo "the num is even";
        }
        else{
            echo "the num is odd";
        }
    }
    echo oddeven(11);
?>