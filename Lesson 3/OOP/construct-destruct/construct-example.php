<?php
    class Account{
        // properties
       private $account_name;
       private $account_number;
    //    construct
    function __construct($account_name, $account_number){
        $this->account_name = $account_name;
        $this->account_number = $account_number;
    }

        // methods
        public function get_account_name(){
            echo $this->account_name." " .$this->account_number;
        }
        // desctruct
    }
   $account = new Account("John Doe", 34567890987654334567); //creating an object
//    var_dump($account);
$account->get_account_name();
?>