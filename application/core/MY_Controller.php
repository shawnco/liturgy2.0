<?php

/**
 * Extends functionality of the default controller
 * @author Shawn Contant <shawnc366@gmail.com
 */

class MY_Controller extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Season_model');        
        date_default_timezone_set('America/Chicago');
        $this->data['season'] = $this->Season_model->getSeason();        
        $this->load->helper('url');
        $this->data['js'] = array();
        $this->data['css'] = array();
        $this->addStyle(array('style.css', 'font-awesome/css/font-awesome.min.css'));
        $this->addScript(array('jquery.min.js', 'jquery-ui/jquery-ui.min.js', 'bootstrap/js/bootstrap.min.js', 'default.js'));        
    }
    
    public function display($views, $data){
        $this->load->view('template/header', $data);
        if(gettype($views) == 'string'){
            $this->load->view($views, $data);
        }else{
            foreach($views as $v){
                $this->load->view($v, $data);
            }
        }
        $this->load->view('template/footer', $data);
    }
    
    public function addScript($fname){
        if(gettype($fname) === 'string'){
            $this->data['js'][] = base_url() . 'assets/js/' . $fname;
            return TRUE;
        }else if(gettype($fname) === 'array'){
            foreach($fname as $f){
                $this->data['js'][] = base_url() . 'assets/js/' . $f;
            }
            return TRUE;
        }else{
            return FALSE;
        }
    }
      
    public function addStyle($fname){
        if(gettype($fname) === 'string'){
            $this->data['css'][] = base_url() . 'assets/css/' . $fname;
            return TRUE;
        }else if(gettype($fname) === 'array'){
            foreach($fname as $f){
                $this->data['css'][] = base_url() . 'assets/css/' . $f;
            }
            return TRUE;
        }else{
            return FALSE;
        }
    }    
    
    public function message($type, $msg){
         return json_encode(array('type' => $type, 'message' => $msg));
    }
}
?>
