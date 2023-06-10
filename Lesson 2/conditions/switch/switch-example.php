<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .top-nav ul li{
            display: inline;
        }
    </style>
</head>
<body>
    <div class="top-nav">
        <nav>
            <ul>
                <li><a href="switch-example.php?action=profile">Profile</a></li>
                <li><a href="switch-example.php?action=statements">Statements</a></li>
                <li><a href="switch-example.php?action=reports">Reports</a></li>
                <li><a href="switch-example.php?action=settings">Settings</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
</body>
</html>
<?php
if (isset($_GET['action'])) {
    $selected = $_GET['action'];
switch ($selected) {
    case 'profile':
        include_once 'profile.php';
        break;
    case 'statements':
        echo "You selected statements";
        break;
    case 'reports':
        echo "You selected Reports";
        break;
    case 'settings':
        echo "You selected settings";
        break;
    
    default:
        echo "You selected the default";
        break;
}
}
?>