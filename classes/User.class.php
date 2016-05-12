<?php
    class User {
        var $m_iUserId;
        var $m_sFirstName;
        var $m_sLastName;
        var $m_sEmail;
        var $m_sPassword;
        var $m_sUsername;
        var $m_bPrivate;
        // foto's in file uploads stockeren
        var $m_ProfilePicture;

        public function __set($p_sProperty, $p_vValue)
        {

            switch($p_sProperty) {
                case "FirstName":
                    $this->m_sFirstName = $p_vValue;
                    break;
                case "LastName":
                    $this->m_sLastName = $p_vValue;
                    break;
                case "Email":
                    $this->m_sEmail = $p_vValue;
                    break;
                case "Password":
                    $this->m_sPassword = $p_vValue;
                    break;
                case "Username":
                    $this->m_sUsername = $p_vValue;
                    break;
                case "Private":
                    $this->m_bPrivate = $p_vValue;
                    break;
                case "ProfilePicture":
                    $this->m_ProfilePicture = $p_vValue;
                    break;
            }
        }

        public function __get($p_sProperty)
        {
            $vResult = null;
            switch($p_sProperty)
            {
                case "FirstName":
                    $vResult = $this->m_sFirstName;
                    break;

                case "LastName":
                    $vResult = $this->m_sLastName;
                    break;

                case "Email":
                    $vResult = $this->m_sEmail;
                    break;

                case "Password":
                    $vResult = $this->m_sPassword;
                    break;

                case "Private":
                    $vResult = $this->m_bPrivate;
                    break;

                case "ProfilePicture":
                    $vResult = $this->m_ProfilePicture;
                    break;
            }
            return $vResult;
        }


    $query = $pdoconn->prepare("INSERT INTO posts (title, post) values (:title, :post)");
    $query->execute();