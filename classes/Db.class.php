<?php
    class Db
    {
     private $m_rConn;
     private static $instance = NULL;

     // SINGLETON PATTERN EXAMPLE: http://phpadvocate.com/blog/2011/04/php-using-a-singleton-pattern-with-oop/
     private function __construct()
     {
      $this->m_rConn = new mysqli("localhost", "root", "root", "imdstagram");
     }
    }
