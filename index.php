<!DOCTYPE html>
<html>
<head>
    <title>My First PHP Website</title>
</head>
<body>

    <h1>Hello Aditi 👋</h1>

    <?php
        echo "<p>PHP is working successfully!</p>";
    ?>

    <?php
    // single line comment 1
    # single line comment 2
    /*
    multi
    line 
    comment
    */
    ?>

    <?php 
    $name = "Unknown user";
    $age= 123;

    echo "My name is $name and my age is $age";
    ?>


    <?php

    // local varible
    function sum() {
        $x = 20;
        echo "the value of x is $x<br>";
    };
    sum();

    # global scope
    // $y = 40;
    // function myTst() {
    //     echo "the value of y is:  $y";
    // }
    // mytst();


    // static scope
    function myTest() {
        static $x = 0; // static scope
        echo "$x<br>";
        $x++;
    }
    myTest();
    myTest();
    ?>

    
    <?php
    // php data-types

    # string
    $fullName = "Anonymous user";
    echo "user full name is $fullName<br>";
    var_dump($fullName);

    # int
    $z = 200;
    echo "the value of z is : $z<br>";
    var_dump($z);

    # float 
    $m = 10.13;
    echo "the value of m is $m<br>";
    var_dump($m);

    # bool
    $isAdmin = true;
    echo "are you admin $isAdmin<br>";
    var_dump($isAdmin);

    # array 
    $fruits = ["apple", "banana", "pineapple"];
    foreach($fruits as $i){
        echo " the fruits name is $i<br>";
    }
    var_dump($fruits);

    # object
    class Car {
        public $brand;
        public function __construct($brand) {
            $this->brand = $brand;
        }

        public function msg() {
            echo "the car brand name is $this->brand<br>";
        }
    }
    $myCar = new Car("toyato");
    var_dump($myCar);


    # null
    $alpha = null;
    var_dump($alpha);
    ?>


    <?php
    $color = "red color";
    $product = "car";
    echo strlen($color);
    echo str_contains($color, "red");
    echo str_word_count($color);
    echo str_starts_with($color, "r");
    echo str_ends_with($color, "r");
    echo strtoupper($color);
    echo str_replace("red", "pink", $color);
    echo strrev($color);    // used for reverse string
    // The explode() function splits a string into an array.

    // for adding two string in php use .
    echo $color . " " . $product;


    // slicing
    $xm = "Hello World!";
    echo substr($xm, -5, 3);


    // casting
    $season = (String) 4;
    var_dump($season);

    ?>


    <?php
    # if else and elseif statement
    if(5 > 5) {
        echo "have a good day<br>";
    }elseif(5 == 5) {
        echo "have a good evening<br>";
    }else {
        echo "have a good night";
    }
    ?>



    <?php
    $favColor = "blue";

    switch($favColor) {
        case "red":
            echo "Your fav color is red";
            break;
        case "blue":
            echo "your fav color is blue<br>";
            break;
        case "yellow":
            echo "your fav color is yellow";
            break;
        default:
        echo "your fav color is black";
    }
    ?>


    <?php
    $favFruit = "guava";

    $text = match($favFruit) {
        "apple" => "your fav fruits is apple",
        "banana" => "your fav fruits is banana",
        "guave" => "your fav fruit is guava<br>",
        default => "fav fruits is mango",
    };
    echo $text;
    ?>

        <a href="Day2.php">Go to Day2 Page</a>

</body>
</html>