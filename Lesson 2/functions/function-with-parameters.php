<?php

    function record_transaction($amount, $desc){
        echo "Amount is: " . $amount . " for " . $desc;
    }

    record_transaction(4000, 'Misc.');

?>