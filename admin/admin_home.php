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
                if(isset($_SESSION['user_id'])) {
                    echo "User ID: " . $_SESSION['user_id'] . " User Name: " .$_SESSION['first_name'];
                }
                ?>
                <button type="button" class="toggle-btn" onclick="window.location = './../index.php'">Logout</button>
            </div>
        </div>

        <div style="margin: 0;">
            <div class="side-menu">
                <ul>
                    <li><a class="active"> ADMIN HOME </a></li>
                    <li><a href='create_class.php'> Create Class </a></li>
                    <li><a href='show_users.php'> Show Users </a></li>
                    <li><a href='show_users.php'> Show Users </a></li>
                    <li><a href='delete_payment.php'> Show/Delete Payment </a></li>
                </ul>
            </div>
            <div class="content" style="margin-left:25%;padding:1px 16px;height:1000px;">
                    Welcome ADMIN.
            </div>
        </div>

    </div>
    <script>

    </script>
</body>

</html>
