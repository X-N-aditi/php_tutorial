<?php

    // Task 1 simple calc
    // $result = "";

    // if(isset($_POST['calculate'])) {
    //     $x = $_POST['x'];
    //     $y = $_POST['y'];
    //     $expression = $_POST['expression'];

    //     switch ($expression) {
    //         case '+':
    //             $result =  $x + $y;
    //             break;
    //         case '-':
    //             $result =  $x - $y;
    //             break;
    //         case '*':
    //             $result = $x * $y;
    //             break;
    //         case '/':
    //             if ($y == 0) {
    //                 $result = "can not divide by 0";
    //             }else {
    //                 $result = $x/$y;
    //             }
    //             break;
    //         default:
    //             $result = "Select an operator";
    //     }
    // }
    
?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calc</title>
</head>
<body>
    
    <form method="POST">
        Number1: <input type="text" name="x"><br>
        Number2: <input type="text" name="y"><br>
        Expression: <input type="radio" name="expression" value="+">+
            <input type="radio" name="expression" value="-">-
            <input type="radio" name="expression" value="*">*
            <input type="radio" name="expression" value="/">/<br>
        <input type="submit" value="submit" name="calculate">
    </form>

    <h3>result: <?php //echo $result ?></h3>
</body>
</html> -->





<?php

    // task 2 string reverse without strrev
    // $Str = "Hello";
    // for($i = strlen($Str) -1; $i>=0; $i--) {
    //     echo $Str[$i];
    // }
?>



<?php

    // Task -3 check if a number is prime
//     $y = 24;
//     $isPrime = true;

//     if($y <= 1) {
//         $isPrime = false;
//     }else {
//         for($i = 2; $i < $y; $i++) {
//             if($y%$i == 0) {
//                 $isPrime = false;
//                 break;
//             }
//         }
//     }

//     if($isPrime) {
//         echo "prime";
//     }else {
//         echo "not prime";
// }
?>



<?php

    // Task 4 fizz buzz
    // for($i = 1; $i < 21; $i++) {
    //     if($i % 3 == 0 && $i % 5 == 0) {
    //         echo "FizzBuzz<br>";
    //     }else if($i % 5 == 0) {
    //         echo "Buzz<br>";
    //     }else if($i % 3 == 0) {
    //         echo "Fizz<br>";
    //     }else {
    //         echo  $i . "<br>";
    //     }
    // }
?>


<?php

    // Task 5 Number guessing game
    // $output = "";

    // if(isset($_POST['submit'])) {

    //     $result = rand(1, 100);
    //     $user_input = $_POST['user_input'];

    //     if($user_input == $result) {
    //         $output =  "congratualions, you guess correct" . $result . "<br>";
    //     }else {
    //         $output =  "Oops, wrong guess";
    //     }
    // }
?>

<!-- <html>
    <body>
        <form method="POST">
            Input your gusse number: <input type="text" name="user_input"><br>
            <input type="submit" name="submit">
        </form>

        <h2><?php //echo $output ?></h2>
    </body>
</html> -->




<?php 

    // Task 6 multiplication table
    // $result  = "";

    // if(isset($_POST['submit'])) {
    //     $number = $_POST['number'];

    //     for($i = 1; $i <= 10; $i++) {
    //         $result .= "$number * $i = " . ($number * $i) . "<br>";
    //     }
    // }
?>

<!-- <html>
    <body>
        <form method="POST">
            Number: <input type="text" name="number">
            <input type="submit" name="submit">
        </form>

        <h2> <?php //echo $result ?> </h2>
    </body>
</html> -->



<?php 

    // Task 7  even/odd numbers in array
    // $arr = [1, 2, 3, 4, 5, 6, 7, 20, 15, 17, 13, 34, 66, 88];

    // $even = [];
    // $odd = [];
    // for($i = 0; $i < count($arr); $i++) {
    //     if($arr[$i] % 2 == 0) {
    //         array_push($even, $arr[$i]);
    //     }else {
    //         array_push($odd, $arr[$i]);
    //     }
    // }

    // print_r($even);
    // echo "<br>";
    // print_r($odd);
?>

<!-- <?php

    // Task 8 function to validate email 
        // $message = "";
       
        // if(isset($_POST['submit'])) {
        //     $email = trim($_POST['email']);

        //     if(empty($email)) {
        //         $message = "email can not be empty";
        //     }else if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
        //         $message =  "Valid Email";
        //     }else {
        //         $message = "Invalid Email";
        //     }
        // }
    
?>

<html>
    <body>
        <form method="POST">
            Email: <input type="text" name="email" required><br>
            <input type="submit" name="submit">
        </form>
        
        <h2><?php //echo $message; ?></h2>

    </body>
</html> -->



<?php

    // task 10 generate random password
    // function generate_random_pw($length = 12) {

    //     $lowercase = "abcdefghijklmnopqrstuvwxyz";
    //     $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    //     $numbers = "0123456789";
    //     $special = "!@#$%^&*";
    
    //     $pw = $uppercase[random_int(0, strlen($uppercase) -1)] . 
    //             $lowercase[random_int(0, strlen($lowercase) - 1)] . 
    //             $numbers[random_int(0, strlen($numbers) -1)] . 
    //             $special[random_int(0, strlen($special) -1)];

    //     $allChars = $uppercase . $lowercase . $numbers . $special;

    //     for ($i = 4; $i < $length; $i++) {
    //         $pw .= $allChars[random_int(0, strlen($allChars) - 1)];
    //     }

    //     $pw = str_shuffle($pw);

    //     return $pw;
    // }


    // echo generate_random_pw(12);
?>