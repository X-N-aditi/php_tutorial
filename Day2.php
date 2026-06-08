<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    $i = 7;
    while ($i > 0) {
        echo $i;
        $i--;
    }
    ?>


    <?php
    $x = 1;
    while ($x < 6) {
        if ($x == 3) break;
        echo $x;
        $x++;
    }
    ?>

    <?php
    $y = 0;
    while ($y < 6) {
        $y++;
        if ($y == 3) continue;
        echo $y;
    }
    ?>

    <?php
    $z = 1;

    do {
        echo $z;
        $z++;
    } while ($z < 6);
    ?>

    <?php
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
    ?>

    <?php
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }
    ?>


    <?php
    # indexed array   = in this array each item has an index number
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);
    echo $cars[0];
    ?>

    <?php
    # associative array = use named keys , instead of numeric indices
    $car = array("brand" => "ford", "price" => 1900000);
    var_dump($car);
    echo $car["brand"];
    ?>

    <?php

    $fruits = ["Apple", "Mango", "Banana"];

    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }

    ?>

    <?php

    $fruits = ["Apple", "Mango", "Banana"];

    echo count($fruits);

    ?>

    <?php

    $fruits = ["Apple", "Mango"];

    array_push($fruits, "Banana");

    print_r($fruits);

    ?>

    <?php

    $fruits = ["Apple", "Mango", "Banana"];

    array_pop($fruits);

    print_r($fruits);

    ?>

    <?php

    $fruits = ["Apple", "Mango", "Banana"];

    array_shift($fruits);

    print_r($fruits);

    ?>

    <?php

    $fruits = ["Mango", "Banana"];

    array_unshift($fruits, "Apple");

    print_r($fruits);

    ?>

    <?php

    $a = ["Apple", "Mango"];
    $b = ["Banana", "Orange"];

    $result = array_merge($a, $b);

    print_r($result);

    ?>


    <?php
    # convert string to array
    $text = "Apple,Mango,Banana";

    $array = explode(",", $text);

    print_r($array);

    ?>


    <?php
    # convert array to string
    $fruits = ["Apple", "Mango", "Banana"];

    echo implode(", ", $fruits);

    ?>


    <?php

    $user = [
        "name" => "Aditi",
        "age" => 22,
        "city" => "Kanpur"
    ];

    echo $user["name"];

    ?>

    <?php
    # multi dimensional array
    $students = [
        ["Aditi", 22],
        ["Rahul", 21]
    ];

    echo $students[1][0];

    ?>
</body>

</html>