<?php

include_once("User.class.php");
include_once("Post.class.php");

    class Comment {
        private $m_sComment;
        private $m_iPostId;

        public function __set($p_sProperty, $p_vValue)
        {
            switch($p_sProperty)
            {

                case "comment":
                    $this->m_sComment = $p_vValue;
                    break;

                case "postId":
                    $this->m_iPostId = $p_vValue;

            }
        }

        public function __get($p_sProperty)
        {
            $vResult = null;
            switch($p_sProperty)
            {

                case "comment":
                    $vResult = $this->m_sComment;
                    break;

                case "postId":
                    $vResult = $this->m_iPostId;
                    break;

            }
            return $vResult;
        }

        public function SaveComment()
        {
            $conn = new PDO('mysql:host=localhost;dbname=imdstagram', "root", "root");
            $stmt = $conn->prepare('INSERT INTO comments (comment,  fk_users_id,  fk_posts_id) VALUES (:comment, :userid, :postid)');
            $stmt->bindValue(":comment", $this->m_sComment);
            $stmt->bindValue(":userid", $_SESSION['id']);
            $stmt->bindValue(":postid", $this->m_iPostId);
        }

        public function GetComments($thispost)
        {
            $conn = new PDO('mysql:host=localhost;dbname=imdstagram', "root", "root");
            $stmt = $conn->prepare('SELECT * FROM comments LEFT OUTER JOIN posts ON comments.fk_posts_id=posts.id
            LEFT OUTER JOIN users ON comments.fk_user_id=users.id WHERE posts.fk_posts.id = :postId');
            $stmt->bindValue(":postId", $thispost);
            $stmt->exeute();
            $result = $stmt->fetchAll();
            return $result;
        }

    }
?>