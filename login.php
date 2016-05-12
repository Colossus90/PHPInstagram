<?php
include_once("classes/User.class.php");

if(!empty($_POST)){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $user = new User();
        $user->Username = $_POST['username'];
        $user->Password = $_POST['password'];
        $user->login();
        if($user->login())
        {
            header('location: index.php');
            }
        }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login on Instagram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<div>
    <a href="#">
        <img id="logo" src="images/logo.png" alt="logo Instagram">
    </a>

</div>

<form action="" method="post">
<!-- form -->
<div class="form-group">
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username">
</div>
<div class="form-group">
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>

<p id="forgot"><a href="forgotPassword.php">Forgot password?</a></p>

<div id="btnHolder">
    <button id="btnSignUp" type="submit">Log in</button>
</div>

</form>

<p id="signUp">Don't have an account yet? </br><a href="register.php">Sign up here.</a></p>

</body>
</html>