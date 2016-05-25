<?php

class Index_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function getLiturgies(){
        return $this->db->get('schemes')->result_array();
    }
}
?>
