<?php

class Liturgy_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function getOffices($id){
         $this->db->select('id, name');
         $this->db->where('scheme', $id);
         $output = $this->db->get('offices')->result_array();
         $this->db->select('name');
         $this->db->where('id', $id);
         $output['name'] = $this->db->get('schemes')->row_array()['name'];
         return $output;
    }
}
?>
