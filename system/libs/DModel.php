<?php

class DModel{
    
    protected $db = array(); //database connection

    public function __construct()
    {
        $connect = 'mysql:host=localhost;dbname=doanphp;charset=utf8';  //PDO connection string
        $user = 'root';
        $pass = '';
        $this->db = new Database($connect, $user, $pass);    
    }
}

?>