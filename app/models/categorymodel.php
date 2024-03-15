<?php

class categorymodel extends DModel{

    public function __construct()
    {
        parent::__construct();
    }

    public function category($table_category)
    {
        $sql = "SELECT * FROM $table_category";
        return $this->db->select($sql);
    }

    public function categorybyid($table_category, $id)
    {
        $sql = "SELECT * FROM $table_category WHERE id=:id";
        $data = array(':id' => $id);
        return $this->db->select($sql,$data);
    }
}

?> 