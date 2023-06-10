<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="if-elseif-else.php" method="post">
        <input type="number" name="score" placeholder="Enter your score">
        <input type="submit"  name=" compute-grade" value="Compute grade">
    </form>
</body>
</html>
<?php

/*

< 50 =    F
50 - 59 = C
60 - 69 = B
> 70    = A

*/
if (isset($_POST['compute-grade'])) {
    $score = $_POST['score'];

if ($score < 50) {
    echo "F";
} elseif ($score < 60) {
    echo "C";
} elseif ($score < 70) {
    echo "B";
}else{
    echo "A";
}
}
?>