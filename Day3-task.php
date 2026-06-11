<?php
    // task 1  sort list users by name
    // $users = ["Nischay", "Amartyansh", "Sunaina", "Aditi"];

    // function sort_users_by_name(&$users, $n) {
    //     if ($n <= 1) {
    //         return;
    //     }

    //     for ($i = 0; $i < $n - 1; $i++) {

    //         if ($users[$i] > $users[$i + 1]) {

    //             $temp = $users[$i];
    //             $users[$i] = $users[$i + 1];
    //             $users[$i + 1] = $temp;
    //         }
    //     }
    //     sort_users_by_name($users, $n - 1);
    // }

    // sort_users_by_name($users, count($users));

    // print_r($users);
?>




<?php

    // task 2 flatten array
    // $arr = [1, [2, 3], [4, [5, 6]], 7];

    // function flatten_arr(&$arr, &$result) {
    //     foreach($arr as $item) {
    //         if(is_array($item)) {
    //             flatten_arr($item, $result);
    //         }else {
    //             $result[] = $item;
    //         }
    //     }
    // }

    // $result = [];
    // flatten_arr($arr, $result);
    // print_r($result);
?>



<?php

    // task 3 find duplicate in array

    // $arr = [22, 14, 65, 78, 23, 43, 24, 56, 43];
    // $seen = [];

    // for($i = 1; $i < count($arr); $i++) {
    //     if(in_array($arr[$i], $seen)){
    //         echo "duplicate : " . $arr[$i] . "<br>";
    //     }else {
    //         $seen[] = $arr[$i];
    //     }
    // }
?>



<?php

$errors = [];
$success = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    if (empty($name)) {
        $errors[] = "Name is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email";
    }

    if (empty($subject)) {
        $errors[] = "Subject is required";
    }

    if (empty($message)) {
        $errors[] = "Message is required";
    } elseif (strlen($message) < 10) {
        $errors[] = "Message must be at least 10 characters";
    }

    if (empty($errors)) {
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $subject = htmlspecialchars($subject);
        $message = htmlspecialchars($message);

        $success = "Form submitted successfully!";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

    <h2>Contact Form</h2>

    <?php
    if (!empty($errors)) {
        echo "<ul>";

        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }

        echo "</ul>";
    }
    ?>

    <?php if ($success): ?>
        <h3><?php echo $success; ?></h3>
    <?php endif; ?>

    <form method="POST">

        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        Subject: <input type="text" name="subject"><br>
        Message: <textarea name="message"></textarea><br>

        <input type="submit" value="Send">
    </form>

    <h2>Submitted Data</h2>
    <?php
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Subject: " . $subject . "<br>";
    echo "Message: " . $message . "<br>";
    ?>

</body>
</html>