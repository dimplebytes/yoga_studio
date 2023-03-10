<?php

session_start();
$con = mysqli_connect("localhost:3306", "root", "1234");

mysqli_select_db($con, 'yoga_studio');

$q1 = "delete from payments where id =" . $_GET['id'] . ";";
echo $q1;

if ($con->query($q1) === TRUE) {
    echo "<br>Payment has been made successfully</br> <a href='../admin/delete_payment.php'> Go Home </a>";
} else {
    echo "Error: " . $q1 . "<br>" . $con->error;
}

$con->close();

?>


