<?php
    class Account{
        protected $account_name;
        protected $account_number;

        public function __construct($account_name, $account_number){
            $this->account_name = $account_name;
            $this->account_number = $account_number;
        }
    }
?>