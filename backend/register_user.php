<?php
    
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $mobile = $_POST['mobile'];
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];

    echo $id;
    echo $first_name;
    echo $mobile;
    echo $email_id;
    echo $password;

    session_start();
    $con = mysqli_connect("localhost:3306", "root", "1234");
    
    mysqli_select_db($con, 'yoga_studio');

    $q1 = "insert into users (id, first_name, mobile, email_id, password) values ($id, '$first_name', '$mobile', '$email_id', '$password')";
    echo $q1;

    if ($con->query($q1) === TRUE) {
        echo "<br>New user created successfully</br> <a href='./../index.php'> Go Home </a>";
    } else {
        echo "Error: " . $q1 . "<br>" . $con->error;
    }

    $con->close();

    // 

    // $res = mysqli_query($l, "select * from `user_registration` where`username`='" . $username . "' and `password`='" . $password . "'");
    // if (mysqli_num_rows($res) > 0) {
    //     header("location:welcome.php");
    //     exit();
    // } else {
    //     ;
    // }
?>

<!-- <script>
    alert("login successfull");
    window.location = "Login.php";
</script> -->

