<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon">
    <title>Yoga Studio</title>

</head>

<body>


    <div class="Main">

        <div class="header-div">
            <div class="logo-div" id="logo-div">
                <h1>YOGA-Studio</h1>
            </div>
            <div class="button-box" id="button-box">
                <button type="button" class="toggle-btn" onclick="logout()">Logout</button>
            </div>
        </div>


    </div>
    <script>
        function logout(){
            window.location="./index.php";
        }
    </script>
</body>

</html>