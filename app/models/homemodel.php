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

    public function categorybyid($table_category, $id)
    {
        $sql = "SELECT * FROM $table_category WHERE id=:id";
        $data = array(':id' => $id);
        return $this->db->select($sql,$data);
    }
}

?> 