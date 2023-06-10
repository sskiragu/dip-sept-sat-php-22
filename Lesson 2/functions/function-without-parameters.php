<?php

    function record_transaction(){
        $amount = 50000;
        $desc = "Transport";
        echo "Amount is: " . $amount . " for " . $desc;
    }

    record_transaction();

?>