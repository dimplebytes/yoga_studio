<?php
session_start();
include("./../backend/get_class.php");
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
        <h1>YOGA-Studio</h1>
    </div>
    <div class="button-box" id="button-box">
        <?php
        if(isset($_SESSION['user_id'])) {
            echo "User ID: " . $_SESSION['user_id'] . " User Name: " .$_SESSION['first_name'];
        }
        ?>
        <button type="button" class="toggle-btn" onclick="window.location = './../website/index.html'">Logout</button>
    </div>
</div>

<div class="canvas">
    <div class="side-menu">
        <ul>
            <li><a class="active"> ADMIN HOME </a></li>
            <li><a href='create_class.php'> Create Class </a></li>
            <li><a href='show_users.php'> Show Users </a></li>
            <li><a href='show_classes.php'> Show Classes </a></li>
            <li><a href='delete_payment.php'> Show/Delete Payment </a></li>
        </ul>
    </div>
    <div class="content" style="margin-left:25%;padding:1px 16px;height:1000px;">
        <div class="row">
            <div class="col-sm-8">
                <?php echo $deleteMsg??''; ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Class Name</th>
                            <th>Description</th>
                            <th>Couch Name</th>
                            <th>Class Time</th>
                            <th>Fees</th>
                            <th>Max Group Count</th>

                        </thead>
                        <tbody>
                        <?php
                        if(is_array($fetchData)){
                            $sn=1;
                            foreach($fetchData as $data){
                                ?>
                                <tr>
                                    <td><?php echo $data['id']??''; ?></td>
                                    <td><?php echo $data['name']??''; ?></td>
                                    <td><?php echo $data['descrition']??''; ?></td>
                                    <td><?php echo $data['couch_name']??''; ?></td>
                                    <td><?php echo $data['class_time']??''; ?></td>
                                    <td><?php echo $data['fees']??''; ?></td>
                                    <td><?php echo $data['max_group_count']??''; ?></td>
                                </tr>
                                <?php
                                $sn++;}}else{ ?>
                        <tr>
                            <td colspan="8">
                                <?php echo $fetchData; ?>
                            </td>
                        <tr>
                            <?php
                            }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
