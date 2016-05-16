<?php

session_start();

if(isset($_SESSION['loggedin']))
{

}else{

    header('location:login.php');
}

include_once("classes/Search.class.php");
include_once("classes/Post.class.php");
include_once("classes/Comment.class.php");
include_once("classes/User.class.php");

if(!empty($_POST["comment"]))
{

    $comment->comment = $_POST['comment'];
    $comment->postId = $_POST['postid'];
    $comment->SaveComment();
}


if(!empty($_FILES["fileToUpload"]))
{
    $post = new Post();
    $post->Description = $_POST['description'];
    $post->Location = $_POST['location'];
    $post->SaveImage();

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

<div id="posts">
    <!-- posts -->
    <form action="" method="post" enctype="multipart/form-data">
        <label for="postimage">Select your image:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" alt="post-image">
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" alt="description">
        <label for="Location">Location:</label>
        <input type="text" name="location" id="location" alt="location">
        <div id="btnHolder">
            <button id="btnPost" type="submit">Create your post!</button>
        </div>
    </form>
</div>

<section id="updates">
    <!-- <?php foreach($post as $p): ?> -->
    <article id="updatesArticle">
        <div id="article1">
            <a class="link" id="profileName" href="profile.php?user=<?php echo $p['name'];?>"><?php echo $p['name'];?></a>
            <p id="time"><?php echo $p['location'];?></p>
        </div>

        <div id="article2">
            <img id="upload" src="<?php echo $p['image'];?>" alt="<?php echo $p['image'] ?>">
            <p id="description"><?php echo $p['description'];?></p>
        </div>

        <div id="article5">
            <!-- <a id="likeIcon" href=""></a> -->
            <ul>
                <?php $getcomment = new Comment();?>
                <?php $getcomment = $getcomment->GetComments();?>
                <?php foreach($getcomment as $gc): ?>
                <li><a href="profile.php?user=<?php $gc['name']; ?>"><?php $gc['name']; ?></a><?php echo $gc['comment']; ?></li>
                <?php endforeach; ?>
            </ul>
            <form id="comment" action="" method="post" enctype="multipart/form-data">
                <input id="commentText" type="text" name="comment" placeholder="Add a comment...">
                <input type="hidden" name="postid" value="<?php echo $p['id']?>" >
                <input type="hidden" name="userid" value="<?php $_SESSION['id']?>" >
                <input type="submit" value="Submit comment" name ="btnComment">
            </form>

        </div>

        <div id="article6">
            <a id="report" href="">Report inappropriate</a>
        </div>
    </article>
    <?php endforeach; ?>


</section>


</body>
</html>
