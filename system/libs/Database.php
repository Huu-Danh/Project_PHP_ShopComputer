<?php

class Database extends PDO {   

    public function __construct($connect, $user, $pass)
    {
        parent::__construct($connect, $user, $pass);  
    }

    public function select($table)
    {
        $sql = "SELECT * FROM $table";
        $statement = $this->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }
}

?>