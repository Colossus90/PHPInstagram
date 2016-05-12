<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- naam van gebruiker in title -->
    <title>Change personal settings</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>

    <a href="index.php">
        <img id="logo2" src="images/logo.png" alt="">
    </a>
    <div>
        <h3 id="changeSettingsTitle">Change personal settings</h3>
    </div>
    <!-- instellingen dropdown -->
    <div class="dropdown">
        <!-- function save settings -->
        <a href="profile.php">Done</a>
    </div>

</header>

<!-- bovenste strook met profielfoto, naam etc. -->
<article id="info">
    <div id="article1">
        <form action="" method="post">
            <!-- update/insert into database! -->
            <!-- extra kolommen in db user: avatar, description,  -->
            <label for="avatar">Upload profile picture </label>
            <input type="file" name="avatar" id="avatar">
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="email" name="email" id="email" placeholder="Email">
            <input type="text" name="description" id="description" placeholder="Description">
            <input type="password" name="password" id="password" placeholder="Password">
        </form>
    </div>

</article>

</body>