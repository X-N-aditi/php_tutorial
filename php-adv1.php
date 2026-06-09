


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l") . "<br>";
    ?>


    <?php
        echo readfile("tutorial.txt") . "<br>";
    ?>

    <?php
        echo ("======================================================================================= <br>");
    ?>

    <?php
        $myFile = fopen("tutorial.txt", "r") or die("Unable to open");
        echo fread($myFile, filesize("tutorial.txt"));
        fclose($myFile);
    ?>

</body>
</html>