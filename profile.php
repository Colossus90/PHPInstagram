<?php
    include ("classes/Search.class.php");
    include_once ("classes/User.class.php");
    include_once ("classes/Post.class.php");

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
            <input id="searchText" type="search" name="search" placeholder="Search for hashtag or location">
        </form>
    </div>
    <!-- instellingen dropdown -->
    <div>
        <a href="settings.php"><img id="createPostBtn" src="images/settings.png" alt=""></a>
    </div>
    <div>
        <a href="post.php"><img id="createPostBtn" src="images/logoUploa.png"></a>
    </div>
    <div>
        <a href="logout.php"><img id="createPostBtn" src="images/logout.png" alt=""></a>
    </div>


</header>

<!-- bovenste strook met profielfoto, naam etc. -->
<article id="info">
    <div id="article1">
        <!-- profielfoto -->
        <img id="profilePic2" src="images/test.png" alt="">
        <!-- naam profielgebruiker -->
        <div><h2>Naam</h2></div>
</div>
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

<!-- foto's op profiel -->
    <article id="article1">
        <a href=""><img id="postsProfile" src="images/test.png" alt=""></a>
    </article>

<script src="js/menu.js"></script>



</body>