<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Signup form [username, email, password] -->
    <div>
        <form action="signup.php" method="post">
            <input type="text" name="username" placeholder="Enter username">
            <input type="email" name="email" placeholder="Enter email">
            <input type="password" name="password" placeholder="Enter password">
            <input type="submit" name="signup" value="Signup">
        </form>
    </div>
</body>
</html>
<?php

if (isset($_POST['signup'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Connection to the database
    $database_connection = new mysqli("localhost", "root", "", "co-op-db");
    if ($database_connection->error) {
        echo "Connection failed";
    }
    // Insert query
    $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
    if ($database_connection->query($sql) === TRUE) {
        echo "Signup successful";
    }else{
        echo "Signup failed";
    }
}
?>