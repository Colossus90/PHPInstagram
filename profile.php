<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- naam van gebruiker in title -->
    <title>Gebruiker</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>

    <a href="index.php">
        <img id="logo2" src="images/logo.png" alt="">
    </a>
    <div id="search">
        <form action="get">
            <input id="searchText" type="search" name="search" placeholder="Search">
        </form>
    </div>
    <!-- instellingen dropdown -->
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn"></button>
        <div id="myDropdown" class="dropdown-content">
            <a href="settings.php">Change personal settings</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

</header>

<!-- bovenste strook met profielfoto, naam etc. -->
<article id="info">
    <div id="article1">
        <!-- profielfoto -->
        <img id="profilePic2" src="images/test.png" alt="">
        <!-- naam profielgebruiker -->
        <h2>name profile</h2>
    </div>

    <!-- beschrijving op profiel -->
    <div>
        <p id="description2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>

    <!-- aantal posts, followers, following -->
    <div id="article3">
        <!-- count -->
        <p id="countPosts" class="count"><strong>x</strong> posts</p>
        <p id="countFollowers" class="count"><strong>x</strong> followers</p>
        <p id="countFollowing" class="count"><strong>x</strong> following</p>
    </div>

</article>

<script src="js/menu.js"></script>

</body>