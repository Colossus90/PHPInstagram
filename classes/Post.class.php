<?php
    class Post {

        private $m_sDescription;
        private $m_sLocation;

        public function __set($p_sProperty, $p_vValue)
        {

            switch($p_sProperty) {

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

                case "Description":
                    $vResult = $this->m_sDescription;
                    break;

                case "Location":
                    $vResult = $this->m_sLocation;
                    break;


            }
            return $vResult;
        }

        public function SaveImage()
        {
            $target_dir = "uploads/";
            $tmp = explode("." , $_FILES['fileToUpload']['name']);
            $target_ext = end($tmp);
            if( $target_ext == "jpg" || $target_ext == "png" || $target_ext == "jpeg" || $target_ext == "gif")
            {
                $target_tempname = $_SESSION['id'] . "-" . time() . "-" . $_FILES['fileToUpload']['name'];
                if(!file_exists($target_dir . $target_tempname)){
                    if((move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_dir . $target_tempname))){
                        //file is geupload
                    } else {
                        echo " A problem occured during file upload.";
                    }
                }
            }

            $conn = new PDO('mysql:host=localhost;dbname=imdstagram', "root", "root");
            $stmt = $conn->prepare("INSERT INTO posts (posttime, place, image, fk_users_id, description)
            VALUES (:posttime, :location ,:image ,:iduser, :description)");
            $stmt->bindValue(":posttime", date("Y-m-d H-i-sa"));
            $stmt->bindValue(":location", $this->m_sLocation);
            $stmt->bindValue(":image", $target_dir . $target_tempname);
            $stmt->bindValue(":iduser", $_SESSION['id']);
            $stmt->bindValue(":description", $this->m_sDescription);
            $stmt->execute();
        }
    }

?>