<?php

    function area($length=0, $width=0){
        return $length*$width;
    }
    echo ("The area is: ");
    echo area(10, 20);

    function perimeter($length=0, $width=0){
        return 2*($length+$width);
    }
    echo (" The perimeter is: ");
    echo perimeter(10, 20);

?>