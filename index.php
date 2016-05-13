<?php
session_start();

if(isset($_SESSION['loggedin']))
{

}else{
    
    header('location: login.php');
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
        <form action="get">
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

<!-- Hier moet een for each loop komen om alle updates te tonen -->
<section id="updates">
    <article id="updatesArticle">
        <!-- profielfoto, profielnaam, time -->
        <div id="article1">
            <!-- profielfoto -->
            <!-- DIT IS EEN TESTAFBEELDING -->
            <img id="profilePic" src="images/test.png" alt="">
            <!-- naam profiel -->
            <a class="link" id="profileName" href="">name profile</a>
            <!-- tijdstip upload -->
            <p id="time">time</p>
        </div>

        <!-- gepostte foto -->
        <div id="article2">
            <!-- DIT IS EEN TESTAFBEELDING!-->
            <img id="upload" src="images/test.png" alt="">
        </div>

        <!-- namen personen die geliked hebben -->
        <div id="article3">
            <!-- likes -->
            <a class="link" id="likeProfileName" href="">name profile like</a>
            <p id="description"> like this.</p>
            <!-- naam profiel -->
        </div>

        <!-- profielnaam, beschrijving post -->
        <div id="article4">
            <a class="link" id= "profileName" href="">name profile</a>
            <!-- beschrijving post -->
            <p id="description">description post</p>
        </div>

        <!-- like icoon, comment, report -->
        <div id="article5">
            <!-- like icon -->
            <!-- MOET REALTIME MET AJAX! -->
            <a id="likeIcon" href=""></a>

            <!-- MOET REALTIME MET AJAX! -->
            <form id="comment" action="">
                <input id="commentText" type="text" name="comment" placeholder="Add a comment...">
            </form>
        </div>

        <div id="article6">
            <a id="report" href="">Report inappropriate</a>
        </div>

    </article>

</section>


</body>
</html>
