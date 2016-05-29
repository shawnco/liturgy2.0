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
          $data = array(
              'series_id' => $id,
              'text' => $this->input->post('song_text')
          );
          return $this->db->insert($type, $data);
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
          echo 'YAY4';
          $data = array(
              'name' => $this->input->post('series_name')
          );
          $this->db->insert($type . '_series', $data);
          $id = $this->db->insert_id();
          $data = array(
              'series_id' => $id,
              'url' => $this->input->post('url')
          );
          return $this->db->insert($type, $data);
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
          $data = array(
              'series_id' => $id,
              'psalm_address' => $this->input->post('psalm_address')
          );
          return $this->db->insert($type, $data);
     }
     
     private function uploadImage($type){
     }
}