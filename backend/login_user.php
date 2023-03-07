<?php
    
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];

    // echo $email_id;
    // echo $password;

    $con = mysqli_connect("localhost:3306", "root", "1234");
    
    mysqli_select_db($con, 'yoga_studio');

    $q1 = "select * from users u where u.email_id= '$email_id' and u.password='$password'";

    $res = mysqli_query($con, $q1);

    if (mysqli_num_rows($res) == 1) {
        $con->close();
        session_start();
        header("location:./../select_class.php");
        exit();
    } else {
        echo "Error: Email Id/Password is wrong" . $q1 . "<br>" . $con->error;
    }
   
?>

