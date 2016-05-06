<?php

include_once("Db.class.php");

    class Comment {
        var $m_iCommentId;
        var $m_sComment;
        var $m_iUserId;
        var $m_iPostId;

        public function __set($p_sProperty, $p_vValue)
        {
            switch($p_sProperty)
            {
                case "commentId":
                    $this->m_iCommentId = $p_vValue;
                    break;

                case "comment":
                    $this->m_sComment = $p_vValue;
                    break;

                case "userId":
                    $this->m_iUserId = $p_vValue;
                    break;

                case "postId":
                    $this->m_iPostId = $p_vValue;
                    break;
            }
        }

        public function __get($p_sProperty)
        {
            $vResult = null;
            switch($p_sProperty)
            {
                case "commentId":
                    $vResult = $this->m_iCommentId;
                    break;

                case "comment":
                    $vResult = $this->m_sComment;
                    break;

                case "userId":
                    $vResult = $this->m_iUserId;
                    break;

                case "postId":
                    $vResult = $this->m_iPostId;
                    break;
            }
            return $vResult;
        }

        public function Save()
        {
            $db = Db::getInstance();

            $table = "comments";
            $cols = array("comments");
            $values = array($this->comment);
            $db->insert($table, $cols, $values);
        }

        public function GetComments()
        {
            $db = Db::getInstance();

            $cols = array("*");
            $table = "comments";
            $orderBy = "id";
            $orderHow = "DESC";

            $rResult = $db->select($cols, $table, $orderBy, $orderHow);
            return $rResult;
        }
    }
?>