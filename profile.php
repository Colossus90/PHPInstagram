<?php
    include_once ("classes/User.class.php");
    include_once ("classes/Post.class.php");

    $link = new mysqli("localhost", "root", "root");
    $link->select_db("imdstagram") or die("Databank kon niet geselecteerd worden.");

    $query = "SELECT name FROM users;";
    $result = $link->query($query);

    $link->close();

?>

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
        <form action="search.php" method="get">
            <input id="searchText" type="search" name="search" placeholder="Search">
        </form>
    </div>
    <!-- instellingen dropdown -->
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn" alt=""></button>
        <div id="myDropdown" class="dropdown-content">
            <a href="settings.php">Change personal settings</a>
            <a href="login.php">Logout</a>
        </div>
        <div>
            <a href="post.php"><img id="createPostBtn" src="images/logoUploa.png" alt=""></a>
        </div>
    </div>

</header>

<!-- bovenste strook met profielfoto, naam etc. -->
<article id="info">
    <div id="article1">
        <!-- profielfoto -->
        <img id="profilePic2" src="images/test.png" alt="">
        <!-- naam profielgebruiker -->
        <h2><?php echo $_SESSION["name"]; ?></h2>
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

<!-- foto's op profiel -->
    <article id="article1">
        <a href=""><img id="postsProfile" src="images/test.png" alt=""></a>
    </article>

<script src="js/menu.js"></script>



</body>