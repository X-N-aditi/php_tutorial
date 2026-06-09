<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $_SESSION["favcolor"] = "blue";
    $_SESSION["favanimal"] = "swan";
    echo "session varible are set";
    ?>

    <?php
    if(isset($_SESSION["favcolor"])) {
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
    } else {
    echo "No session data found.";
    }
    ?>

    
</body>
</html>