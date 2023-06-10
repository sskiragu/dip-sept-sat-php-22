<?php
// indexed array
$counties = array("Nairobi", "Mombasa", "Kisumu");

foreach ($counties as $value) {
    echo $value. "<br>";
}
// associative array
$user_input = array("username" => "john", "email" => "john@gmail.com", "password" => "123");
foreach ($user_input as $key => $value) {
    echo $key. ": ". " " . $value. " ";
}

?>