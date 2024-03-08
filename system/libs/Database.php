<?php

class Database extends PDO{   

    public function __construct()
    {
        $connect = 'mysql:dbname:=doanphp; host=localhost';  //PDO connection string
        $user='root';
        $pass = '';
        $db = new PDO( $connect, $user, $pass );   
        parent::__construct($connect,$user,$pass);  
    }
}

?>