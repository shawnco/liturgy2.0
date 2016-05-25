<?php

class Liturgy extends MY_Controller {
     public function __construct(){
          parent::__construct();
          $this->load->model('Liturgy_model');
     }
     
     public function index($id = 1, $office = null){
          $this->data['offices'] = $this->Liturgy_model->getOffices($id);
          if($office === null){
               $this->data['id'] = $id;
               $this->display('liturgy/index', $this->data);
          }else{
               $this->showOffice($id, $this->data['offices']['name'], $office);
          }
     }
     
     private function showOffice($id, $name, $office){
          $this->data['id'] = $id;
          $this->data['name'] = $name;
          $this->data['office'] = $office;
          $this->display('liturgy/office', $this->data);
     }
}
?>
