<?php

$id = $_POST['id'];
$amount = $_POST['amount'];
$class_id = $_POST['class_id'];
$user_id = $_POST['user_id'];

session_start();
$con = mysqli_connect("localhost:3306", "root", "");

mysqli_select_db($con, 'yoga_studio');

$q1 = "insert into payments (id, amount, class_id, user_id)
    values ($id, $amount, $class_id, $user_id)";
echo $q1;

if ($con->query($q1) === TRUE) {
    echo "<br>Payment has been made successfully</br> <a href='./../user/my_classes.php'> Go Home </a>";
} else {
    echo "Error: " . $q1 . "<br>" . $con->error;
}

$con->close();

?>


