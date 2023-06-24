<?php
    class Account{
        private $account_balance;

        /**
         * Get the value of account_balance
         */ 
        public function getAccount_balance()
        {
                return $this->account_balance;
        }

        /**
         * Set the value of account_balance
         *
         * @return  self
         */ 
        public function setAccount_balance($account_balance)
        {
                $this->account_balance = $account_balance;

                return $this;
        }
    }
    $account = new Account();
    // $account->account_balance = 500; //Cannot access private properies direct
    $account->setAccount_balance(500);
    echo $account->getAccount_balance();
?>