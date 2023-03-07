<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="./../style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon">
    <title>Yoga Studio</title>

</head>

<body>


    <div>

        <div class="header-div">
            <div class="logo-div" id="logo-div">
                <h1>YOGA-Studio</h1>
            </div>
        </div>

        <div class="form-box">
            <div class="class-div" id="register-div" style="display;">
                <form id="register" class="input-group" action="./../backend/class_creation.php" method="post">
					<input id="id" name="id" type="text" class="input-field" placeholder="Class ID" required><br>
					<input id="name" name="name" type="text" class="input-field" placeholder="Name" required><br>
					<input id="description" name="description" type="text" class="input-field" placeholder="Description" required><br>
                    <input id="couch_name" name="couch_name" type="text" class="input-field" placeholder="Couch Name" required><br>
                    <input id="class_time" name="class_time" type="text" class="input-field" placeholder="Class Date Time ex: 2015-04-03 14:00:45" required><br>
                    <input id="max_group_count" name="max_group_count" type="text" class="input-field" placeholder="Max Group Size" required><br>
                    <input id="fees" name="fees" type="text" class="input-field" placeholder="Fees" required><br>
                    <button type="submit" class="submit-btn">Create Class</button>
                </form>
            </div>
        </div>
    </div>
    <script>

    </script>
</body>

</html>
