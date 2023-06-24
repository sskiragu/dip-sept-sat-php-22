<?php
    class Account{
        // properties
       private $account_name = "John Doe";
    //    construct

        // methods
        public function get_account_name(){
            echo $this->account_name;
        }
        // desctruct
    }
   $account = new Account(); //creating an object
//    var_dump($account);
$account->get_account_name();
?>