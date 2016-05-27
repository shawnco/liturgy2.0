<?php

class Edit extends MY_Controller {
     public function __construct(){
          parent::__construct();
          $this->data['title'] = 'Edit Page';
          $this->addStyle('edit.css');
     }
     
     public function index($id = 1){
          $this->load->helper('form');
          $this->display('edit/prayer.php', $this->data);
     }
}