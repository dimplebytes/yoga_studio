<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="header-div">
    <div class="logo-div" id="logo-div">
        <a href="../website/index.html"> <h1>YOGA-Studio</h1></a>
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

<div>
    <ul>
        <li><a href='./user_home.php'  class="active" href='./user_home.php'> USER HOME </a></li>
        <li><a href='./select_class.php' style="display: block; "> Select Class </a></li>
        <li><a href='./my_classes.php' style="display: block;"> My Classes </a></li>
    </ul>
</div>
<div class="content" style="margin-left:25%;padding:1px 16px;height:1000px;">

        <div class="row">
            <div class="form-box" >
                <div class="class-div" id="login-div">
                    <form id="payment" class="input-group" action="./../backend/create_payment.php" method="post">
                        <input id="id" name="id" type="text" class="input-field" placeholder="Payment Id" required><br>
                        <input id="user_id" name="user_id" type="text" class="input-field"
                               value="<?php echo $_SESSION['user_id']; ?>"
                               placeholder="User Id" required><br>
                        <input id="class_id" name="class_id" type="text" class="input-field"
                               value="<?php echo htmlspecialchars($_GET["class_id"]); ?>"
                               placeholder="Email Id" required><br>
                        <input id="amount" name="amount" type="tet" class="input-field"
                               value="<?php echo htmlspecialchars($_GET["amount"]); ?>"
                               placeholder="Enter Amount" required><br>
                        <button type="submit" class="submit-btn">Pay</button>
                    </form>
                </div>
            </div>
        </div>
</div>
</body>
</html>
