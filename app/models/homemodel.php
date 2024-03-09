<?php

class homemodel extends DModel{

    public function __construct()
    {
        parent::__construct();
    }

    public function category($table_category)
    {
        return $this->db->select($table_category);
    }
}

?>