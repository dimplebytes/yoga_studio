<?php

    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $couch_name = $_POST['couch_name'];
    $class_time = $_POST['class_time'];
    $fees = $_POST['fees'];
    $max_group_count = $_POST['max_group_count'];

    session_start();
    $con = mysqli_connect("localhost:3306", "root", "1234");

    mysqli_select_db($con, 'yoga_studio');

    $q1 = "insert into classes (id, name, descrition, couch_name, class_time, fees, max_group_count)
    values ($id, '$name', '$description', '$couch_name', '$class_time', $fees, $max_group_count)";
    echo $q1;

    if ($con->query($q1) === TRUE) {
        echo "<br>New Class created successfully</br> <a href='../admin/admin_home.php'> Go Home </a>";
    } else {
        echo "Error: " . $q1 . "<br>" . $con->error;
    }

    $con->close();

?>


