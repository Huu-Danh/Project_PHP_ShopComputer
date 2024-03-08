<?php
// Kế thừa từ DController
    class product extends DController{
        public function __construct()
        {
            parent::__construct();
            echo 'this is class product';
        }

        public function chitietsanpham($id)
        {
            return 'Chi tiết sản phẩm';
        }
    }
?>