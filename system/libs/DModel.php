<?php

class Dmodel{
    
    protected $db = array(); //database connection

    public function __construct()
    {
        $this->db = new Database();    
    }
}

?>