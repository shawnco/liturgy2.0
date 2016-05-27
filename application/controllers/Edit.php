<?php

class Edit extends MY_Controller {
     public function __construct(){
          parent::__construct();
          $this->data['title'] = 'Edit Page';
          $this->addStyle('edit.css');
     }
     
     public function index($id = null){
          $this->load->helper('form');
          switch($id){
               case 'hymns':
               case 'canticles':
                    $this->song();
                    break;
               case 'collects':
               case 'readings':
               case 'confessions':
                    $this->weekly();
                    break;
               case 'prayers':
                    $this->prayer();
                    break;
               case 'psalms':
                    $this->psalm();
                    break;
               case 'responsories':
               case 'versicles':
                    $this->preces();
                    break;
               case 'externals';
                    $this->external();
                    break;
               case 'canticle_antiphons':
               case 'psalm_antiphons':
                    $this->antiphon();
                    break;
               default:
                    break;
          }
     }
     
     private function song(){
          $this->display('edit/song.php', $this->data);
     }
     
     private function weekly(){
          $this->display('edit/weekly.php', $this->data);
     }
     
     private function prayer(){
          $this->display('edit/prayer.php', $this->data);
     }
     
     private function psalm(){
          $this->display('edit/psalm.php', $this->data);
     }
     
     private function preces(){
          $this->display('edit/preces.php', $this->data);
     }
     
     private function external(){
          $this->display('edit/external.php', $this->data);
     }
     
     private function antiphon(){
          $this->display('edit/antiphon.php', $this->data);
     }
}