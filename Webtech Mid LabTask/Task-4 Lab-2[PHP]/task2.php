<?php

    function vat($price=0, $tax=0){
        return $price*($tax/100);
    }
    echo ("The VAT is: ");
    echo vat(1000, 15);

?>