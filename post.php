<?php

    include_once("classes/post.class.php");
    /*
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
    }
    */


    if(!empty($_POST))
    {
        if(!empty($_POST["postimage"]))
        {
            $post = new Post();
            $post->PostImage = $_FILES['postimage'];
            $post->Description = $_POST['description'];
            $post->Location = $_POST['location'];
            $post->CreatePost();
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
        <input type="file" name="postimage" id="postimage" alt="post-image">
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" alt="description">
        <label for="description">Location:</label>
        <input type="text" name="location" id="location" alt="location">
        <div id="btnHolder">
            <button id="btnPost" type="submit">Create your post!</button>
        </div>
    </form>
</div>

</body>
</html>