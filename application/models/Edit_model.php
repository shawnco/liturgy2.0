<?php

class Edit_model extends CI_Model {
     public function __construct(){
          parent::__construct();
          $this->load->database();
     }
     
     public function getTypes(){
          return $this->db->get('type')->result_array();
     }
}
?>
