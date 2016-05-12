<?php
    class User {
        private $m_sFullName;
        private $m_sUserName;
        private $m_sEmail;
        private $m_sPassword;

        public function __set($p_sProperty, $p_vValue)
        {

            switch($p_sProperty) {
                case "FullName":
                    $this->m_sFullName = $p_vValue;
                    break;
                case "Email":
                    $this->m_sEmail = $p_vValue;
                    break;
                case "Password":
                    $this->m_sPassword = $p_vValue;
                    break;
                case "Username":
                    $this->m_sUserName = $p_vValue;
                    break;
            }
        }

        public function __get($p_sProperty)
        {
            $vResult = null;
            switch($p_sProperty)
            {
                case "FullName":
                    $vResult = $this->m_sFullName;
                    break;

                case "UserName":
                    $vResult = $this->m_sUserName;
                    break;

                case "Email":
                    $vResult = $this->m_sEmail;
                    break;

                case "Password":
                    $vResult = $this->m_sPassword;
                    break;

            }
            return $vResult;
        }

     public function login()
     {
         $conn = new PDO('mysql:host=localhost;dbname=imdstagram', "root", "root");
         $query = $conn->prepare("SELECT * from users where username = :username");
         $query->bindValue(":username" , $this->m_sUserName);
         $query->execute();

         if($query->rowCount() > 0)
         {
             $result = $query->fetch(PDO::FETCH_ASSOC);
             $password = $this->m_sPassword;
             $hash = $result['password'];

             if(password_verify($password, $hash))
             {
                 return true;
             } else {
                 return false;
             }
         } else {
             return false;
         }

     }


     public function register()
     {

         $conn = new PDO('mysql:host=localhost;dbname=imdstagram', "root", "root");
         $stmt = $conn->prepare("INSERT INTO users (name, username, email, password) values (:name, :username, :email, :password )");
         $stmt->bindValue(":name", $this->FullName);
         $stmt->bindValue(":username", $this->UserName);
         $stmt->bindValue(":email", $this->Email);
         $options = ['cost' => 12 ];
         $password = password_hash($this->m_sPassword, PASSWORD_DEFAULT, $options);
         $stmt->bindValue(":password", $password);
         $stmt->execute();
     }



    }