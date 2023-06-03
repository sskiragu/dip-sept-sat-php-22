<?php
// 1. String
$account_name = "John Doe";
var_dump($account_name);

// 2. Int
$age = 20;

// 3. Float
$deposit = 40000.50;

// 4. Boolean
$is_logged_in = true;

// 5. null
$cart = null;

echo "<br>";
// 6. array (indexed vs associative)
$names = array("John", "Mary", "Joe");
$user_input = array("username" => "john", "email" => "john@gmail.com", "password" => "123");
echo "Your username is: ". $user_input['username'];

echo "<br>";
// 7. object
class Account{
    // properties
    public $account_type = "Savings";
    // methods
}
$account = new Account();
var_dump($account);
echo "<br>";
echo $account->account_type;

// 8. Resource
$database_connection = new mysqli("localhost", "root", "", "bank_db");
echo "<br>";
var_dump($database_connection);
?>