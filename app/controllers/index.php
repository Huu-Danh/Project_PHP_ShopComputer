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

        $table_category = 'category'; 
        $data['category'] = $homemodel->category($table_category);

        $this->load->view('home', $data);
        $this->load->view('footer');
    }


    

} 

?>