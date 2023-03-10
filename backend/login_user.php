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
        while($row = mysqli_fetch_assoc($res)) {
            $con->close();
            session_start();
            echo $row["is_admin"];
            $_SESSION['user_id']= $row["id"];
            $_SESSION['first_name']= $row["first_name"];
            if( $row["is_admin"] == 1){
                header("location:../admin/admin_home.php");
            } else {
                header("location:../user/user_home.php");
            }
        }
        exit();
    } else {
        echo "Error: Email Id/Password is wrong" . $q1 . "<br>" . $con->error;
    }
   
?>

