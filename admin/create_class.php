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
            <a href="../website/index.html"> <h1>YOGA-Studio</h1></a>
        </div>
        <div class="button-box" id="button-box">
            <?php
            session_start();
            $_SESSION['user_id']= '1';
            $_SESSION['first_name']= 'Admin';
            if (isset($_SESSION['user_id'])) {
                echo "User ID: " . $_SESSION['user_id'] . " User Name: " . $_SESSION['first_name'];
            }
            ?>
            <button type="button" class="toggle-btn" onclick="window.location = './../website/index.html'">Logout</button>
        </div>
    </div>

    <div class="canvas">
        <div class="side-menu">
            <ul>
                <li><a href='admin_home.php' class="active"> ADMIN HOME </a></li>
                <li><a href='create_class.php'> Create Class </a></li>
                <li><a href='show_users.php'> Show Users </a></li>
                <li><a href='show_classes.php'> Show Classes </a></li>
                <li><a href='delete_payment.php'> Show/Delete Payment </a></li>
            </ul>
        </div>
        <div class="content" style="margin-left:25%;padding:1px 16px;height:1000px;">
            <div class="form-box">
                <div class="class-div" id="register-div" style="display;">
                    <form id="register" class="input-group" action="../backend/create_class.php" method="post">
                        <input id="id" name="id" type="text" class="input-field" placeholder="Class ID" required><br>
                        <input id="name" name="name" type="text" class="input-field" placeholder="Name" required><br>
                        <input id="description" name="description" type="text" class="input-field"
                               placeholder="Description" required><br>
                        <input id="couch_name" name="couch_name" type="text" class="input-field"
                               placeholder="Couch Name" required><br>
                        <input id="class_time" name="class_time" type="text" class="input-field"
                               placeholder="DateTime Ex:2015-04-03 14:00:45" required><br>
                        <input id="max_group_count" name="max_group_count" type="text" class="input-field"
                               placeholder="Max Group Size" required><br>
                        <input id="fees" name="fees" type="text" class="input-field" placeholder="Fees" required><br>
                        <button type="submit" class="submit-btn">Create Class</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
<script>

</script>
</body>

</html>
