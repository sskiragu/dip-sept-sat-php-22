<?php

    function record_transaction($amount, $desc){
        return "Amount is: " . $amount . " for " . $desc;
    }

   function xyz(){
    echo record_transaction(4000, 'Misc.');
   }

   xyz();

?>