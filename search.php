<?php
    include_once ("classes/Post.class.php");
    include_once ("classes/User.class.php");

    /* zoekterm in search bar (form) */
    /* checken of het in een description staat van posts */
    /* overeenkomst? images bij behorende description tonen */



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instagram</title>
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
            <input type="button" value="go" name="submit">
        </form>
    </div>
    <div id="profile">
        <a href="profile.php">
            <img id="logoProfile" src="images/logoProfile.png" alt="">
        </a>
    </div>
    <div>
        <a href="post.php"><img id="createPostBtn" src="images/logoUploa.png" alt=""></a>
    </div>

</header>

<article>
    <div>
        <h3 id="searchResult"><?php echo $_GET['search'] ?></h3>
    </div>
    <div>
        <p id="topPosts">top posts</p>
    </div>
</article>

<article id="article1">
    <div class="imgSearch">
        <a  href=""><img src="images/test.png" alt=""></a>
    </div>
    <div class="imgSearch">
        <a  href=""><img src="images/test.png" alt=""></a>
    </div>
    <div class="imgSearch">
        <a  href=""><img src="images/test.png" alt=""></a>
    </div>
</article>

</body>
</html>
