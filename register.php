<?php
include_once("classes/User.class.php");

if(!empty($_POST)) {
    if(!empty($_POST['email']) && !empty($_POST['fullName']) && !empty($_POST['username']) && !empty($_POST['password']))
        {
            $user = new User();
            $user->Email = $_POST['email'];
            $user->FullName = $_POST['fullName'];
            $user->Username = $_POST['username'];
            $user->Password = $_POST['password'];
            $user->register();

            $feedback = "Thank you for signing up!";
        }
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register on Instagram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<div>
    <a href="#">
        <img id="logo" src="images/logo.png" alt="logo Instagram">
    </a>

    <p id="signUp">Sign up to see photos and videos from your friends.</p>

    <div id="Facebook">
        <img id="logoFacebook" src="images/fb.png" alt="logo Facebook">
        <a id="textFacebook" href="#">Log in with Facebook</a>
    </div>

    <p id="or">OR</p>

</div>

<form action="" method="post"></form>
    <!-- form -->
    <div class="form-group">
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
        <input type="text" name="fullName" class="form-control" id="exampleInputPassword1" placeholder="Full name">
    </div>
    <div class="form-group">
        <input type="text" name="username" class="form-control" id="exampleInputPassword1" placeholder="Username">
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <div id="btnHolder">
    <button id="btnSignUp" type="submit">Sign up</button>
    </div>

</form>

<p id="signUp">By signing up, you agree to our Terms & Privacy Policy.</p>

<p id="signUp">Already signed up? <a href="login.php">Login here.</a></p>

</body>
</html>