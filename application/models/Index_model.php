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
         $output['Schemes'] = $this->db->get('schemes')->result_array();
         $output['Canticle Antiphons'] = $this->db->get('canticle_antiphon_series')->result_array();
         $output['Canticles'] = $this->db->get('canticle_series')->result_array();
         $output['Collects'] = $this->db->get('collect_series')->result_array();
         $output['Confessions'] = $this->db->get('confession_series')->result_array();
         $output['Externals'] = $this->db->get('external_series')->result_array();
         $output['Hymns'] = $this->db->get('hymn_series')->result_array();
         $output['Psalm Antiphons'] = $this->db->get('psalm_antiphon_series')->result_array();
         $output['Psalms'] = $this->db->get('psalm_series')->result_array();
         $output['Prayers'] = $this->db->get('prayer_series')->result_array();
         $output['Readings'] = $this->db->get('reading_series')->result_array();
         $output['Responsories'] = $this->db->get('responsory_series')->result_array();
         $output['Versicles'] = $this->db->get('versicle_series')->result_array();
         return $output;
    }
}
?>
