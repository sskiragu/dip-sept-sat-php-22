<?php
    class Account{
        public static $account_status = "Active";

        public function get_account_status(){
            echo self::$account_status;
        }
    }

    $account = new Account();
    $account->get_account_status();
?>