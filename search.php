<?php

    // connecteren
    include("classes/Search.class.php");
    include("classes/Post.class.php");

    if(!isset($_GET['search'])) {
        header('location:index.php');
    }

    $search_sql = "SELECT * FROM posts where description LIKE '%".$_GET['search']."%' OR place LIKE '%".$_GET['search']."%'";
    $search_query = mysqli_query($db_connect,$search_sql);
    if(mysqli_num_rows($search_query)!=0) {
        $search_rs = mysqli_fetch_assoc($search_query);
    }

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
            <input id="searchText" type="text" name="search" placeholder="Search for hashtag or location" maxlength="50">
            <input type="submit" value="Go" name="submit">
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
    <div>
        <a href="logout.php"><img id="createPostBtn" src="images/logout.png" alt=""></a>
    </div>

</header>

<div>
    <p id="topPosts">Top posts</p>
    <h3 id="searchResult"><?php echo $_GET['search']; ?></h3>
    <?php if(mysqli_num_rows($search_query)!=0) {
        do {
            ?>
            <img id="searchResultImg" src="<?php echo $search_rs['image'] ?>" >
            <p><?php echo $search_rs['posttime'] ?></p>
        <?php } while ($search_rs = mysqli_fetch_assoc($search_query));
    }
    else {
        echo "No results found.";

    } ?>
</div>


</body>
</html>
