<?php

class Create extends MY_Controller {
     public function __construct(){
          parent::__construct();
          $this->load->model('Create_model');
          $this->addStyle('edit.css');
     }
     
     public function index($id = null){
          if(null !== $this->input->post('submit')){
               $this->add();
          }else{
               $this->pages = array('edit/open_fragment.php', 'edit/', 'edit/close_fragment.php');
               $this->data['element'] = $id;
               $this->data['title'] = 'Create ' . $id;
               $this->data['types'] = $this->Create_model->getTypes();
               $this->data['options'] = array('Epiphany', 'Lent', 'Easter', 'Ordinary', 'Advent', 'Christmas');
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
                         echo 'YAY';
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
          echo 'YAY2';
          $this->pages[1] .= 'external.php';
          $this->display($this->pages, $this->data);
     }
     
     private function antiphon(){
          $this->pages[1] .= 'antiphon.php';
          $this->display($this->pages, $this->data);
     }
     
     public function add(){
          // Switch to the proper method based on what we're dealing with.
          $id = $this->input->post('element');
          switch($id){
               case 'hymns':
                    $this->Create_model->addSong(HYMN); break;
               case 'canticles':
                    $this->Create_model->addSong(CANTICLE); break;
               case 'collects':
                    $this->Create_model->addWeekly(COLLECT); break;
               case 'readings':
                    $this->Create_model->addWeekly(READING); break;
               case 'confessions':
                    $this->Create_model->addWeekly(CONFESSION); break;
               case 'prayers':
                    $this->Create_model->addPrayer(PRAYER); break;
               case 'psalms':
                    $this->Create_model->addPsalm(PSALM); break;
               case 'responsories':
                    $this->Create_model->addPreces(RESPONSORY); break;
               case 'versicles':
                    $this->Create_model->addPreces(VERSICLE); break;
               case 'externals';
                    echo 'YAY3';
                    $this->Create_model->addExternal(EXTERNAL); break;
               case 'canticle_antiphons':
                    $this->Create_model->addAntiphon(CANTICLE_ANTIPHON); break;
               case 'psalm_antiphons':
                    $this->Create_model->addAntiphon(PSALM_ANTIPHON); break;
               default:
                    break;
          }  
          $_POST['submit'] = null;
          $this->index($id);
     }
}