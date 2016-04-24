<?php
session_start();
if(isset($_SESSION["username"])){
    header("Location: index.php");
}

if(isset($_POST['logoutButton']))
{
    // echo "logout";
    session_start();
    session_destroy();
}
if(isset($_POST['loginButton']))
{
    // start them engines!
    session_start();
    // store session data
    $_SESSION["Username"] = "user1";
    $_SESSION["UserId"] = 1;

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="setup.css"
    <title></title>
</head>
<body>
    <div class="containter-fluid">
        <div class="col-md-4 well col-md-offset-3">
            <h1>Login</h1>

            <form method="POST" action="login.php">
                <div class="form-group">
                    <label for="exampleInputUsername1">User name</label>
                    <input type="email" class="form-control" id="exampleInputUsername1" placeholder="User name" name="username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn btn-default" name="loginButton">Submit</button>
            </form>
        </div>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="jquery-2.2.3.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="test.js"></script>
</body>
</html>
