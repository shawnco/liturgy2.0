<?php

class Create extends MY_Controller {
     public function __construct(){
          parent::__construct();
          $this->load->helper('security');
          $this->load->model('Create_model');
          $this->addStyle('edit.css');
          $this->addScript('create.js');
     }
     
     public function index($id = null){
          $this->pages = array('edit/open_fragment.php', 'edit/', 'edit/close_fragment.php');
          $this->data['element'] = $id;
          $this->data['title'] = 'Create ' . $id;
          $this->data['types'] = $this->Create_model->getTypes();
          $this->data['options'] = array('Epiphany', 'Lent', 'Easter', 'Ordinary', 'Advent', 'Christmas');
          // Catch-all dummy that stops the edit views from crying
          $this->data['content'][0] = array(
              'url' => '',
              'season' => '',
              'week' => '',
              'song_text' => '',
              'upload_image' => '',
              'upload_music' => '',
              'weekly_text' => '',
              'text' => '',
              'psalm_address' => ''
          );
          $this->load->helper('form');
          switch($id){
               case 'schemes':
                    $this->schemes();
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
     
     private function schemes(){
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
     
     public function add(){
          $this->load->library('form_validation');
          // Switch to the proper method based on what we're dealing with.
          $id = $this->input->post('element');
          if(in_array($id, array('hymns', 'canticles'))){
               $validation = 'song';
          }else if(in_array($id, array('collects', 'readings', 'confessions'))){
               $validation = 'weekly';
          }else if(in_array($id, array('prayers'))){
               $validation = 'prayer';
          }else if(in_array($id, array('psalms'))){
               $validation = 'psalm';
          }else if(in_array($id, array('responsories', 'versicles'))){
               $validation = 'preces';
          }else if(in_array($id, array('externals'))){
               $validation = 'external';
          }else if(in_array($id, array('canticle_antiphons', 'psalm_antiphons'))){
               $validation = 'antiphon';
          }else{
               echo $this->message('error', 'Invalid element type!');
          }
          if($this->form_validation->run($validation) === FALSE){
               echo $this->message('error', validation_errors());
          }else{
               switch($id){
                    case 'hymns':
                         $res = $this->Create_model->addSong(HYMN); break;
                    case 'canticles':
                         $res = $this->Create_model->addSong(CANTICLE); break;
                    case 'collects':
                         $res = $this->Create_model->addWeekly(COLLECT); break;
                    case 'readings':
                         $res = $this->Create_model->addWeekly(READING); break;
                    case 'confessions':
                         $res = $this->Create_model->addWeekly(CONFESSION); break;
                    case 'prayers':
                         $res = $this->Create_model->addPrayer(PRAYER); break;
                    case 'psalms':
                         $res = $this->Create_model->addPsalm(PSALM); break;
                    case 'responsories':
                         $res = $this->Create_model->addPreces(RESPONSORY); break;
                    case 'versicles':
                         $res = $this->Create_model->addPreces(VERSICLE); break;
                    case 'externals';
                         $res = $this->Create_model->addExternal(EXTERNAL); break;
                    case 'canticle_antiphons':
                         $res = $this->Create_model->addAntiphon(CANTICLE_ANTIPHON); break;
                    case 'psalm_antiphons':
                         $res = $this->Create_model->addAntiphon(PSALM_ANTIPHON); break;
                    default:
                         $res = FALSE; break;
               }  
               if($res){
                    echo $this->message('success', 'Element added.');
               }else{
                    echo $this->message('error', 'Unable to add element.');
               }
          }      
     }
}