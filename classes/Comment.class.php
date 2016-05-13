<?php

include_once("User.class.php");
include_once("Post.class.php");

    class Comment {
        var $m_iCommentId;
        var $m_sComment;
        var $m_iUserId;
        var $m_iPostId;

        public function __set($p_sProperty, $p_vValue)
        {
            switch($p_sProperty)
            {

                case "comment":
                    $this->m_sComment = $p_vValue;
                    break;

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

            }
            return $vResult;
        }

        public function SaveComment()
        {
            $conn = new PDO('mysql:host=localhost;dbname=imdstagram', "root", "root");
            $stmt = $conn->prepare('INSERT INTO comments (comment,  fk_users_id,  fk_posts_id) VALUES (:comment, :userid, :postid)');
            $stmt->bindValue(":comment", $this->m_sComment);
            $stmt->bindValue(":userid", $_SESSION['id']);

        }

    }
?>