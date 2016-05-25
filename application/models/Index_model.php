<?php

class Index_model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function getLiturgies(){
        return $this->db->get('schemes')->result_array();
    }
    
    public function getEverything(){
         $output = array();
         $output['schemes'] = array('Schemes' => $this->db->get('schemes')->result_array());
         $output['canticles'] = array('Canticles' => $this->db->get('canticle_series')->result_array());
         $output['confessions'] = array('Confessions' => $this->db->get('confession_series')->result_array());
         $output['externals'] = array('Externals' => $this->db->get('external_series')->result_array());
         $output['hymns'] = array('Hymns' => $this->db->get('hymn_series')->result_array());
         $output['psalms'] = array('Psalms' => $this->db->get('psalm_series')->result_array());
         $output['readings'] = array('Readings' => $this->db->get('reading_series')->result_array());
         $output['responsories'] = array('Responsories' => $this->db->get('responsory_series')->result_array());
         $output['versicles'] = array('Versicles' => $this->db->get('versicle_series')->result_array());
         return $output;
    }
}
?>
