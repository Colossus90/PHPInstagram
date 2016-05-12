<?php
    class Post {

        private $m_sImage;
        private $m_sDescription;
        private $m_sLocation;

        public function __set($p_sProperty, $p_vValue)
        {

            switch($p_sProperty) {
                case "PostImage":
                    $this->m_sImage = $p_vValue;
                    break;
                case "Description":
                    $this->m_sDescription = $p_vValue;
                    break;
                case "Location":
                    $this->m_sLocation = $p_vValue;
                    break;
            }
        }

        public function __get($p_sProperty)
        {
            $vResult = null;
            switch($p_sProperty)
            {
                case "PostImage":
                    $vResult = $this->m_sImage;
                    break;

                case "Description":
                    $vResult = $this->m_sDescription;
                    break;

                case "Location":
                    $vResult = $this->m_sLocation;
                    break;


            }
            return $vResult;
        }

        public function CreatePost()
        {
            $conn = new PDO("mysql:host=localhost;dbname=imdstagram", "root", "root");
            $statement = $conn->prepare("INSERT INTO posts (image, description, place) VALUES (:image, :description, :place)");
            $statement->bindValue(":image", $this->m_sImage);
            $statement->bindValue(":description", $this->m_sDescription);
            $statement->bindValue(":place", $this->m_sLocation);
            $statement->execute();
        }
    }

?>