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


    <div>

        <div class="header-div">
            <div class="logo-div" id="logo-div">
                <h1>YOGA-Studio</h1>
            </div>
            <div class="button-box" id="button-box">
                <button type="button" class="toggle-btn" onclick="showLogin()">Login</button>
                <button type="button" class="toggle-btn" onclick="showRegister()">Register</button>
            </div>
        </div>

        <div class="form-box">

            <div class="login-div" id="login-div" style="display:none;">
                <form id="login" class="input-group" action="./backend/login_user.php" method="post">
                    <input id="email_id" name="email_id" type="text" class="input-field" placeholder="Email Id" required><br>
                    <input id="password" name="password" type="password" class="input-field" placeholder="Enter Password" required><br>
                    <button type="submit" class="submit-btn">Login In</button>
                </form>
            </div>

            <div class="register-div" id="register-div" style="display:none;">
                <form id="register" class="input-group" action="./backend/register_user.php" method="post">
					<input id="id" name="id" type="text" class="input-field" placeholder="User ID" required><br>
					<input id="first_name" name="first_name" type="text" class="input-field" placeholder="First Name" required><br>
					<input id="mobile" name="mobile" type="text" class="input-field" placeholder="Phone Number" required><br>
                    <input id="email_id" name="email_id" type="email" class="input-field" placeholder="Email Id" required><br>
                    <input id="password" name="password" type="password" class="input-field" placeholder="Enter password" required><br>
                    <input type="checkbox" class="check-box"><span>I Agree to The Term & Condition</span><br>
                    <button type="submit" class="submit-btn">Register</button>
                </form>
            </div>
        </div>
    </div>
    <script>
		function showLogin() {
			var x = document.getElementById("login-div");
			var y = document.getElementById("register-div");
			x.style.display = "flex";
			y.style.display = "none";
		}

		function showRegister() {
			var x = document.getElementById("login-div");
			var y = document.getElementById("register-div");
			x.style.display = "none";
			y.style.display = "flex";
		}
    </script>
</body>

</html>
