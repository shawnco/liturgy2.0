<?php

class Edit_model extends CI_Model {
     public function __construct(){
          parent::__construct();
          $this->load->database();
     }
     
     public function getTypes(){
          return $this->db->get('type')->result_array();
     }
     
     public function getContent($type, $id){
          switch($type){
               case 'schemes': $table = SCHEME; break;
               case 'hymns': $table = HYMN; break;
               case 'canticles': $table = CANTICLE; break;
               case 'collects': $table = COLLECT; break;
               case 'readings': $table = READING; break;
               case 'confessions': $table = CONFESSION; break;
               case 'prayers': $table = PRAYER; break;
               case 'psalms': $table = PSALM; break;
               case 'responsories': $table = RESPONSORY; break;
               case 'versicles': $table = VERSICLE; break;
               case 'externals'; $table = EXTERNAL; break;
               case 'canticle_antiphons': $table = CANTICLE_ANTIPHON; break;
               case 'psalm_antiphons': $table = PSALM_ANTIPHON;
               default: break;
          }
          $this->db->where('series_id', $id);
          $result = $this->db->get($table)->result_array();
          $this->db->where('id', $id);
          $result['name'] = $this->db->get($table . '_series')->row_array()['name'];
          
          if($type === 'schemes'){
               foreach($result as $k => $v){
                    if(is_int($k)){
                         $this->db->where('office_id', $id);
                         $result[$k]['elements'] = $this->db->get('elements')->result_array();
                    }
               }
          }
          return $result;
     }
}
?>
