<?php
// kế thừa từ DController
class category extends DController{
    public function __construct() {
            $data = array();
            parent::__construct();
    }


    public function category()
    {
        $this->load->view('header');
        $categorymodel = $this->load->model('categorymodel');
        $table_category = 'category'; 
        $data['category'] = $categorymodel->category($table_category);
        $this->load->view('category', $data);
        $this->load->view('footer');
    }

    public function catebyid()
    {
        $this->load->view('header');
        $categorymodel = $this->load->model('categorymodel');
        $id = 2;
        $table_category = 'category'; 
        $data['categorybyid'] = $categorymodel->categorybyid($table_category, $id);
        $this->load->view('categorybyid', $data);
        $this->load->view('footer');
    }
    

} 

?>