<?php
// kế thừa từ DController
class index extends DController{
    public function __construct() {
            $data = array();
            parent::__construct();
    }

    public function homepage()
    {
        $this->load->view('header');
        $homemodel = $this->load->model('homemodel');
        $this->load->view('home');
        $this->load->view('footer');
    }

    public function category()
    {
        $this->load->view('header');
        $homemodel = $this->load->model('homemodel');
        
        $table_category = 'category'; 
        $data['category'] = $homemodel->category($table_category);
        
        $this->load->view('category', $data);
        $this->load->view('footer');
    }

    

} 

?>