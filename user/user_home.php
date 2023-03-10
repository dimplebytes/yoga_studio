<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon">
    <title>Yoga Studio</title>

</head>

<body>
<div>

    <div class="header-div">
        <div class="logo-div" id="logo-div">
            <h1>YOGA-Studio</h1>
        </div>
        <div class="button-box" id="button-box">
            <?php
            if (isset($_SESSION['user_id'])) {
                echo "User ID: " . $_SESSION['user_id'] . " User Name: " . $_SESSION['first_name'];
            }
            ?>
            <button type="button" class="toggle-btn" onclick="window.location = './../index.php'">Logout</button>
        </div>
    </div>

    <div class="canvas">
        <div>
            <ul>
                <li><a class="active" href='./user_home.php'> USER HOME </a></li>
                <li><a href='./select_class.php' style="display: block; "> Select Class </a></li>
                <li><a href='./my_classes.php' style="display: block;"> My Classes </a></li>
            </ul>
        </div>
        <div class="content" style="margin-left:25%;padding:1px 16px;height:1000px;">
            Welcome User.
        </div>
    </div>

</div>
<script>

</script>
</body>

</html>
