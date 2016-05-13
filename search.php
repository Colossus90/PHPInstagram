<?php
    include_once ("classes/Like.class.php");
    include_once ("classes/Comment.class.php");
    include_once ("classes/Post.class.php");
    include_once ("classes/User.class.php");
    include_once ("classes/Following.class.php");
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
        </form>
    </div>
    <div id="profile">
        <a href="profile.php">
            <img id="logoProfile" src="images/logoProfile.png" alt="">
        </a>
    </div>
    <div>
        <a href="post.php"
           onclick="return !window.open(this.href, 'Create a post', 'width=500,height=700')"
           target="_blank">Create a post!</a>
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
