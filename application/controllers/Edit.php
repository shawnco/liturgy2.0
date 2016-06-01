<?php

class Edit extends MY_Controller {
     public function __construct(){
          parent::__construct();
          $this->load->model('Edit_model');
          $this->data['title'] = 'Edit Page';
          $this->addStyle('edit.css');
     }
     
     public function index($type = null, $id = null){
          $this->pages = array('edit/open_fragment.php', 'edit/', 'edit/close_fragment.php');
          $this->data['element'] = $type;
          $this->data['id'] = $id;
          $this->data['content'] = $this->Edit_model->getContent($type, $id);
          $this->data['types'] = $this->Edit_model->getTypes();
          $this->data['options'] = array('Epiphany', 'Lent', 'Easter', 'Ordinary', 'Advent', 'Christmas');
          $this->load->helper('form');
          switch($type){
               case 'schemes':
                    $this->scheme();
                    break;
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
     
     private function scheme(){
          $this->pages[1] .= 'scheme.php';
          $this->display($this->pages, $this->data);
     }
     private function song(){
          $this->pages[1] .= 'song.php'; 
          $this->display($this->pages, $this->data);
     }
     
     private function weekly(){
          $this->pages[1] .= 'weekly.php';
          $this->display($this->pages, $this->data);
     }
     
     private function prayer(){
          $this->pages[1] .= 'prayer.php';
          $this->display($this->pages, $this->data);
     }
     
     private function psalm(){
          $this->pages[1] .= 'psalm.php';
          $this->display($this->pages, $this->data);
     }
     
     private function preces(){
          $this->pages[1] .= 'preces.php';
          $this->display($this->pages, $this->data);
     }
     
     private function external(){
          $this->pages[1] .= 'external.php';
          $this->display($this->pages, $this->data);
     }
     
     private function antiphon(){
          $this->pages[1] .= 'antiphon.php';
          $this->display($this->pages, $this->data);
     }
}