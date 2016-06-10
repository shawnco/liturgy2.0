<?php

class Create_model extends CI_Model {
     public function __construct(){
          parent::__construct();
          $this->load->database();
     }
     
     public function getTypes(){
          return $this->db->get('type')->result_array();
     }
     
     public function addSong($type){
          $data = array(
              'name' => $this->input->post('series_name'),
          );
          $this->db->insert($type . '_series', $data);
          $id = $this->db->insert_id();
          $data = array();
          foreach($this->input->post('song_text') as $row){
               $data[] = array(
                   'series_id' => $id,
                   'text' => $row
               );
          }
          $this->db->insert_batch($type, $data);
          return $this->db->affected_rows() > 0;
     }
     
     public function addWeekly($type){
          $data = array(
              'name' => $this->input->post('series_name')
          );
          $this->db->insert($type . '_series', $data);
          $id = $this->db->insert_id();
          $data = array();
          foreach($this->input->post('weekly_text') as $row){
               $data[] = array(
                   'series_id' => $id,
                   'text' => $row
               );
          }
          $this->db->insert_batch($type, $data);
          return $this->db->affected_rows() > 0;
     }
     
     public function addPrayer($type){
          $data = array(
              'name' => $this->input->post('series_name')
          );
          $this->db->insert($type . '_series', $data);
          $id = $this->db->insert_id();
          $data = array(
              'series_id' => $id,
              'text' => $this->input->post('weekly_text')
          );
          return $this->db->insert($type, $data);
     }
     
     public function addPreces($type){
          $data = array(
              'name' => $this->input->post('series_name')
          );
          $this->db->insert($type . '_series', $data);
          $id = $this->db->insert_id();
          $data = array();
          foreach($this->input->post('text') as $row){
               $data[] = array(
                   'series_id' => $id,
                   'season' => $this->input->post('season'),
                   'text' => $row
               );
          }
          $this->db->insert_batch($type, $data);
          return $this->db->affected_rows() > 0;
     }
     
     public function addExternal($type){
          $data = array(
              'name' => $this->input->post('series_name')
          );
          $this->db->insert($type . '_series', $data);
          $id = $this->db->insert_id();
          $data = array();
          foreach($this->input->post('url') as $row){
               $data[] = array(
                   'series_id' => $id,
                   'url' => $row
               );
          }
          $this->db->insert_batch($type, $data);
          return $this->db->affected_rows() > 0;
     }
     
     public function addAntiphon($type){
          $data = array(
              'name' => $this->input->post('series_name')
          );
          $this->db->insert($type . '_series', $data);
          $id = $this->db->insert_id();
          $data = array();
          foreach($this->input->post('song_text') as $row){
               $data[] = array(
                   'series_id' => $id,
                   'week' => $this->input->post('week'),
                   'text' => $row 
               );
          }
          $this->db->insert_batch($type, $data);
          return $this->db->affected_rows() > 0;
     }
     
     public function addPsalm($type){
          $data = array(
              'name' => $this->input->post('series_name')
          );
          $this->db->insert($type . '_series', $data);
          $id = $this->db->insert_id();
          $data = array();
          foreach($this->input->post('psalm_address') as $row){
               $data[] = array(
                   'series_id' => $id,
                   'psalm_address' => $row
               );
          }
          $this->db->insert_batch($type, $data);
          return $this->db->affected_rows() > 0;
     }
     
     public function addScheme(){
          $data = array(
              'name' => $this->input->post('series_name')
          );
          $this->db->insert('scheme_series', $data);
          $id = $this->db->insert_id();
          $data = array();
          
          // This is a multistage process in which you first add the office, then you sift through its elements and insert them as needed.
          foreach($this->input->post('scheme') as $row){
               $data = array(
                   'series_id' => $id,
                   'name' => $row['name']
               );
               $this->db->insert($data, 'scheme');
               $officeID = $this->db->insert_id();
               $data = array();
               foreach($row['types'] as $k => $v){
                    $data = array(
                        'office_id' => $officeID,
                        'element_type' => $row['types'][$k],
                        'element_series' => $row['series'][$k],
                        'number' => $row['number'][$k]
                    );
                    $this->db->insert('elements', $data);
               }
          }
          return $this->db->affected_rows() > 0;
     }
     
     private function uploadImage($type){
     }
     
     public function getSeries($series){
          $this->db->where('id', $series);
          $tb = $this->db->get('type')->row_array()['table_name'];
          return $this->db->get($tb . '_series')->result_array();
     }     
}