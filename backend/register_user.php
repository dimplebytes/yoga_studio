<?php

    
    $first_name = $_POST['first_name'];
    $mobile = $_POST['mobile'];
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];

    
    echo $first_name;
    echo $mobile;
    echo $email_id;
    echo $password;

    session_start();
    $con = mysqli_connect("localhost:3306", "root", "");

    mysqli_select_db($con, 'yoga_studio');

    $q1 = "insert into users (first_name, mobile, email_id, password) values ('$first_name', '$mobile', '$email_id', '$password')";
    echo $q1;

    if ($con->query($q1) === TRUE) {
        echo "New user created successfully";
    } else {
        echo "Error: " . $q1 . "<br>" . $con->error;
    }

    $con->close();

?>