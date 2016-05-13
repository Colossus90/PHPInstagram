<?php

include_once("Db.class.php");

    class Like {
        var $m_iLikeId;
        var $m_iPostId;
        var $m_iUserId;
        var $m_dTime;

        public function __set($p_sProperty, $p_vValue)
        {
            switch($p_sProperty)
            {

                case "like":
                    $this->
            }
        }
                case "Like":
                    $this->m_iLikeId = $p_vValue;
                    break;
            }
        }

        public function __get($p_sProperty)
        {
            $vResult = null;
            switch($p_sProperty)
            {
                case "Like":
                    $vResult = $this->m_iLikeId;
                    break;
            }
            return $vResult;
        }

        public function Save()

        {
            $db = Db::getInstance();

            $table = "likes";
            $values = array($this->like);
            $db->insert($table, $values);
        }

        public function GetLikes()
        {
            $db = Db::getInstance();

            $cols = array("*");
            $table = "likes";

            $rResult = $db->select($cols, $table);
            return $rResult;
        }
    }
?>