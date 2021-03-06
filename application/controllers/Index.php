<?php

/**
 * Index controller
 * @author Shawn Contant <shawnc366@gmail.com>
 */

class Index extends MY_Controller {
    public function __construct(){
        parent::__construct();
        $this->data['title'] = 'Index';
        $this->load->model('Index_model');
        $this->addStyle('index.css');
    }
    
    public function index(){
        $this->data['everything'] = $this->Index_model->getEverything();
        $this->display('index/index', $this->data);
    }
}
?>
