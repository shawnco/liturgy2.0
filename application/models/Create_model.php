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
          $data = array(
              'series_id' => $id,
              'season' => $this->input->post('season'),
              'week' => $this->input->post('week'),
              'text' => $this->input->post('weekly_text')
          );
          return $this->db->insert($type, $data);
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
          $data = array(
              'series_id' => $id,
              'season' => $this->input->post('season'),
              'text' => $this->input->post('text')
          );
          return $this->db->insert($type, $data);
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
          $data = array(
              'series_id' => $id,
              'season' => $this->input->post('season'),
              'week' => $this->input->post('week'),
              'text' => $this->input->post('song_text')
          );
          return $this->db->insert($type, $data);
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
     
     private function uploadImage($type){
     }
}