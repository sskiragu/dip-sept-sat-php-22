<?php

require_once 'account.php';

class SavingAccount extends Account{
    public $interest_rate;

    public function __construct($account_name, $account_number,$interest_rate ){
        parent::__construct($account_name, $account_number);
        $this->interest_rate = $interest_rate;
    }
}

$saving_account = new SavingAccount("John Doe", "3456789098765456789876", 3.5);
var_dump($saving_account);

?>