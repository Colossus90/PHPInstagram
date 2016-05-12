<?php
    include_once("classes/post.class.php");

    if(!empty($_POST))
    {
        if(!empty($_POST["postimage"]))
        {
            $post = new Post();
            $post->PostImage = $_POST['postimage'];
            $post->Description = $_POST['description'];
            $post->Location = $_POST['location'];
            $post->CreatePost();

            $file = fopen("images.txt", "a+");
            $image = $_POST['postimage'];
            fwrite($file, $image . "\n");
            fclose($file);
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