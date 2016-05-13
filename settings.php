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
    <div id="changeSettingsTitle">
        <h3>Change personal settings</h3>
    </div>
    <!-- instellingen dropdown -->
    <div id="doneBtn">
        <!-- function save settings -->
        <a id="doneBtnText" href="profile.php">Done</a>
    </div>

</header>

<!-- bovenste strook met profielfoto, naam etc. -->
<article id="info">
    <div id="article1">
        <form action="" method="post">
            <!-- update/insert into database! -->
            <!-- extra kolommen in db user: avatar, description,  -->
            <div class="formSettings">
                <label for="avatar">Upload profile picture </label>
                <input type="file" class="formSettingsControl" name="avatar" id="avatar">
            </div>
            <div class="formSettings">
                <input type="text" class="formSettingsControl" name="username" id="username" placeholder="Username">
            </div>
            <div class="formSettings">
                <input type="email" class="formSettingsControl" name="email" id="email" placeholder="Email">
            </div>
            <div class="formSettings">
                <input type="text" class="formSettingsControl" name="description" id="description" placeholder="Description">
            </div>
            <div class="formSettings">
                <input type="password" class="formSettingsControl" name="password" id="password" placeholder="Password">
            </div>
        </form>
    </div>

</article>

</body>