<?php
    session_start();

    include_once("classes/Post.class.php");
    include_once("classes/User.class.php");

    if(!empty($_POST))
    {
        if(!empty($_FILES["fileToUpload"]))
        {
            $post = new Post();
            $post->Description = $_POST['description'];
            $post->Location = $_POST['location'];
            $post->SaveImage();
        }
    }


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

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

</body>
</html>